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
	// Dashboard
	Route::get('/dashboard', 'Admin\AdminController@index')->name('admin-dashboard');
	// Lembaga
	Route::get('/manage-government', 'Admin\ManageGovernmentController@index')->name('admin.government');
	Route::get('/manage-government/add', 'Admin\ManageGovernmentController@create')->name('admin.government.add');
	Route::get('/manage-government/{id}', 'Admin\ManageGovernmentController@edit')->name('admin.government.edit');
	Route::post('/manage-government/post', 'Admin\ManageGovernmentController@store')->name('admin.government.store');
	Route::put('/manage-government/post/{id}', 'Admin\ManageGovernmentController@update')->name('admin.government.update');
	Route::delete('/manage-government/{id}', 'Admin\ManageGovernmentController@destroy')->name('admin.government.delete');
	// Sekolah
	Route::get('/manage-school', 'Admin\ManageSchoolController@index')->name('admin.school');
	Route::get('/manage-school/add', 'Admin\ManageSchoolController@create')->name('admin.school.add');
	Route::get('/manage-school/{id}', 'Admin\ManageSchoolController@edit')->name('admin.school.edit');
	Route::post('/manage-school/post', 'Admin\ManageSchoolController@store')->name('admin.school.store');
	Route::put('/manage-school/update/{id}', 'Admin\ManageSchoolController@update')->name('admin.school.update');
	Route::delete('/manage-school/{id}', 'Admin\ManageSchoolController@destroy')->name('admin.school.delete');

	// User
	Route::get('/manage-user', 'Admin\ManageUserController@index')->name('admin.user');
	Route::get('/manage-user/{id}', 'Admin\ManageUserController@edit')->name('admin.user.edit');
	Route::put('/manage-user/update/{id}', 'Admin\ManageUserController@update')->name('admin.user.update');
	Route::delete('/manage-user/{id}', 'Admin\ManageUserController@destroy')->name('admin.user.delete');

	// Agen
	Route::get('/manage-agen', 'Admin\ManageAgenController@index')->name('admin.agen');
	Route::get('/manage-agen/add', 'Admin\ManageAgenController@create')->name('admin.agen.add');
	Route::get('/manage-agen/{id}', 'Admin\ManageAgenController@edit')->name('admin.agen.edit');
	Route::post('/manage-agen/post', 'Admin\ManageAgenController@store')->name('admin.agen.store');
	Route::put('/manage-agen/post/{id}', 'Admin\ManageAgenController@update')->name('admin.agen.update');
	Route::delete('/manage-agen/delete/{id}', 'Admin\ManageAgenController@destroy')->name('admin.agen.delete');

	// Request Agen
	Route::get('/manage-request', 'Admin\RequestAgenController@index')->name('admin.agen.request');
	Route::get('/manage-request/{id}', 'Admin\RequestAgenController@edit')->name('admin.agen.request.edit');
	Route::put('/manage-request/post/{id}', 'Admin\RequestAgenController@update')->name('admin.agen.request.update');
	Route::delete('/manage-request/delete/{id}', 'Admin\RequestAgenController@destroy')->name('admin.agen.request.delete');

	// Request Government
	// Route::get('/manage-request/government', 'Admin\RequestGovernmentController@index')->name('admin.government.request');
	// Route::get('/manage-request/government/{id}', 'Admin\RequestGovernmentController@edit')->name('admin.government.request.edit');
	// Route::put('/manage-request/government/post/{id}', 'Admin\RequestGovernmentController@update')->name('admin.government.request.update');
	// Route::delete('/manage-request/government/delete/{id}', 'Admin\RequestGovernmentController@destroy')->name('admin.agen.governmet.delete');
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

	
	Route::post('/saldo/edit/{id}', 'User\DonasiController@Donasi')->name('donasi.edit')
	->middleware('verified');

	// Pembayaran
	Route::get('/Pembayaran', 'User\PembayaranController@school')->name('school')
	->middleware('verified');
	Route::get('/spp', 'User\PembayaranController@payment')->name('school.payment')
	->middleware('verified');

	// Jenis Pembayran
	Route::get('/spp/tahunan/{id}', 'User\PembayaranController@tahunan')->name('school.tahunan');
	Route::get('/spp/bulanan/{id}', 'User\PembayaranController@bulanan')->name('school.bulanan');
	Route::get('/spp/daftar_ulang/{id}', 'User\PembayaranController@dalang')->name('school.dalang');
	Route::get('/spp/praktik/{id}', 'User\PembayaranController@praktik')->name('school.praktik');
	Route::get('/spp/prakerin/{id}', 'User\PembayaranController@prakerin')->name('school.prakerin');
	Route::get('/spp/ujianakhir/{id}', 'User\PembayaranController@ujianAkhir')->name('school.ujianAkhir');
	Route::get('/spp/ujiannasional/{id}', 'User\PembayaranController@ujianNasional')->name('school.ujianNasional');
	Route::post('/spp/ujiannasional/{id}', 'User\PembayaranController@Ppayment')->name('school.payment.proses');
});

// AGEN
Route::group(['prefix' => 'agen'], function(){
	Route::get('/login', 'Agen\AgenLoginController@index')->name('agen.login');
	Route::post('/login/added', 'Agen\AgenLoginController@login')->name('agen.store');
	Route::get('/dashboard', 'Agen\AgenController@index')->name('agen.dashboard');
	Route::get('/search-user', 'Agen\AgenController@searchUser')->name('agen.search');
	Route::get('/search-user/add', 'Agen\AgenController@getUser')->name('agen.get');
	Route::get('/user/saldo/{id}', 'Agen\AgenController@formSaldo')->name('agen.saldo');
	Route::get('/user/save/{id}', 'Agen\AgenController@formNabung')->name('agen.save');
	Route::post('/search-user/post/saldo', 'Agen\AgenController@transferSaldo')->name('agen.post.saldo');
	Route::post('/search-user/post/save', 'Agen\AgenController@transferNabung')->name('agen.post.save');
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

