<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisKepribadian;

class JenisKepribadianController extends Controller
{
    public function index()
    {
        $jenisKepribadian = JenisKepribadian::all();
        return view('layouts.data_kepribadian', compact('jenisKepribadian'));
    }

    public function show($jenisKepribadian)
    {
    $jenisKepribadian = JenisKepribadian::find($jenisKepribadian);
    return view('layouts.data_kepribadian_show', compact('jenisKepribadian'));
    }


    public function create()
    {
        return view('layouts.data_kepribadian_tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'personality' => 'required',
            'deskripsi' => 'required'
        ]);

        JenisKepribadian::create($request->all());

        return redirect()->route('datakepribadian')
            ->with('success', 'Data jenis kepribadian berhasil ditambahkan.');
    }

    public function edit(JenisKepribadian $jenisKepribadian)
    {
        return view('layouts.data_kepribadian_edit', compact('jenisKepribadian'));
    }

    public function update(Request $request, JenisKepribadian $jenisKepribadian)
{
    $request->validate([
        'personality' => 'required',
        'deskripsi' => 'required'
    ]);

    $jenisKepribadian->fill($request->all());
    $jenisKepribadian->save();

    return redirect()->route('datakepribadian')
        ->with('success', 'Data jenis kepribadian berhasil diperbarui.');
}


    public function destroy(JenisKepribadian $jenisKepribadian)
{
    $jenisKepribadian->delete();


    return redirect()->route('datakepribadian')
        ->with('success', 'Data jenis kepribadian berhasil dihapus.');
}

}
