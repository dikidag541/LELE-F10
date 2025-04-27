<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bibit;

class BibitController extends Controller
{
    public function index()
    {
        $bibits = Bibit::all(); // Ambil semua data dari tabel bibits
        return view('inputs.bibit', compact('bibits'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'kuantitas' => 'required|integer',
            'type' => 'required|string',
        ]);

        Bibit::create([
            'tanggal' => $request->tanggal,
            'kuantitas' => $request->kuantitas,
            'type' => $request->type,
        ]);

        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }
}
