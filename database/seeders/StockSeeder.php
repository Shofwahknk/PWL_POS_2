<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create stock for 10 item for stok table which have columns stok_id, barang_id, user_id, stok_tanggal, stok_jumlah
        $data = [
            ['stock_id' => 1, 'barang_id' => 1, 'user_id' => 1, 'stock_tanggal' => '2024-02-01', 'stock_jumlah' => 70],
            ['stock_id' => 2, 'barang_id' => 2, 'user_id' => 1, 'stock_tanggal' => '2024-02-01', 'stock_jumlah' => 70],
            ['stock_id' => 3, 'barang_id' => 3, 'user_id' => 1, 'stock_tanggal' => '2024-02-01', 'stock_jumlah' => 70],
            ['stock_id' => 4, 'barang_id' => 4, 'user_id' => 1, 'stock_tanggal' => '2024-02-01', 'stock_jumlah' => 70],
            ['stock_id' => 5, 'barang_id' => 5, 'user_id' => 1, 'stock_tanggal' => '2024-02-01', 'stock_jumlah' => 70],
            ['stock_id' => 6, 'barang_id' => 6, 'user_id' => 1, 'stock_tanggal' => '2024-02-01', 'stock_jumlah' => 70],
            ['stock_id' => 7, 'barang_id' => 7, 'user_id' => 1, 'stock_tanggal' => '2024-02-01', 'stock_jumlah' => 70],
            ['stock_id' => 8, 'barang_id' => 8, 'user_id' => 1, 'stock_tanggal' => '2024-02-01', 'stock_jumlah' => 70],
            ['stock_id' => 9, 'barang_id' => 9, 'user_id' => 1, 'stock_tanggal' => '2024-02-01', 'stock_jumlah' => 70],
            ['stock_id' => 10, 'barang_id' => 10, 'user_id' => 1, 'stock_tanggal' => '2024-02-01', 'stock_jumlah' => 70],
        ];

        DB::table('t_stock')->insert($data);
    }
}
