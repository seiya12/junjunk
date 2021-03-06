<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'user_code' => '019B00001',
                'email' => 'test@gmail.com',
                'password' => bcrypt('secretboy'),
                'name' => '春太郎',
                'postal_code' => '5320001',
                'prefectures' => '大阪府',
                'street_address' => '大阪市北区',
                'account_name' => 'テスト太郎',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'user_code' => '019B00002',
                'email' => 'test2@gmail.com',
                'password' => bcrypt('secretgirl'),
                'name' => '春花子',
                'postal_code' => '5320002',
                'prefectures' => '大阪府',
                'street_address' => '大阪市南区',
                'account_name' => 'テスト花子',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);
    }
}
