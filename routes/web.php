<?php

use App\Constants\UserRoleConstants;

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */
Route::get('/', 'LoginController@login')->name('login');
Route::post('/login-submit', 'LoginController@loginSubmit')->name('login-submit');

Route::group(['middleware' => 'auth:' . UserRoleConstants::Admin], function() {
    Route::get('/logout', 'LoginController@logout')->name('logout');
    Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
    
    Route::get('/users', 'UserController@index')->name('users');
    Route::get('/users/create-new', 'UserController@create')->name('user-create');
    Route::post('/users/create-new', 'UserController@store')->name('user-create-submit');
});
