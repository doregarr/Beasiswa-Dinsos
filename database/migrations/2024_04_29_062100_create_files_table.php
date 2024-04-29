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
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('surat_permohonan')->nullable();
            $table->string('biodata_pribadi')->nullable();
            $table->string('pas_foto')->nullable();
            $table->string('kk')->nullable();
            $table->string('ktp')->nullable();
            $table->string('ktm')->nullable();
            $table->string('surat_aktif_kuliah')->nullable();
            $table->string('dtks')->nullable();
            $table->string('permohonan_dinsos')->nullable();
            $table->string('surat_beasiswa')->nullable();
            $table->string('surat_orangtua/wali')->nullable();
            $table->string('transkrip_nilai')->nullable();
            $table->string('tagihan_ukt')->nullable();
            $table->string('rekening_bank')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
