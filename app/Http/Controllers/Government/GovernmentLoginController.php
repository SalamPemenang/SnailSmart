<?php

namespace App\Http\Controllers\Government;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class GovernmentLoginController extends Controller
{
    public function __construct()
    {
    	$this->middleware('guest:government');
    }

    public function index()
    {
    	return view('government.login');
    }

    public function login(Request $request)
    {
    	// Validate
    	$this->validate($request,[
    		'email' 	=> 'required|email',
    		'password'  => 'required|min:6'
    	]);

    	// Attempt
    	if(Auth::guard('government')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
    		// Jika Berhasil
    		return redirect()->route('government.dashboard');
    	}
    	// Jika Gagal
    	return redirect()->back()->withInput($request->only('email', 'remember'));
    	
    }
}
