<?php

namespace App\Http\Controllers;

use App\Models\ResultTest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

//Controller untuk menampilkan data user pada halaman admin

class DataResultController extends Controller
{
    public function dataresult(Request $request)
    {
        $search = $request->query('search');

        if (!empty($search)) {
            $result = ResultTest::where('result_tes.google_id', 'like', '%' . $search . '%')
                ->orWhere('result_tes.personality', 'like', '%' . $search . '%')
                ->paginate(5)->fragment('users');
        } else {
            $result = ResultTest::latest()->paginate(5)->fragment('result_tes');
        }

        return view('layouts.laporantes')->with([
            'result' => $result, // Mengirimkan variabel $result ke tampilan blade
            'search' => $search
        ]);
    }
}


