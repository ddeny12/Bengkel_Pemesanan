{{-- resources/views/suppliers/index.blade.php --}}
@extends('layouts.app')

@section('title', 'Daftar Supplier')

@section('content')
<h1>Daftar Supplier</h1>
<a href="{{ route('suppliers.create') }}" class="btn btn-primary">Tambah Supplier Baru</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Supplier</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($suppliers as $supplier)
        <tr>
            <td>{{ $supplier->id_supplier }}</td>
            <td>{{ $supplier->nama_supplier }}</td>
            <td>{{ $supplier->alamat }}</td>
            <td>{{ $supplier->no_hp }}</td>
            <td>
                <a href="{{ route('suppliers.edit', $supplier->id_supplier) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('suppliers.destroy', $supplier->id_supplier) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
