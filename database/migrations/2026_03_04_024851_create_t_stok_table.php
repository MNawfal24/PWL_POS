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
    Schema::create('t_stok', function (Blueprint $table) {
        $table->id('stok_id'); // [cite: 173]
        $table->unsignedBigInteger('supplier_id')->index(); // [cite: 177]
        $table->unsignedBigInteger('barang_id')->index(); // [cite: 186]
        $table->unsignedBigInteger('user_id')->index(); // [cite: 190]
        $table->dateTime('stok_tanggal'); // [cite: 198]
        $table->integer('stok_jumlah'); // [cite: 204]
        $table->timestamps();

        $table->foreign('supplier_id')->references('supplier_id')->on('m_supplier'); // [cite: 177]
        $table->foreign('barang_id')->references('barang_id')->on('m_barang'); // [cite: 186]
        $table->foreign('user_id')->references('user_id')->on('m_user'); // [cite: 190]
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_stok');
    }
};
