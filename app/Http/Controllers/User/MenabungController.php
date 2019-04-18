<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Saldo;

class MenabungController extends Controller
{
    public function index($id)
    {
    	$saldo = Saldo::find($id);
    	return view('user.saldo.index',['saldo' => $saldo]);
    }

    public function edit($id,Request $request)
    {
    	$saldo = Saldo::find($id);
    	$saldo->debit = $request->debit;
    	$saldo->kredit = $request->kredit;

    	$nominal = $saldo->nominal - $saldo->kredit;
    	$saldo->nominal = $nominal;
    	$saldo->save();

    	$nominal2 = $saldo->debit + $saldo->nominal;
    	$saldo->nominal = $nominal2;
    	$saldo->save();

    	$saldo->nominal = $nominal;
    	$saldo->nominal = $nominal2;
    	$saldo->save();
    	return redirect()->route('home');

    }
}
