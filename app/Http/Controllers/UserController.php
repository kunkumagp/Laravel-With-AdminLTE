<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\User;
use App\UserRole;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('roles')->get();
        // dd($users);
        return view('pages.users.user-list', [
            'users' => $users,
            'title' => 'Users List'
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $userRoles = UserRole::all();
        // dd($userRoles);
        // dd('user-create');
        return view('pages.users.user-create', [
            'userRoles'=>$userRoles,
            'title' => 'Users Create'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $newUser = new User();
            $newUser->first_name = $request->firstName;
            $newUser->last_name = $request->lastName;
            $newUser->address_1 = $request->addres1;
            $newUser->address_2 = $request->addres2;
            $newUser->city = $request->city;
            $newUser->email = $request->email;
            $newUser->gender = $request->gender;
            $newUser->save();
            $newUser->roles()->attach($request->userRole);
            
            Alert::success('Success Title', 'Success Message');
            // alert()->success('SuccessAlert','Lorem ipsum dolor sit amet.');
            
            $userRoles = UserRole::all();

            return view('pages.users.user-create', [
                'userRoles'=>$userRoles,
                'title' => 'Users Create'
            ]);
        } catch (\Throwable $th) {
            Alert::error('Error Title', 'Error Message');
            return $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
