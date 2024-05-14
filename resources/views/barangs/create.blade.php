{{-- resources/views/barangs/create.blade.php --}}
@extends('layouts.app')

@section('title', 'Tambah Barang Baru')

@section('content')
<h1>Tambah Barang Baru</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('barangs.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nama_barang">Nama Barang:</label>
        <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
    </div>
    <div class="form-group">
        <label for="merek">Merek:</label>
        <input type="text" class="form-control" id="merek" name="merek" required>
    </div>
    <div class="form-group">
        <label for="harga">Harga:</label>
        <input type="number" class="form-control" id="harga" name="harga" required>
    </div>
    <div class="form-group">
        <label for="stok">Stok:</label>
        <input type="number" class="form-control" id="stok" name="stok" required>
    </div>
    <div class="form-group">
        <label for="satuan">Satuan:</label>
        <input type="text" class="form-control" id="satuan" name="satuan" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
