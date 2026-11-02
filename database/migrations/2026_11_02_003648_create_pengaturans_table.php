<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pengaturan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_situs')->default('Fajar Transport Jogja');
            $table->string('logo')->nullable();
            $table->string('nomor_wa')->nullable();
            $table->text('alamat')->nullable();
            $table->string('email')->nullable();
            $table->string('tautan_instagram')->nullable();
            $table->string('tautan_facebook')->nullable();
            $table->text('teks_footer_seo')->nullable();
            $table->longText('tentang_kami')->nullable(); 
            $table->longText('syarat_ketentuan_sewa')->nullable(); 
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pengaturan');
    }
};