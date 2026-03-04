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
    Schema::create('t_penjualan', function (Blueprint $table) {
        $table->id('penjualan_id'); // [cite: 208]
        $table->unsignedBigInteger('user_id')->index(); // [cite: 211]
        $table->string('pembeli', 50); // [cite: 216]
        $table->string('penjualan_kode', 20)->unique(); // [cite: 219]
        $table->dateTime('penjualan_tanggal'); // [cite: 223]
        $table->timestamps();

        $table->foreign('user_id')->references('user_id')->on('m_user'); // [cite: 211]
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_penjualan');
    }
};
