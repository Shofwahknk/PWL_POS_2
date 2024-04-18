<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'EF1', 'barang_nama' => 'Iphone 13', 'harga_beli' => 15000000, 'harga_jual' => 15500000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'EF2', 'barang_nama' => 'Iphone 14', 'harga_beli' => 16000000, 'harga_jual' => 16500000],
            ['barang_id' => 3, 'kategori_id' => 2, 'barang_kode' => 'EF3', 'barang_nama' => 'Ipad Pro', 'harga_beli' => 17000000, 'harga_jual' => 17500000],
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'EF4', 'barang_nama' => 'Ipad Air', 'harga_beli' => 18000000, 'harga_jual' => 18500000],
            ['barang_id' => 5, 'kategori_id' => 3, 'barang_kode' => 'EF5', 'barang_nama' => 'Macbook pro', 'harga_beli' => 23000000, 'harga_jual' => 23500000],
            ['barang_id' => 6, 'kategori_id' => 3, 'barang_kode' => 'EF6', 'barang_nama' => 'Macbook Air', 'harga_beli' => 20000000, 'harga_jual' => 20500000],
            ['barang_id' => 7, 'kategori_id' => 4, 'barang_kode' => 'EF7', 'barang_nama' => 'iMac Blue', 'harga_beli' => 24000000, 'harga_jual' => 24500000],
            ['barang_id' => 8, 'kategori_id' => 4, 'barang_kode' => 'EF8', 'barang_nama' => 'iMac Red', 'harga_beli' => 24000000, 'harga_jual' => 2450000],
            ['barang_id' => 9, 'kategori_id' => 5, 'barang_kode' => 'EF9', 'barang_nama' => 'Air Pods Max', 'harga_beli' => 20000000, 'harga_jual' => 20500000],
            ['barang_id' => 10, 'kategori_id' => 5, 'barang_kode' => 'EF10', 'barang_nama' => 'Air Pods Pro', 'harga_beli' => 20000000, 'harga_jual' => 20500000]
        ];
        DB::table('m_barang')->insert($data);
    }
}
