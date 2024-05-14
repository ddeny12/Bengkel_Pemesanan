{{-- resources/views/barangs/edit.blade.php --}}
@extends('layouts.app')

@section('content')
<h1>Edit Barang</h1>
<form action="{{ route('barangs.update', $barang->id_barang) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nama_barang">Nama Barang</label>
        <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $barang->nama_barang }}" required>
    </div>
    <div class="form-group">
        <label for="merek">Merek</label>
        <input type="text" class="form-control" id="merek" name="merek" value="{{ $barang->merek }}" required>
    </div>
    <div class="form-group">
        <label for="harga">Harga</label>
        <input type="number" class="form-control" id="harga" name="harga" value="{{ $barang->harga }}" required>
    </div>
    <div class="form-group">
        <label for="stok">Stok</label>
        <input type="number" class="form-control" id="stok" name="stok" value="{{ $barang->stok }}" required>
    </div>
    <div class="form-group">
        <label for="satuan">Satuan</label>
        <input type="text" class="form-control" id="satuan" name="satuan" value="{{ $barang->satuan }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Update Barang</button>
</form>
@endsection
