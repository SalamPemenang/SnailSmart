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
        $school = school::find($id);
        return view('user.pembayaran.jenisPembayaran.tahunan', compact('payment', 'school'));
     }

     public function bulanan($id)
     {
        $payment = Payment::find($id);
        $school = school::find($id);
        return view('user.pembayaran.jenisPembayaran.bulanan', compact('payment', 'school'));
     }

      public function dalang($id)
     {
        $payment = Payment::find($id);
        $school = school::find($id);
        return view('user.pembayaran.jenisPembayaran.daftarUlang', compact('payment', 'school'));
     }

    
     public function praktik($id)
     {
        $payment = Payment::find($id);
        $school = school::find($id);
        return view('user.pembayaran.jenisPembayaran.praktik', compact('payment', 'school'));
     }


     public function prakerin($id)
     {
        $payment = Payment::find($id);
        $school = school::find($id);
        return view('user.pembayaran.jenisPembayaran.prakerin', compact('payment', 'school'));
     }

     public function ujianAkhir($id)
     {
        $payment = Payment::find($id);
        $school = school::find($id);
        return view('user.pembayaran.jenisPembayaran.ujianAkhir', compact('payment', 'school'));
     }

      public function ujianNasional($id)
     {
        $payment = Payment::find($id);
        $school = school::find($id);
        return view('user.pembayaran.jenisPembayaran.ujianNasional', compact('payment', 'school'));
     }

     public function Ppayment(Request $request)
     {
        $idU = $request->idUser;
        $idS = $request->idSchool;
        $saldoUser = $request->saldoUser;
        $saldoSchool = $request->saldoSchool;
        $nominal = $request->nominal;

        if ($idU) {
           $user = User::find($idU);
        }

        $school = School::find($idS);
        $transaction = new Transaction;

        $totalU = $saldoUser - $nominal;
        $user->saldo = $totalU;
        $user->save();

        $totalS = $saldoSchool + $nominal;
        $school->saldo = $totalS;
        $school->save();

        $transaction->user_id = $idU;
        $transaction->kredit = $nominal;
        $transaction->save();

        return redirect()->route('school');
     }

}
