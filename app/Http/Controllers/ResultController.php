<?php

namespace App\Http\Controllers;

use App\Models\ResultTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResultController extends Controller
{
    public function simpanResult(Request $request)
    {
        $data = $request->validate([
            'value_introvert' => 'required',
            'value_extrovert' => 'required',
            'personality' => 'required',
            'date' => 'required',
            'date_expired' => 'required',
        ]);
    
        // Mendapatkan ID Google dari user yang sedang terotentikasi
        $googleId = Auth::user()->google_id;
    
        // Menambahkan ID Google ke dalam data hasil quiz
        $data['google_id'] = $googleId;
    
        // Menyimpan hasil quiz ke dalam tabel result_tes
        ResultTest::create($data);
    
        return response()->json(['message' => 'Hasil penilaian berhasil disimpan'], 200);
    }
}

