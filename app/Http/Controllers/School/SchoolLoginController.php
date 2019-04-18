<?php

namespace App\Http\Controllers\School;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class SchoolLoginController extends Controller
{
    public function __construct()
    {
    	$this->middleware('guest:school');
    }

    public function index()
    {
    	return view('school.login');
    }

    public function login(Request $request)
    {
    	// Validate
    	$this->validate($request,[
    		'email' 	=> 'required|email',
    		'password'  => 'required|min:6'
    	]);

    	// Attempt
    	if(Auth::guard('school')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
    		// Jika Berhasil
    		return redirect()->route('school.dashboard');
    	}
    	// Jika Gagal
    	return redirect()->back()->withInput($request->only('email', 'remember'));
    	
    }
}
