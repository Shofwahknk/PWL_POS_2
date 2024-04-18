<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kategori_id' => 1, 'kategori_kode' => '01E', 'kategori_nama' => 'Handphone'],
            ['kategori_id' => 2, 'kategori_kode' => '02E', 'kategori_nama' => 'Tab'],
            ['kategori_id' => 3, 'kategori_kode' => '03E', 'kategori_nama' => 'Laptop'],
            ['kategori_id' => 4, 'kategori_kode' => '04E', 'kategori_nama' => 'Komputer'],
            ['kategori_id' => 5, 'kategori_kode' => '05E', 'kategori_nama' => 'Earphone'],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
