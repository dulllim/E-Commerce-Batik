<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Transaction;
use Carbon\Carbon;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            ['customer_id'=>'1',
            'product_id'=>'1'],
            ['customer_id'=>'1',
            'product_id'=>'2'],
            ['customer_id'=>'1',
            'product_id'=>'3'],
            ['customer_id'=>'2',
            'product_id'=>'1']
        ];
    
        foreach ($data as $value) {
            Transaction::insert([
                'customer_id' => $value['customer_id'],
                'product_id' => $value['product_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
