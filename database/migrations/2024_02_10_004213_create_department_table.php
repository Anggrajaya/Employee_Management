<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('department', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('NID')->unique();
            $table->string('nama_departement');
            $table->string('lokasi_departement');
            $table->string('manager_departement');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('department');
    }
};
