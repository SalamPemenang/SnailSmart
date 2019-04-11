<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
    	$this->middleware('guest:admin');
    }

    public function index()
    {
    	return view('admin.login');
    }

    public function login(Request $request)
    {
    	// Validate
    	$this->validate($request,[
    		'email' 	=> 'required|email',
    		'password'  => 'required|min:6'
    	]);

    	// Attempt
    	if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
    		// Jika Berhasil
    		return redirect()->route('admin-dashboard');
    	}
    	// Jika Gagal
    	return redirect()->back()->withInput($request->only('email', 'remember'));
    	
    }
}
