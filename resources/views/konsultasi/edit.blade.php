<!-- resources/views/konsultasi/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Konsultasi</h1>
    <form action="{{ route('konsultasi.update', $konsultasi->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group mb-3">
            <label for="nama_pasien">Nama Pasien</label>
            <input type="text" name="nama_pasien" class="form-control" value="{{ $konsultasi->nama_pasien }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="psikolog">Psikolog</label>
            <input type="text" name="psikolog" class="form-control" value="{{ $konsultasi->psikolog }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="tanggal">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" value="{{ $konsultasi->tanggal }}" required>
        </div>

        <div class="form-group mb-4">
            <label for="jam">Jam</label>
            <input type="time" name="jam" class="form-control" value="{{ $konsultasi->jam }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
