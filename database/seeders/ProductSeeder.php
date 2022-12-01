<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nama' => 'Batik Gajah Ngguling',
            'stok' => '500',
            'harga' => '50000',
            'desc' => 'Batik Mewah'],
            ['nama' => 'Batik Minahasa',
            'stok' => '2000',
            'harga' => '10000',
            'desc' => 'Batik Tradisional'],
            ['nama' => 'Batik Ulos',
            'stok' => '78',
            'harga' => '99000',
            'desc' => 'Batik Premium']
        ];

        foreach ($data as $value) {
            Product::insert([
                'nama' => $value['nama'],
                'stok' => $value['stok'],
                'harga' => $value['harga'],
                'desc' => $value['desc'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
