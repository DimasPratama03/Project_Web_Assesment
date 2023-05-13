<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class DataUserController extends Controller
{
    //Tampilan Data
    public function datauser() {
        $users = User::latest()->paginate(5);
        return view('layouts.datauser', compact('users'));
    }

    //Tampilan Tambah Data
    public function tambah(){
        return view('layouts.crud-tambah-datauser');
    }

    //Method Simpan Data
    public function simpan(Request $request):RedirectResponse
    {
        $this->validate($request, [
            'name'     => 'required|min:5',
            'email'   => 'required|min:5',
            'password'  => 'required|min:8',
            'role' => 'required|min:5',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role
        ]);

        return redirect()->route('datauser')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
