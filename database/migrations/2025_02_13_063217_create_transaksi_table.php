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
        Schema::create('tb_transaksi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_outlet');
            $table->string('kode_invoice', 100);
            $table->unsignedBigInteger('id_member');
            $table->dateTime('tgl');
            $table->dateTime('batas_waktu');
            $table->dateTime('tgl_bayar');
            $table->integer('biaya_tambahan');
            $table->double('diskon');
            $table->integer('pajak');
            $table->enum('status', ['baru', 'proses', 'selesai', 'diambil']);
            $table->enum('dibayar', ['dibayar', 'belum_dibayar']);
            $table->unsignedBigInteger('id_user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
