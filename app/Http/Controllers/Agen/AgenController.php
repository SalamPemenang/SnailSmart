<?php

namespace App\Http\Controllers\Agen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Agen;

class AgenController extends Controller
{

		public function __construct()
    {
    	$this->middleware('auth:agen');
    }

    public function index()
    {
    	return view('agen.home');
    }
}
