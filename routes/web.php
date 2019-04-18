<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// ADMIN
Route::group(['prefix' => 'admin'], function(){
	// Login Admin
	Route::get('/login', 'Admin\AdminLoginController@index')->name('admin-login');
	Route::post('/login/added', 'Admin\AdminLoginController@login')->name('admin-store');
	Route::get('/dashboard', 'Admin\AdminController@index')->name('admin-dashboard');
});

// USER
Route::group(['prefix' => 'home'], function(){
	Route::get('/', 'HomeController@index')->name('home');
	Route::get('/profile', 'HomeController@profile')->name('profile');
	Route::post('/profile/edit', 'User\UserController@editProfile')->name('edit-profile');
	Route::post('/profile/edit/foto', 'User\UserController@editfotoProfile')->name('edit-foto-profile');
});

