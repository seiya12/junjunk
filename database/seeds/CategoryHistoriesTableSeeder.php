<?php

use Illuminate\Database\Seeder;

class CategoryHistoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_histories')->insert([
            [
                'category' => 'GM',
                'count' => mt_rand(100, 10000),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'category' => 'CA',
                'count' => mt_rand(100, 10000),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'category' => 'WC',
                'count' => mt_rand(100, 10000),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'category' => 'MI',
                'count' => mt_rand(100, 10000),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'category' => 'MP',
                'count' => mt_rand(100, 10000),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'category' => 'TL',
                'count' => mt_rand(100, 10000),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'category' => 'SF',
                'count' => mt_rand(100, 10000),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'category' => 'AD',
                'count' => mt_rand(100, 10000),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'category' => 'PC',
                'count' => mt_rand(100, 10000),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'category' => 'TV',
                'count' => mt_rand(100, 10000),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'category' => 'FT',
                'count' => mt_rand(100, 10000),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'category' => 'VL',
                'count' => mt_rand(100, 10000),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'category' => 'ET',
                'count' => mt_rand(100, 10000),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);
    }
}
