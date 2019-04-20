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

    public function userAll()
    {
        $user = User::all();
        return view('agen.user-all', ['user' => $user]);   
    }

    public function getUser(Request $request)
    {
        $agen = Agen::all();
    	$user = User::where('virtual_account', 'like', '%'.request('virtual_account').'%')->paginate(10);
        return view('agen.user-all', ['user' => $user, 'agen' => $agen]);	
    }

    public function formSaldo($id)
    {
        $user = User::find($id);

        $agen = Agen::find($id);

        return view('agen.transfer-user.transfer', ['user' => $user, 'agen' => $agen]);
    }

    public function formNabung($id)
    {
        $user = User::find($id);
        $agen = Agen::find($id);
        return view('agen.nabung.transfer', ['user' => $user, 'agen' => $agen]);
    }
    
    public function transferSaldo(Request $request)
    {
    	
    	$id = $request->get('id');
        $a = $request->agen_id;
        $b = $request->totalagen;
        $c = $request->get('saldo');
        $d = $request->get('saldouser');
        $totalpoint = $request->totalpoint;
        $point = $request->get('point');

		if($id){
			$user = User::find($id);	
		}
            $agen = Agen::find($id);
            $transaction = new Transaction;        
    	

        $transaction->user_id = $request->user_id;
    	$transaction->debit = $request->saldo;
    	$transaction->save();

        // Agen
        $totala = $b - $c;

        // User
        $totalb = $d + $c;

        // Point
        $totalc = $totalpoint + $point;

    	$user->saldo = $totalb;
    	$user->save();

        

        $agen->point = $totalc;
        $agen->saldo = $totala;
        $agen->save();

    	return redirect()->route('agen.dashboard');
    }

    public function transferNabung(Request $request)
    {

        $id = $request->get('id');
        $a = $request->get('agen_id');
        $b = $request->get('saldoagen');
        $c = $request->get('save');
        $d = $request->get('saveuser');
        $totalpoint = $request->totalpoint;
        $point = $request->get('point');


        if($id){
            $user = User::find($id);    
        }
            $agen = Agen::find($id);
            $transaction = new Transaction;        
        

        $transaction->user_id = $request->user_id;
        $transaction->agen_id = $a;
        $transaction->debit = $request->save;
        $transaction->kredit_agen = $request->save;
        $transaction->save();

        // Agen
        $totala = $b - $c;

        // User
        $totalb = $d + $c;

        // Point
        $totalc = $totalpoint + $point;

        $agen->point = $totalc;
        $agen->saldo = $totala;
        $agen->save();

        $user->save = $totalb;
        $user->save();

        

        return redirect()->route('agen.dashboard');
    }
}
