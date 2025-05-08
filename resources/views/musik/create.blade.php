@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto mt-10">
    <h1 class="text-xl font-semibold mb-4">➕ Tambah Musik</h1>

    <form action="{{ route('musik.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        <!-- Input Judul Musik -->
        <div>
            <label for="judul" class="block text-sm font-medium text-gray-700">Judul</label>
            <input type="text" name="judul" class="w-full border px-3 py-2 rounded" required placeholder="Masukkan judul musik">
        </div>

        <!-- Input Artis Musik -->
        <div>
            <label for="artis" class="block text-sm font-medium text-gray-700">Artis</label>
            <input type="text" name="artis" class="w-full border px-3 py-2 rounded" required placeholder="Masukkan nama artis">
        </div>

        <!-- Input Genre Musik -->
        <div>
            <label for="genre" class="block text-sm font-medium text-gray-700">Genre</label>
            <input type="text" name="genre" class="w-full border px-3 py-2 rounded" placeholder="Masukkan genre musik">
        </div>

        <!-- Input File Musik -->
        <div>
            <label for="file" class="block text-sm font-medium text-gray-700">File Musik</label>
            <input type="file" name="file" accept="audio/*" class="w-full border px-3 py-2 rounded" required>
            <small class="text-gray-500">Format yang diterima: mp3, wav, ogg (maksimal 10MB)</small>
        </div>

        <!-- Tombol Submit -->
        <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition-colors">Simpan</button>
    </form>
</div>
@endsection
