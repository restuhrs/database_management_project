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
        Schema::create('big_data_admins', function (Blueprint $table) {
            $table->id();
            $table->string('cabang');
            $table->string('salesman');
            $table->string('sumber_data');
            $table->string('nama');
            $table->string('kota');
            $table->string('jenis_kendaraan');
            $table->enum('progress', ['DO', 'SPK', 'Pending', 'No. Tdk Aktif']);
            $table->string('alasan');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('alamat');
            $table->string('tgl_lahir');
            $table->string('gender');
            $table->string('tipe_pelanggan');
            $table->string('jenis_pelanggan');
            $table->string('tenor');
            $table->string('tgl_gatepass');
            $table->string('no_rangka');
            $table->string('no_telepon');
            $table->string('no_telepon_update');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('big_data_admins');
    }
};
