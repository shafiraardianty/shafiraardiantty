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
        Schema::create('logins', function (Blueprint $table) {
            $table->id(); // ID utama tabel
            $table->string('username')->unique(); // Username unik
            $table->string('email')->unique(); // Email unik
            $table->string('password'); // Password terenkripsi
            $table->boolean('is_active')->default(true); // Status aktif/tidak
            $table->timestamp('last_login')->nullable(); // Waktu login terakhir
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logins');
    }
};