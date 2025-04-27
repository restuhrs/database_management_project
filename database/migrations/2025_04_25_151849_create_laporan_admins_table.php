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
        Schema::create('laporan_admins', function (Blueprint $table) {
            $table->id();
            $table->string('cabang');
            $table->string('nama_sales');
            $table->integer('total_follow_up');
            $table->integer('total_kontak_valid');
            $table->integer('total_kontak_tdk_valid');
            $table->integer('total_pending');
            $table->integer('total_process');
            $table->integer('total_closing');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_admins');
    }
};
