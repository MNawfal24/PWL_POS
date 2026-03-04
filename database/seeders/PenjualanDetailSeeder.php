<?php

namespace Database\Seeders;

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];
        $detail_id = 1;
        for ($i = 1; $i <= 10; $i++) { // loop 10 transaksi
            for ($j = 1; $j <= 3; $j++) { // loop 3 barang tiap transaksi
                $data[] = [
                    'detail_id' => $detail_id++,
                    'penjualan_id' => $i,
                    'barang_id' => rand(1, 15), // pilih barang acak 1-15
                    'harga' => 15000,
                    'jumlah' => rand(1, 5), // beli 1 sampai 5 qty
                ];
            }
        }
        DB::table('t_penjualan_detail')->insert($data);
    }
}