<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ResultTest;

class UsersController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $hasTakenQuiz = ResultTest::where('google_id', $user->google_id)->exists();
        $result = ResultTest::where('google_id', $user->google_id)->first();
        $dateExpired = $result ? $result->date_expired : null;

        return view('pages.dashboard', compact('hasTakenQuiz', 'dateExpired'));
    }

    public function user()
    {
        return view('pages.dashboard');
    }

    public function history()
    {
        $results = ResultTest::where('google_id', Auth::user()->google_id)
            ->orderBy('date', 'desc')
            ->get();
        
        return view('pages.riwayat', ['results' => $results]);
    }

}
