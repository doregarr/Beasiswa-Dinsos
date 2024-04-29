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
            $table->string('scan_permohonan1')->nullable();
            $table->string('scan_permohonan2')->nullable();
            $table->string('scan_permohonan3')->nullable();
            $table->string('scan_permohonan4')->nullable();
            $table->string('scan_permohonan5')->nullable();
            $table->string('scan_permohonan6')->nullable();
            $table->string('scan_permohonan7')->nullable();
            $table->string('scan_permohonan8')->nullable();
            $table->string('scan_permohonan9')->nullable();
            $table->string('scan_permohonan10')->nullable();
            $table->string('scan_permohonan11')->nullable();
            $table->string('scan_permohonan12')->nullable();
            $table->string('scan_permohonan13')->nullable();
            $table->string('scan_permohonan14')->nullable();
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
