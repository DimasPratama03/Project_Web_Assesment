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
        
        $result = new ResultTest();
        $result->google_id = $user->google_id;
        $result->value_introvert = $request->introvertScore;
        $result->value_extrovert = $request->ekstrovertScore;
        $result->personality = $request->personality;
        $result->date = Carbon::now();
        $result->date_expired = Carbon::now()->addDays(1);
        $result->save();

        return response()->json(['message' => 'Result saved successfully'], 200);
    }
}
