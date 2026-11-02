<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mobil', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mobil'); // misal: Avanza, Innova
            $table->string('tautan_url')->unique(); // URL cantik (slug), misal: sewa-avanza
            $table->string('foto')->nullable();
            $table->text('deskripsi')->nullable();
            $table->integer('harga_sewa')->nullable();
            $table->boolean('status_aktif')->default(true); // Aktif atau Nonaktif
            $table->boolean('status_unggulan')->default(false); // Ditampilkan di halaman depan?
            $table->integer('urutan_tampil')->default(0); 
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mobil');
    }
};