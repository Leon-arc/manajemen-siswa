<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('siswas', function (Blueprint $table) {
        $table->id(); // Primary Key (Auto Increment)
        $table->string('nama', 255); // Nama siswa (max 255 karakter)
        $table->string('nis', 20)->unique(); // NIS (unik, max 20 karakter)
        $table->string('kelas', 50); // Kelas (max 50 karakter)
        $table->text('alamat'); // Alamat (text)
        $table->timestamps(); // created_at & updated_at
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
