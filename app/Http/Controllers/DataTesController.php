<?php

namespace App\Http\Controllers;

use App\Models\DataTes;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class DataTesController extends Controller
{
    //Tampilan Data
    public function datates() {
        $data_tes = DataTes::latest()->paginate(5);
        return view('layouts.datates', compact('data_tes'));
    }

    //Tampilan Tambah Data
    public function tambah(){
        return view('layouts.crud-tambah-datates');
    }

    //Method Simpan Data
    public function simpan(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'judul'     => 'required|min:5',
            'deskripsi'   => 'required|min:10',
            'Jumlah_Tes'  => 'required|min:1'   
        ]);

        DataTes::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'Jumlah_Tes' => $request->Jumlah_Tes,
        ]);

        return redirect()->route('datates')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
