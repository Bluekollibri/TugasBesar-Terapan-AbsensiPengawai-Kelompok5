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
        Schema::create('awals', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->nullable();
            $table->string('name')->nullable();
            $table->timestamps();

            $table->foreign('DataKaryawan')->references('id')->on('data_karyawans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('awals');
    }
};
