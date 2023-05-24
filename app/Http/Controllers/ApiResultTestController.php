<?php

namespace App\Http\Controllers;

use App\Models\ResultTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ApiResultTestController extends Controller
{
    public function getAll()
    {
        $result_test = ResultTest::all();
        return response()->json([
            "data" => $result_test
        ], 201);
        // Response::json($result_test, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function getResultTest($google_id)
    {
        $result_test = ResultTest::where('google_id', '=', $google_id)->first();
        return ($result_test == null || $result_test == "") ?
            Response::json([
                "status" => "404",
                "message" => "empty",
                "data" => array(
                    "google_id" => "kosong",
                    "date" => "kosong"
                )
            ], 201) :
            Response::json([
                "status" => "200",
                "message" => "success",
                "data" => $result_test
            ], 201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function CreateResultTest(Request $request)
    {
        ResultTest::create($request->all());

        return response()->json([
            'status' => 'ok',
            'message' => 'result_test Berhasil Terdaftar',
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function updateResultTest($google_id, Request $request)
    {
        ResultTest::find($google_id)->update($request->all());
        return response()->json([
            'status' => 'ok',
            'message' => 'Data result_test Berhasil Diubah!'
        ], 201);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function deleteResultTest($google_id)
    {
        ResultTest::destroy($google_id);

        return response()->json([
            'status' => 'ok',
            'message' => 'Data result_test Berhasil Dihapus!'
        ], 201);

    }
}