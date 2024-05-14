<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    // Menampilkan daftar supplier
    public function index()
    {
        $suppliers = Supplier::all();
        return view('suppliers.index', compact('suppliers'));
    }

    // Menampilkan form untuk membuat supplier baru
    public function create()
    {
        return view('suppliers.create');
    }

    // Menyimpan supplier baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama_supplier' => 'required|max:150',
            'alamat' => 'required',
            'no_hp' => 'required|max:15',
        ]);

        Supplier::create($request->all());
        return redirect()->route('suppliers.index')->with('success', 'Supplier berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit supplier
    public function edit(Supplier $supplier)
    {
        return view('suppliers.edit', compact('supplier'));
    }

    // Memperbarui data supplier di database
    public function update(Request $request, Supplier $supplier)
    {
        $request->validate([
            'nama_supplier' => 'required|max:150',
            'alamat' => 'required',
            'no_hp' => 'required|max:15'
        ]);

        $supplier->update($request->all());
        return redirect()->route('suppliers.index')->with('success', 'Supplier berhasil diperbarui.');
    }

    // Menghapus supplier dari database
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        return redirect()->route('suppliers.index')->with('success', 'Supplier berhasil dihapus.');
    }
}
