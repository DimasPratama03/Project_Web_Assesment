<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

//Controller untuk menampilkan data user pada halaman admin

class DataUserController extends Controller
{
    //Tampilan Data dengan tambahan pagination dan searching data
    public function datauser(Request $request) {

        $search = $request->query('search');

        if (!empty($search)) {
            $users = User::where('users.name', 'like', '%' . $search . '%')
            ->orWhere('users.email','like', '%' . $search . '%')
            ->orWhere('users.role','like', '%' . $search . '%')
            ->paginate(5)->fragment('users');
        }else{
            $users = User::latest()->paginate(5)->fragment('users');
        }

        return view('layouts.datauser')->with([
            'users' => $users,
            'search' => $search
        ]);

    }
}
