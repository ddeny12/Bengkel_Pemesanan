<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    // Menampilkan daftar barang
    public function index()
    {
        $barangs = Barang::all();
        return view('barangs.index', compact('barangs'));
    }

    // Menampilkan form untuk membuat barang baru
    public function create()
    {
        return view('barangs.create');
    }

    // Menyimpan barang baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|max:150',
            'merek' => 'required|max:100',
            'harga' => 'required|integer',
            'stok' => 'required|integer',
            'satuan' => 'required|max:10',
        ]);

        Barang::create($request->all());
        return redirect()->route('barangs.index')->with('success', 'Barang berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit barang
    public function edit(Barang $barang)
    {
        return view('barangs.edit', compact('barang'));
    }

    // Memperbarui data barang di database
    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'nama_barang' => 'required|max:150',
            'merek' => 'required|max:100',
            'harga' => 'required|integer',
            'stok' => 'required|integer',
            'satuan' => 'required|max:10',
        ]);

        $barang->update($request->all());
        return redirect()->route('barangs.index')->with('success', 'Barang berhasil diperbarui.');
    }

    // Menghapus barang dari database
    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect()->route('barangs.index')->with('success', 'Barang berhasil dihapus.');
    }
}
