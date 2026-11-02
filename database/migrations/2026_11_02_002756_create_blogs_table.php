<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('artikel_blog', function (Blueprint $table) {
            $table->id();
            $table->string('judul_artikel');
            $table->string('tautan_url')->unique();
            $table->string('foto')->nullable();
            $table->longText('isi_artikel')->nullable(); 
            $table->integer('jumlah_dilihat')->default(0); 
            $table->boolean('status_aktif')->default(true);
            $table->string('meta_judul_seo')->nullable(); 
            $table->text('meta_deskripsi_seo')->nullable(); 
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('artikel_blog');
    }
};