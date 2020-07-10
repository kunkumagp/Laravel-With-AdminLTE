<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use function back;
use function redirect;
use function view;

class LoginController extends Controller {

    public function login() {
        return view('vendor.adminlte.login');
    }

    public function loginSubmit(Request $request) {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('email', '=', $request->email)->first();
        if (isset($user) && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->route('dashboard');
        } else {
            return back()->with('data', [
                    'message' => 'Login credentials invalid',
                    'class' => 'danger'
            ]);
        }
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        return redirect()->route('login');
    }

}
