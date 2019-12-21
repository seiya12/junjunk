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
            'code' => 'GM',
            'name' => 'ゲーム',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ],
        [
            'code' => 'CA',
            'name' => 'カメラ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ],
        [
            'code' => 'WC',
            'name' => '腕時計',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ],
        [
            'code' => 'MI',
            'name' => '楽器',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ],
        [
            'code' => 'MP',
            'name' => '携帯電話',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ],
        [
            'code' => 'TL',
            'name' => '工具',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ],
        [
            'code' => 'SF',
            'name' => 'ソフト',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ],
        [
            'code' => 'AD',
            'name' => 'オーディオ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ],
        [
            'code' => 'PC',
            'name' => 'パソコン',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ],
        [
            'code' => 'TV',
            'name' => 'テレビ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ],
        [
            'code' => 'FT',
            'name' => '家具',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ],
        [
            'code' => 'VL',
            'name' => '乗り物',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ],
        [
            'code' => 'ET',
            'name' => 'その他',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ],
    ]);
    }
}
