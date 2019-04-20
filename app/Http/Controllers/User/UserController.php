<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Transaction;
use Auth;
use Image;
use DB;

class UserController extends Controller
{
    public function editProfile(Request $request)
    {
    	$name = $request->name;
        $phone = $request->phone;
        $email = $request->email;
        $nik = $request->nik;
        $virtual_account = $request->virtual_account;
        $address = $request->address;

        $save = Auth::User();
        $save->name = $name;
        $save->phone = $phone;
        $save->email = $email;
        $save->nik = $nik;
        $save->virtual_account = $virtual_account;
        $save->address = $address;
        $save->save();

        return redirect()->back()->with("success", "Ganti Profil Sukses");

    }	
    public function editfotoProfile(Request $request)
    {
        if($request->hasFile('photo')){
            $photo =$request->file('photo');
            $filename = time() . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->resize(400, 400)->save( public_path('/img/profile/' .$filename));

            $save = Auth::user();
            $save->photo = $filename;
            $save->save();

            return view('user/profile',array('user'=>Auth::user()) );
        }
    }
    public function showgantisandi(){
        return view('user.ganti-pass');
    }
    public function editkatasandi(Request $request){

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
// The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
//Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }
        if(!(strcmp($request->get('new-password'), $request->get('password_confirmation'))) == 0){
            //New password and confirm password are not same
            return redirect()->back()->with("error","New Password should be same as your confirmed password. Please retype new password.");
        }
//Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Password changed successfully !");


    }

    public function daftarjadiagen(){
        return view('user.daftar-agen');
    }

    public function historykeuangan(Request $request,$id){

        $history =  DB::table('transaction')->where('user_id', '=', $request->id)->get();
        
        return view('user.history.history', ['history' => $history]); 
        // return json_encode($history);    
    }
}
