<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusikTable extends Migration
{
    public function up()
    {
        Schema::create('musik', function (Blueprint $table) {
            $table->id(); // Kolom ID (auto increment)
            $table->string('judul'); // Kolom untuk judul musik
            $table->string('artis'); // Kolom untuk artis musik
            $table->string('genre')->nullable(); // Kolom untuk genre musik (nullable)
            $table->text('file_path'); // Kolom untuk lokasi file musik (menggunakan text untuk path lebih panjang)
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('musik'); // Menghapus tabel musik saat rollback migrasi
    }
}
