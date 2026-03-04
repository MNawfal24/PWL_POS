<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];
        for ($i = 1; $i <= 15; $i++) {
            $data[] = [
                'stok_id' => $i,
                'supplier_id' => ceil($i / 5), // Barang 1-5 supplier 1, 6-10 supplier 2, dst.
                'barang_id' => $i,
                'user_id' => 1, // Admin yang input
                'stok_tanggal' => now(),
                'stok_jumlah' => 100,
            ];
        }
        DB::table('t_stok')->insert($data);
    }
}
