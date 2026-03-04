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
    Schema::create('t_penjualan_detail', function (Blueprint $table) {
        $table->id('detail_id'); // [cite: 180]
        $table->unsignedBigInteger('penjualan_id')->index(); // [cite: 180]
        $table->unsignedBigInteger('barang_id')->index(); // [cite: 188]
        $table->integer('harga'); // [cite: 193]
        $table->integer('jumlah'); // [cite: 199]
        $table->timestamps();

        $table->foreign('penjualan_id')->references('penjualan_id')->on('t_penjualan'); // [cite: 180]
        $table->foreign('barang_id')->references('barang_id')->on('m_barang'); // [cite: 188]
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_penjualan_detail');
    }
};
