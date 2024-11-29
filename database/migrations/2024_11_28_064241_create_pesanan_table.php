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
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->id(); // Kolom ID sebagai primary key
            $table->string('nama_pelanggan'); // Kolom untuk nama pelanggan
            $table->string('alamat'); // Kolom untuk alamat
            $table->string('telepon'); // Kolom untuk telepon
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelanggans');
    }
};