<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

//Controller Untuk login user menggunakan akun google

class GoogleController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function GoogleCallback(){
        try{
            $user = Socialite::driver('google')->user();
            $finduser = User::where('google_id',$user->getId())->first();
            if ($finduser) {
                Auth::login($finduser);
                return redirect()->intended('dashboard');
            }else{
                // dd($user->id);
                $newUser = User::create([
                    'google_id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'password' => bcrypt('')
                ]);

                Auth::login($newUser);
                return redirect()->intended('dashboard');
            }
        } catch(\Throwable $th) {
            //throw $th;
        }
    }
}
