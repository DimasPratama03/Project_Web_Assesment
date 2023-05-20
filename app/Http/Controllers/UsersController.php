<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{

    function index(){
        return view('pages.dashboard');
    }

    function user(){
        return view('pages.dashboard');
    }
}
