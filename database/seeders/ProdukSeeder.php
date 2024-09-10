<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produk::create([
            'nama' => 'Produk 1',
            'deskripsi' => 'Deskripsi Produk 1',
            'gambar' => 'https://via.placeholder.com/150'
        ]);
    }
}
