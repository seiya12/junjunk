<?php

use Illuminate\Database\Seeder;

class CategoryCorrespondTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_correspond')->insert([
        [
            'category' => 'GM',
            'name' => 'ゲーム',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ],
        [
            'category' => 'CA',
            'name' => 'カメラ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ],
        [
            'category' => 'WC',
            'name' => '腕時計',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ],
        [
            'category' => 'MI',
            'name' => '楽器',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ],
        [
            'category' => 'MP',
            'name' => '携帯電話',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ],
        [
            'category' => 'TL',
            'name' => '工具',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ],
        [
            'category' => 'SF',
            'name' => 'ソフト',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ],
        [
            'category' => 'AD',
            'name' => 'オーディオ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ],
        [
            'category' => 'PC',
            'name' => 'パソコン',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ],
        [
            'category' => 'TV',
            'name' => 'テレビ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ],
        [
            'category' => 'FT',
            'name' => '家具',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ],
        [
            'category' => 'VL',
            'name' => '乗り物',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ],
        [
            'category' => 'ET',
            'name' => 'その他',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ],
    ]);
    }
}
