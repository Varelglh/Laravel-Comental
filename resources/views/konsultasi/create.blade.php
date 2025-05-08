@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto mt-10">
    <h1 class="text-xl font-semibold mb-4">➕ Tambah Musik</h1>

    <form action="{{ route('musik.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        <div>
            <label for="judul" class="block">Judul</label>
            <input type="text" name="judul" class="w-full border px-3 py-2 rounded" required>
        </div>

        <div>
            <label for="artis" class="block">Artis</label>
            <input type="text" name="artis" class="w-full border px-3 py-2 rounded" required>
        </div>

        <div>
            <label for="genre" class="block">Genre</label>
            <input type="text" name="genre" class="w-full border px-3 py-2 rounded">
        </div>

        <div>
            <label for="file" class="block">File Musik</label>
            <input type="file" name="file" class="w-full border px-3 py-2 rounded" required>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
    </form>
</div>
@endsection
