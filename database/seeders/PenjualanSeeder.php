<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create 10 sales transactions for penjualan table which have columns penjualan_id, user_id, pembeli, penjualan_kode, penjualan_tanggal
        $data = [
            ['penjualan_id' => 1, 'user_id' => 3, 'pembeli' => 'Shofwah', 'penjualan_kode' => 'P1', 'penjualan_tanggal' => '2024-02-02'],
            ['penjualan_id' => 2, 'user_id' => 3, 'pembeli' => 'Kanaka', 'penjualan_kode' => 'P2', 'penjualan_tanggal' => '2024-02-02'],
            ['penjualan_id'=> 3, 'user_id' => 3, 'pembeli' => 'Ebsa', 'penjualan_kode' => 'P3', 'penjualan_tanggal' => '2024-02-02'],
            ['penjualan_id' => 4, 'user_id' => 3, 'pembeli' => 'Anargya', 'penjualan_kode' => 'P4', 'penjualan_tanggal' => '2024-02-02'],
            ['penjualan_id' => 5, 'user_id' => 3, 'pembeli' => 'Arjuna', 'penjualan_kode' => 'P5', 'penjualan_tanggal' => '2024-02-02'],
            ['penjualan_id' => 6, 'user_id' => 3, 'pembeli' => 'Putra', 'penjualan_kode' => 'P6', 'penjualan_tanggal' => '2024-02-02'],
            ['penjualan_id' => 7, 'user_id' => 3, 'pembeli' => 'Fadhil', 'penjualan_kode' => 'P7', 'penjualan_tanggal' => '2024-02-02'],
            ['penjualan_id' => 8, 'user_id' => 3, 'pembeli' => 'Lokatara', 'penjualan_kode' => 'P8', 'penjualan_tanggal' => '2024-02-02'],
            ['penjualan_id' => 9, 'user_id' => 3, 'pembeli' => 'Fatin', 'penjualan_kode' => 'P9', 'penjualan_tanggal' => '2024-02-02'],
            ['penjualan_id' => 10, 'user_id' => 3, 'pembeli' => 'Diar', 'penjualan_kode' => 'P10', 'penjualan_tanggal' => '2024-02-02'],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}
