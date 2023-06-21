<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResultTest;
use Carbon\Carbon;

class ResultController extends Controller
{
    public function saveResult(Request $request)
{
    $user = $request->user();
    
    $existingResult = ResultTest::where('google_id', $user->google_id)->first();

    if ($existingResult) {
        // Hasil tes sebelumnya ada, lakukan pembaruan
        $existingResult->value_introvert = $request->introvertScore;
        $existingResult->value_extrovert = $request->ekstrovertScore;
        $existingResult->personality = $request->personality;
        $existingResult->date = Carbon::now();
        $existingResult->date_expired = Carbon::now()->addDays(1);
        $existingResult->save();
    } else {
        // Tidak ada hasil tes sebelumnya, buat entri baru
        $result = new ResultTest();
        $result->google_id = $user->google_id;
        $result->value_introvert = $request->introvertScore;
        $result->value_extrovert = $request->ekstrovertScore;
        $result->personality = $request->personality;
        $result->date = Carbon::now();
        $result->date_expired = Carbon::now()->addDays(1);
        $result->save();
    }

    return response()->json(['message' => 'Result saved successfully'], 200);
}

}
