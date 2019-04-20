<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Bill;
use App\School;
use App\Payment;
use App\Transaction;

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
        $bill = Bill::find($id);
        $school = school::find($id);
        $payment = Payment::find($id);
        return view('user.pembayaran.jenisPembayaran.tahunan', compact('payment', 'school', 'bill'));
     }

     public function bulanan($id)
     {
        $school = school::find($id);
        $payment = Payment::find($id);
        return view('user.pembayaran.jenisPembayaran.bulanan', compact('payment', 'school', 'bill'));
     }

      public function dalang($id)
     {
        $bill = Bill::find($id);
        $school = school::find($id);
        $payment = Payment::find($id);
        return view('user.pembayaran.jenisPembayaran.daftarUlang', compact('payment', 'school', 'bill'));
     }

    
     public function praktik($id)
     {
        $bill = Bill::find($id);
        $school = school::find($id);
        $payment = Payment::find($id);
        return view('user.pembayaran.jenisPembayaran.praktik', compact('payment', 'school', 'bill'));
     }


     public function prakerin($id)
     {
        $bill = Bill::find($id);
        $school = school::find($id);
        $payment = Payment::find($id);
        return view('user.pembayaran.jenisPembayaran.prakerin', compact('payment', 'school', 'bill'));
     }

     public function ujianAkhir($id)
     {
        $school = school::find($id);
        $payment = Payment::find($id);
        return view('user.pembayaran.jenisPembayaran.ujianAkhir', compact('payment', 'school', 'bill'));
     }

      public function ujianNasional($id)
     {
        $bill = Bill::find($id);
        $school = school::find($id);
        $payment = Payment::find($id);
        return view('user.pembayaran.jenisPembayaran.ujianNasional', compact('payment', 'school', 'bill'));
     }

     public function Ppayment(Request $request)
     {

        $idB = $request->idBill;
        $idU = $request->idUser;
        $idS = $request->idSchool;
        $saldoUser = $request->saldoUser;
        $saldoSchool = $request->saldoSchool;

        $nominal = $request->nominal;
        $type = $request->type;
        $ket = $request->ket;


        if ($idU) {
           $user = User::find($idU);
        }

        $bill = Bill::find($idB);
        $school = School::find($idS);
        $transaction = new Transaction;

        $totalU = $saldoUser - $nominal;
        $user->saldo = $totalU;
        $user->save();

        $totalS = $saldoSchool + $nominal;
        $school->saldo = $totalS;
        $school->save();

        $totalB = $type - $nominal;
        $bill->school_id = $idS;
        $bill->user_id = $idU;
        $bill->type_bill = $type;
        $bill->remaining = $totalB;
        $bill->save();

        $transaction->user_id = $idU;
        $transaction->kredit = $nominal;
        $transaction->ket = $ket;
        $transaction->save();

        return redirect()->back();
     }

}
