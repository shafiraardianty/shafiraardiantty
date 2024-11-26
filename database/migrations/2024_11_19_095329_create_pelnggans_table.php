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
        Schema::create('pelnggans', function (Blueprint $table) {
            $table->id();
            $table->interger('id_pelanggan');
            $table->setring('nama_pelanggan');
            $table->enum('jenis_kelamin');
            $table->setring('no_hp');
            $table->setring('alamat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelnggans');
    }
};
