<?php

use Illuminate\Database\Seeder;

class TransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert([
            [    
                'transaction_code' => 'OSKO019B00001',
                'seller_code' => '019B00001',
                'buyer_code' => '019B00002',
                'product_code' => 'GMF019B00001',
                'warehouse_code' => 'OSK',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);
    }
}
