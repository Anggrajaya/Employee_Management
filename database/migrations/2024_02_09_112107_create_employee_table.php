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
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('NIP')->unique();
            $table->binary('image_pegawai');
            $table->string('nama_pegawai');
            $table->string('alamat_employee');
            $table->string('no_telp_employee');
            $table->integer('gaji_employee');
            $table->string('NID');
            $table->string('jabatan_employee');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};
