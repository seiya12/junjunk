<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'product_code' => 'GMF019B00001',
                'name' => 'ps3コントローラー',
                'sell_user_code' => '019B00001',
                'category' => 'GM',
                'price' => '1000',
                'description' => '目に見えて破損しています。',
                'estimet' => '2~3日',
                'sell_type' => 'O',
                'end_date' => '2019-11-11 11:11:11'
            ],
            [
                'product_code' => 'CAF019B00001',
                'name' => 'カメラレンズ破損',
                'sell_user_code' => '019B00002',
                'price' => '3500',
                'category' => 'CA',
                'description' => 'カメラ大好き！',
                'estimet' => '1週間以内',
                'sell_type' => 'F',
                'end_date' => '2019-11-11 11:11:11'
            ],
        ]);
    }
}
