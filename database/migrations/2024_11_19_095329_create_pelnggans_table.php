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
            $table->integer('id_pelanggan');
            $table->string('nama_pelanggan');
            $table->enum('jenis_kelamin', ['l', 'p']);
            $table->string('no_hp');
            $table->string('alamat');
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
   