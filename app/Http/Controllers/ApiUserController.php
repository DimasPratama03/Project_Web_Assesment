<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ApiUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getAll()
    {
        $user = User::all();
        return response()->json([
            "data" => $user
        ]);
        // Response::json($user, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function getUser($id)
    {
        $user = User::find($id);
        return Response::json($user, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function CreateUser(Request $request)
    {
        User::create($request->all());

        return response()->json([
            'status' => 'ok',
            'message' => 'User Berhasil Terdaftar',
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        User::find($id)->update($request->all());
        return response()->json([
            'status' => "ok",
            'message' => "data berhasil di update"
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}