@extends ('template.app')
@section ('content')
<div class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Update Pegawai</h2>
        <form action="{{ route('pegawai.update', $pegawai->id_pegawai) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nama_pegawai" class="block text-sm font-medium text-gray-700">Nama Pegawai</label>
                <input type="text" name="nama_pegawai" id="nama_pegawai" value="{{ $pegawai->nama_pegawai }}" class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Nama pegawai" required>
            </div>
            <div class="mb-4">
                <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                <input type="text" name="alamat" id="alamat" value="{{ $pegawai->alamat }}" class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Alamat" required>
            </div>
            <div class="mb-4">
                <label for="jk" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                <select name="jk" id="jk" class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" required>
                    <option value="{{ $pegawai->jk }}">{{ $pegawai->jk == 'L' ? 'Laki-laki' : 'Perempuan' }}</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="jabatan" class="block text-sm font-medium text-gray-700">Jabatan</label>
                <select name="jabatan" id="jabatan" class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" required>
                    <option value="{{ $pegawai->jabatan }}">{{ ucfirst($pegawai->jabatan) }}</option>
                    <option value="teknisi">Teknisi</option>
                    <option value="admin">Admin</option>
                    <option value="spv">SPV</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                <select name="status" id="status" class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" required>
                    <option value="{{ $pegawai->status }}">{{ ucfirst($pegawai->status) }}</option>
                    <option value="aktif">Aktif</option>
                    <option value="tidak_aktif">Tidak Aktif</option>
                </select>
            </div>
            <div class="flex justify-end">
                <a href="{{ route('pegawai.index') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md shadow-sm text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 mr-2">
                    Batal
                </a>
                <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
