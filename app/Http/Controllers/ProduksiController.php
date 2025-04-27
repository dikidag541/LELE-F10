<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bibit;

class ProduksiController extends Controller
{
    // Fungsi untuk menampilkan halaman produksi
    public function index()
    {
        $dataBibit = Bibit::all(); // Ambil semua data bibit dari database

        return view('produksi', compact('dataBibit')); // Kirim data ke view
    }

    // Fungsi untuk menghapus data bibit
    public function destroyBibit($id)
    {
        Bibit::destroy($id); // Hapus berdasarkan ID

        return redirect()->back()->with('success', 'Data bibit berhasil dihapus.');
    }
}
