<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('keunggulan', function (Blueprint $table) {
            $table->id();
            $table->string('ikon_foto')->nullable(); 
            $table->string('judul'); // Misal: "Armada Terawat"
            $table->text('deskripsi'); 
            $table->boolean('status_aktif')->default(true);
            $table->integer('urutan_tampil')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('keunggulan');
    }
};