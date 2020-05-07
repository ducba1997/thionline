<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Redirect, Response, File;
use Socialite;
use App\User;
use Illuminate\Support\Facades\Hash;

class SocialController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    public function callback($provider)
    {
        $getInfo = Socialite::driver($provider)->user();
        $user = $this->createUser($getInfo, $provider);
        auth()->login($user);
        return redirect()->to('/home');
    }
    function createUser($getInfo, $provider)
    {
        $user = User::where('provider_id', $getInfo->id)->first();
        if (!$user) {
            $user = User::create([
                'name'     => $getInfo->name,
                'email'    => $getInfo->email,
                'password' => Hash::make('123456789'),
                'birthday' => date("Y-m-d",strtotime('20190503')),
                'avatar' => 'userprofile1.png',
                'id_gender' => '1',
                'id_permission' => '3',
                'active' => '1'
            ]);
        }
        return $user;
    }
}
