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
	Route::get('/donasi', 'Admin\ManageDonasiController@index')->name('admin.donasi');
	Route::get('/lembaga', 'Admin\ManageLembagaController@index')->name('admin.lembaga');
});

// USER
Route::group(['prefix' => 'home'], function(){
	Route::get('/', 'HomeController@index')->name('home');
	Route::get('/profile', 'HomeController@profile')->name('profile');
	// Donasi
	Route::get('/donasi', 'User\DonasiController@category')->name('donasi.category');
	Route::get('/donasi/lembaga', 'User\DonasiController@government')->name('donasi.government');
	Route::get('/donasi/form/{id}', 'User\DonasiController@formDonate')->name('donasi.form');

	Route::get('/saldo/{id}', 'User\MenabungController@index')->name('saldo');
	Route::post('/saldo/edit/{id}', 'User\MenabungController@edit')->name('saldo.add');
});

Route::group(['prefix' => 'agen'], function(){
	Route::get('/login', 'Agen\AgenLoginController@index')->name('agen.login');
	Route::post('/login/added', 'Agen\AgenLoginController@login')->name('agen.store');
	Route::get('/dashboard', 'Agen\AgenController@index')->name('agen.dashboard');
});

Route::group(['prefix' => 'school'], function(){
	Route::get('/login', 'School\SchoolLoginController@index')->name('school.login');
	Route::post('/login/added', 'School\SchoolLoginController@login')->name('school.store');
	Route::get('/dashboard', 'School\SchoolController@index')->name('school.dashboard');
});

Route::group(['prefix' => 'government'], function(){
	Route::get('/login', 'Government\GovernmentLoginController@index')->name('government.login');
	Route::post('/login/added', 'Government\GovernmentLoginController@login')->name('government.store');
	Route::get('/dashboard', 'Government\GovernmentController@index')->name('government.dashboard');
});

