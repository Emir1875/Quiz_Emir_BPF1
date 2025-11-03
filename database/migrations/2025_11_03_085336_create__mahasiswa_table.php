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
        Schema::create('DataMahasiswa', function (Blueprint $table) {
            $table->increments('NIM');
            $table->string('Nama_Mahasiswa', 100);
            $table->string('Jurusan',100);
            $table->string('email')->unique();
            $table->string('Alamat', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_mahasiswa');
    }
};
