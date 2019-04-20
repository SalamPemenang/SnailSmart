<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Transaction;
use App\School;
use App\Payment;

class PembayaranController extends Controller
{
     public function school()
     {
     	 $school = School::all();
     	 return view('user.pembayaran.index', compact('school'));
     }


     public function payment(Request $request)
     {
     	$payment = payment::all();
        $id = $request->get('category_id');
        $school = null;
        if($id){
            $school = School::find($id);
            $payment = Payment::with('school')->where('school_id',$id)->paginate(8);
        }else{
            $school = 'semua';
            $payment = Payment::paginate(8);
        }
    	return view('user.pembayaran.payment', ['school' => $school, 'payment' => $payment, 'id' => $id]);
	 }


     public function tahunan($id)
     {
        $payment = Payment::find($id);
        return view('user.pembayaran.jenisPembayaran.tahunan', compact('payment'));
     }

     public function bulanan($id)
     {
        $payment = Payment::find($id);
        return view('user.pembayaran.jenisPembayaran.bulanan', compact('payment'));
     }

      public function dalang($id)
     {
        $payment = Payment::find($id);
        return view('user.pembayaran.jenisPembayaran.daftarUlang', compact('payment'));
     }

    
     public function praktik($id)
     {
        $payment = Payment::find($id);
        return view('user.pembayaran.jenisPembayaran.praktik', compact('payment'));
     }


     public function prakerin($id)
     {
        $payment = Payment::find($id);
        return view('user.pembayaran.jenisPembayaran.prakerin', compact('payment'));
     }

     public function ujianAkhir($id)
     {
        $payment = Payment::find($id);
        return view('user.pembayaran.jenisPembayaran.ujianAkhir', compact('payment'));
     }

      public function ujianNasional($id)
     {
        $payment = Payment::find($id);
        return view('user.pembayaran.jenisPembayaran.ujianNasional', compact('payment'));
     }

     public function Ppayment(Request $request)
     {
        $id = $request->id;
        $saldoUser = $request->saldo;
        $nominal = $request->nominal;

        if ($id) {
           $user = User::find($id);
        }

        $transaction = new Transaction;

        $total = $saldoUser - $nominal;
        $user->saldo = $total;
        $user->save();

        $transaction->user_id = $id;
        $transaction->kredit = $nominal;
        $transaction->save();

        return redirect()->route('school');
     }

}
