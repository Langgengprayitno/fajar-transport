<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('paket_wisata', function (Blueprint $table) {
            $table->id();
            $table->string('nama_paket');
            $table->string('tautan_url')->unique(); 
            $table->string('foto')->nullable();
            $table->text('deskripsi')->nullable();
            $table->integer('harga_paket')->nullable();
            $table->boolean('status_aktif')->default(true);
            $table->boolean('status_unggulan')->default(false);
            $table->integer('urutan_tampil')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('paket_wisata');
    }
};