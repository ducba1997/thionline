<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('frontend.profile.infoprofile');
    }

    public function showHistoryExam(){
        return view('frontend.profile.historytest');
    }

    public function updateInfoProfile(Request $request ){
        $input=[];
        if ($request->hasFile('avatar')) {
            $file = $request->avatar;
            $arrhash= explode(".",$file->hashName());
            $arrnohash=explode(".",$file->getClientOriginalName());
            $newname=$arrnohash[0].$arrhash[0].".".$arrnohash[1];
            $file->move(public_path()."/upload/avatar/",$newname);
            $input['avatar']=$newname;
        }
        $iduser=\Auth::id();
        $User=\App\User::find($iduser);
        $input['name']=$request->name;
        $input['address']=$request->address;
        $input['id_gender']=$request->id_gender;
        $input['birthday']=$request->birthday;
        $User->update($input);
        return redirect()->route('profile.infoprofile');
    }

    public function updatePasswordProfile(Request $request){
        $iduser=\Auth::id();
        $User=\App\User::find($iduser);
        $password=Hash::make($request->password);
        $User->update(['password'=>$password]);
        return redirect()->route('profile.infoprofile');
    }
}
