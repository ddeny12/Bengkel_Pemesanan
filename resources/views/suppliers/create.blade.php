{{-- resources/views/suppliers/create.blade.php --}}
@extends('layouts.app')

@section('title', 'Tambah Supplier Baru')

@section('content')
<h1>Tambah Supplier Baru</h1>
<form action="{{ route('suppliers.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nama_supplier">Nama Supplier</label>
        <input type="text" class="form-control" id="nama_supplier" name="nama_supplier" required>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" id="alamat" name="alamat" required></textarea>
    </div>
    <div class="form-group">
        <label for="no_hp">No HP</label>
        <input type="text" class="form-control" id="no_hp" name="no_hp" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
