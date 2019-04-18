<?php

namespace App\Http\Controllers\Agen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Agen;
use App\User;
use App\Transaction;

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

    public function searchUser()
    {
    	$user = User::all();
    	return view('agen.search', ['user' => $user]);
    }

    public function getUser($id)
    {
    	$user = User::find($id);
    	return view('agen.transfer-user.transfer', ['user' => $user]);
    }
    
    public function transferSaldo(Request $request)
    {
    	
    	$id = $request->get('id');
			if($id){
				$user = User::find($id);	
			}
    	
    	$transaction = new Transaction;

    	$transaction->debit = $request->saldo;
    	$transaction->save();

    	$user->saldo = $request->saldo;
    	$user->save();

    	return redirect()->route('agen.dashboard');
    }
}
