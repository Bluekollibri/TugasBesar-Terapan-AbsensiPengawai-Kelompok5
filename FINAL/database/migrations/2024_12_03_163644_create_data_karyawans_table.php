<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_karyawans', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('name')->nullable();
            $table->string('alamat')->nullable();
            $table->string('jabatan')->nullable(); // Relasi ke tabel jabatans
            $table->string('departemen')->nullable(); // Relasi ke tabel items
            $table->timestamps();

            $table->foreign('jabatan')->references('id')->on('jabatans')->onDelete('cascade');
            $table->foreign('departemen')->references('id')->on('items')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_karyawans');
    }
};
