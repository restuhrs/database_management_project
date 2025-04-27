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
        Schema::create('invalid_data', function (Blueprint $table) {
            $table->id();
            $table->string('cabang');
            $table->string('nama_sales');
            $table->string('no_hp_1',15);
            $table->string('no_hp_2',15);
            $table->string('sumber_data');
            $table->string('model_mobil');
            $table->string('jenis_pelanggan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invalid_data');
    }
};
