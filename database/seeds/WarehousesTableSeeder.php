<?php

use Illuminate\Database\Seeder;

class WarehousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('warehouses')->insert([
            [    
                'prefecture' => '大阪府',
                'warehouse' => '大阪府',
                'warehouse_code' => 'OSK',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [    
                'prefecture' => '兵庫県',
                'warehouse' => '大阪府',
                'warehouse_code' => 'OSK',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [    
                'prefecture' => '三重県',
                'warehouse' => '大阪府',
                'warehouse_code' => 'OSK',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [    
                'prefecture' => '和歌山県',
                'warehouse' => '大阪府',
                'warehouse_code' => 'OSK',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [    
                'prefecture' => '京都府',
                'warehouse' => '大阪府',
                'warehouse_code' => 'OSK',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);
    }
}
