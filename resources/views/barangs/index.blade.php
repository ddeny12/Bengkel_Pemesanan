{{-- resources/views/barangs/index.blade.php --}}
@extends('layouts.app')

@section('title', 'Daftar Barang')


@section('content')
<h1>Daftar Barang</h1>
<a href="{{ route('barangs.create') }}" class="btn btn-primary">Tambah Barang</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Merek</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Satuan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($barangs as $barang)
        <tr>
            <td>{{ $barang->id_barang }}</td>
            <td>{{ $barang->nama_barang }}</td>
            <td>{{ $barang->merek }}</td>
            <td>{{ $barang->harga }}</td>
            <td>{{ $barang->stok }}</td>
            <td>{{ $barang->satuan }}</td>
            <td>
                <a href="{{ route('barangs.edit', $barang->id_barang) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('barangs.destroy', $barang->id_barang) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus item ini?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
