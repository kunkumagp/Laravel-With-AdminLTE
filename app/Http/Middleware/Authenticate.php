<?php

namespace App\Http\Middleware;

use App\Constants\UserRoleConstants;
use Closure;
use Illuminate\Support\Facades\Auth;
use function redirect;

class Authenticate {

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  Request  $request
     * @return string
     */
    public function handle($request, Closure $next, $role) {
        if (Auth::check()) {
            if (Auth::user()->role == $role) {
                return $next($request);
            } else {
                if ($role == UserRoleConstants::Admin) {
                    return redirect()
                            ->route('login')
                            ->with('header-message', [
                                'message' => 'You are not allowed to access this.',
                                'class' => 'danger'
                    ]);
                }
            }
        } else {
            if ($role == UserRoleConstants::Admin) {
                return redirect()->route('login');
            }
        }
    }

}
