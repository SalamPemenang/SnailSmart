<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\User;
use App\Transaction;
use App\Category;
use App\Donate;
use App\Government;

class DonasiController extends Controller
{
    public function category(Request $request)
    {
    	// $government = Government::all();
    	// $lembaga = DB::table('government')->where('type_id', 2)->get();
    	$category = Category::all();
    	return view('user.donasi.category', compact('category'));	
    }

    public function government(Request $request)
    {
        $government = Government::all();
        $id = $request->get('category_id');
        $category = null;
        if($id){
            $category = Category::find($id);
            $government = Government::with('category')->where('donate_id',$id)->paginate(8);
        }else{
            $category = 'semua';
            $government = Government::paginate(8);
        }
    	return view('user.donasi.government', ['category' => $category, 'government' => $government, 'id' => $id]);
    }

    public function formDonate($id)
    {
        $category = Category::find($id);
    	$government = Government::find($id);
    	return view('user.donasi.formDonate', ['category' => $category,'government' => $government]);
    }

    public function donasi(Request $request)
    {
        $id = $request->id;
        $saldouser = $request->saldo;
        $donate = $request->donate;

        if($id){
            $user = User::find($id);
        }
        $transaction = new transaction;

        $total = $saldouser - $donate;
        $user->saldo = $total;
        $user->save();

        $transaction->user_id = $id;
        $transaction->kredit = $donate;
        $transaction->save();

        return redirect()->route('donasi.category');
    }

}
