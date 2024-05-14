{{-- resources/views/suppliers/edit.blade.php --}}
@extends('layouts.app')

@section('title', 'Edit Supplier')

@section('content')
<h1>Edit Supplier</h1>
<form action="{{ route('suppliers.update', $supplier->id_supplier) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nama_supplier">Nama Supplier</label>
        <input type="text" class="form-control" id="nama_supplier" name="nama_supplier" value="{{ $supplier->nama_supplier }}" required>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" id="alamat" name="alamat" required>{{ $supplier->alamat }}</textarea>
    </div>
    <div class="form-group">
        <label for="no_hp">No HP</label>
        <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $supplier->no_hp }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
