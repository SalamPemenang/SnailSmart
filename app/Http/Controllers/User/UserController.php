<?php

namespace App\Http\Controllers\USer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\user;
use Auth;
use Image;

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

            return redirect()->back();

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

}
