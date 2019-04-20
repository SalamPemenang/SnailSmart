<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('home', ['user' => $user]);
    }

    public function profile()
    {
        return view('user/profile',array('user'=>Auth::user()) );
    }

    public function dashboard()
    {
        return view('user.dashboard');
    }
}
