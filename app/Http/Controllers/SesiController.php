<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;

class SesiController extends Controller
{
    function index()
    {
        return view('login');
    }
    function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ],[
            'email.required'=>'Email Wajib Di isi',
            'password.required'=>'Password Wajib Di isi',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){
            if (Auth::user()->role == 'user') {
                return redirect('dashboard');
            }elseif (Auth::user()->role == 'admin') {
                return redirect('admin/admin');
            }
        }else{
            return redirect('')->withErrors('Username dan password yang dimasukkan salah')->withInput();
        }
    }

    function logout(){
        Auth::logout();
        return redirect('');
    }
}
