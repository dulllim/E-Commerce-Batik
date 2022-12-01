<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use Carbon\Carbon;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nama' => 'Juwita Topista Wibowo',
            'gender' => 'Wanita',
            'hp' => '0812345',
            'alamat' => 'Gendoh, Sempu, Banyuwangi'],
            ['nama' => 'Dhava Bagus Saputra',
            'gender' => 'Pria',
            'hp' => '0812597',
            'alamat' => 'Kenda, Sumberbaru, Banyuwangi'],
            ['nama' => 'Davina Safira Tadjoedin',
            'gender' => 'Wanita',
            'hp' => '0881278',
            'alamat' => 'Osaka, Jepang']
        ];

        foreach ($data as $value) {
            Customer::insert([
                'nama' => $value['nama'],
                'gender' => $value['gender'],
                'hp' => $value['hp'],
                'alamat' => $value['alamat'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
