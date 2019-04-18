<?php

namespace App\Http\Controllers\Agen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AgenLoginController extends Controller
{
    public function __construct()
    {
    	$this->middleware('guest:agen');
    }

    public function index()
    {
    	return view('agen.login');
    }

    public function login(Request $request)
    {
    	// Validate
    	$this->validate($request,[
    		'email' 	=> 'required|email',
    		'password'  => 'required|min:6'
    	]);

    	// Attempt
    	if(Auth::guard('agen')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
    		// Jika Berhasil
    		return redirect()->route('agen.dashboard');
    	}
    	// Jika Gagal
    	return redirect()->back()->withInput($request->only('email', 'remember'));
    	
    }
}
