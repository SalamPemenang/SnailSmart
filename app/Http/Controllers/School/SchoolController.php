<?php

namespace App\Http\Controllers\School;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\School;

class SchoolController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth:school');
    }

    public function index()
    {
    	return view('school.home');
    }
}
