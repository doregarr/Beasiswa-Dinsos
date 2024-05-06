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
        Schema::create('data_keluargas', function (Blueprint $table) {
            $table->string('id');
            $table->string('nik')->nullable();
            $table->string('nama')->nullable();
            $table->string('statusOrangTua')->nullable();;
            $table->string('statusPernikahan')->nullable();;
            $table->string('namaAyah')->nullable();;
            $table->string('pekerjaanAyah')->nullable();;
            $table->string('namaIbu')->nullable();;
            $table->string('pekerjaanIbu')->nullable();;
            $table->string('alamat')->nullable();;
            $table->string('noHP')->nullable();;
            $table->string('namaWali')->nullable();;
            $table->string('pekerjaanWali')->nullable();;
            $table->string('noHPWali')->nullable();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_keluargas');
    }
};
