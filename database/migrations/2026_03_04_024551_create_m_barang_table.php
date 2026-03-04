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
    Schema::create('m_barang', function (Blueprint $table) {
        $table->id('barang_id'); // [cite: 174]
        $table->unsignedBigInteger('kategori_id')->index(); // [cite: 178]
        $table->string('barang_kode', 10)->unique(); // [cite: 184]
        $table->string('barang_nama', 100); // [cite: 191]
        $table->integer('harga_beli'); // [cite: 196]
        $table->integer('harga_jual'); // [cite: 202]
        $table->timestamps();

        $table->foreign('kategori_id')->references('kategori_id')->on('m_kategori'); // [cite: 178]
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_barang');
    }
};
