<?php

namespace App\Http\Controllers\Government;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\School;

class GovernmentController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth:government');
    }

    public function index()
    {
    	return view('government.home');
    }
}
