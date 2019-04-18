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
    	$user = User::paginate(10);
    	return view('agen.search', ['user' => $user]);
    }

    public function getUser(Request $request)
    {
    	$user = User::where('name', 'like', '%'.request('name').'%')->where('virtual_account', 'like', '%'.request('virtual_account').'%')->paginate(10);
        return view('agen.search', ['user' => $user]);	
    }

    public function formSaldo($id)
    {
        $agen = Agen::find($id);
        $user = User::find($id);
        return view('agen.transfer-user.transfer', ['user' => $user, 'agen' => $agen]);
    }

    public function formNabung($id)
    {
        $agen = Agen::find($id);
        $user = User::find($id);
        return view('agen.nabung.transfer', ['user' => $user, 'agen' => $agen]);
    }
    
    public function transferSaldo(Request $request)
    {
    	
    	$id = $request->get('id');
        $a = $request->get('agen_id');
        $b = $request->get('totalagen');
        $c = $request->get('saldo');
        $d = $request->get('saldouser');

		if($id){
			$user = User::find($id);	
		}
            $agen = Agen::find($id);
            $transaction = new Transaction;        
    	

        $transaction->user_id = $request->user_id;
    	$transaction->debit = $request->saldo;
    	$transaction->save();

        $totala = $b - $c;

        $totalb = $d + $c;

    	$user->saldo = $totalb;
    	$user->save();

        $agen->saldo = $totala;
        $agen->save();

    	return redirect()->route('agen.dashboard');
    }

    public function transferNabung(Request $request)
    {

        $id = $request->get('id');
        $a = $request->get('agen_id');
        $b = $request->get('totalagen');
        $c = $request->get('saldo');
        $d = $request->get('saldouser');

        if($id){
            $user = User::find($id);    
        }
            $agen = Agen::find($id);
            $transaction = new Transaction;        
        

        $transaction->user_id = $request->user_id;
        $transaction->debit = $request->saldo;
        $transaction->save();

        $totala = $b - $c;

        $totalb = $d + $c;

        $user->saldo = $totalb;
        $user->save();

        $agen->saldo = $totala;
        $agen->save();

        return redirect()->route('agen.dashboard');
    }
}
