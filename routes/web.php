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

Auth::routes(['verify' => true]);

// ADMIN
Route::group(['prefix' => 'admin'], function(){
	// Login Admin
	Route::get('/login', 'Admin\AdminLoginController@index')->name('admin-login');
	Route::post('/login/added', 'Admin\AdminLoginController@login')->name('admin-store');
	Route::get('/dashboard', 'Admin\AdminController@index')->name('admin-dashboard');

	// donasi
	Route::get('/manage-donasi', 'Admin\ManageDonasiController@index')->name('admin.donasi');
	Route::get('/manage-donasi/{id}', 'Admin\ManageDonasiController@edit')->name('admin.donasi.edit');
	Route::post('/manage-donasi/post', 'Admin\ManageDonasiController@store')->name('admin.donasi.store');
	Route::delete('/manage-donasi/{delete}', 'Admin\ManageDonasiController@destroy')->name('admin.donasi.delete');

	// Lembaga
	Route::get('/manage-lembaga', 'Admin\ManageLembagaController@index')->name('admin.lembaga');
	Route::get('/manage-lembaga/{id}', 'Admin\ManageLembagaController@edit')->name('admin.lembaga.edit');
	Route::post('/manage-lembaga/post', 'Admin\ManageLembagaController@store')->name('admin.lembaga.store');
	Route::delete('/manage-lembaga/{delete}', 'Admin\ManageLembagaController@destroy')->name('admin.lembaga.delete');

	// Saldo / Menabung
	Route::get('/manage-nabung', 'Admin\ManageMenabungController@index')->name('admin.nabung');

	// Sekolah
	Route::get('/manage-sekolah', 'Admin\ManagePembayaranController@index')->name('admin.sekolah');

	// User
	Route::get('/manage-user', 'Admin\ManageUserController@index')->name('admin.user');

	// Agen
	Route::get('/manage-agen', 'Admin\ManageAgenController@index')->name('admin.agen');
	Route::get('/manage-agen/{id}', 'Admin\ManageAgenController@edit')->name('admin.agen.edit');
	Route::post('/manage-agen/post', 'Admin\ManageAgenController@store')->name('admin.agen.store');
	Route::delete('/manage-agen/delete/{id}', 'Admin\ManageAgenController@destroy')->name('admin.agen.delete');
});

// USER
Route::group(['prefix' => 'home'], function(){
	Route::get('/', 'HomeController@index')->name('home')
	->middleware('verified');

	Route::get('/profile', 'HomeController@profile')->name('profile')
	->middleware('verified');

	Route::get('/daftar-jadi-agen', 'User\UserController@daftarjadiagen')->name('daftar-agen')
	->middleware('verified');

	Route::post('/profile/edit', 'User\UserController@editProfile')->name('edit-profile')
	->middleware('verified');

	Route::post('/profile/edit/foto', 'User\UserController@editfotoProfile')->name('edit-foto-profile')
	->middleware('verified');

	Route::get('/profile/ganti-kata-sandi', 'User\UserController@showgantisandi')->name('ganti-kata-sandi')
	->middleware('verified');

	Route::post('/profile/edit/Kata-Sandi', 'User\UserController@editkatasandi')->name('edit-Kata-sandi')
	->middleware('verified');

	// Donasi
	Route::get('/donasi', 'User\DonasiController@category')->name('donasi.category')
	->middleware('verified');

	Route::get('/donasi/lembaga', 'User\DonasiController@government')->name('donasi.government')
	->middleware('verified');

	Route::get('/donasi/form/{id}', 'User\DonasiController@formDonate')->name('donasi.form')
	->middleware('verified');

	Route::get('/saldo/{id}', 'User\MenabungController@index')->name('saldo')
	->middleware('verified');
	
	Route::post('/saldo/edit/{id}', 'User\MenabungController@edit')->name('saldo.add')
	->middleware('verified');
});

// AGEN
Route::group(['prefix' => 'agen'], function(){
	Route::get('/login', 'Agen\AgenLoginController@index')->name('agen.login');
	Route::post('/login/added', 'Agen\AgenLoginController@login')->name('agen.store');
	Route::get('/dashboard', 'Agen\AgenController@index')->name('agen.dashboard');
	Route::get('/search-user', 'Agen\AgenController@searchUser')->name('agen.search');
	Route::get('/search-user/add', 'Agen\AgenController@getUser')->name('agen.get');
	Route::get('/user/{id}', 'Agen\AgenController@formSaldo')->name('agen.edit');
	Route::post('/search-user/post', 'Agen\AgenController@transferSaldo')->name('agen.post');
});

// SCHOOL
Route::group(['prefix' => 'school'], function(){
	Route::get('/login', 'School\SchoolLoginController@index')->name('school.login');
	Route::post('/login/added', 'School\SchoolLoginController@login')->name('school.store');
	Route::get('/dashboard', 'School\SchoolController@index')->name('school.dashboard');
});

// GOVERNMENT
Route::group(['prefix' => 'government'], function(){
	Route::get('/login', 'Government\GovernmentLoginController@index')->name('government.login');
	Route::post('/login/added', 'Government\GovernmentLoginController@login')->name('government.store');
	Route::get('/dashboard', 'Government\GovernmentController@index')->name('government.dashboard');
});

