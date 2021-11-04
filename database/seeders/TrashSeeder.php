<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class TrashSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            [
                'user_id' => 1,
                'title' => 'たいとる1',
                'trash' => '○○してしまった。',
                'created_at' => new DateTime(),
            ],
            [
                'user_id' => 2,
                'title' => 'たいとる2',
                'trash' => '△△してしまった。',
                'created_at' => new DateTime(),
            ],
            [
                'user_id' => 3,
                'title' => 'たいとる3',
                'trash' => '☓☓してしまった。',
                'created_at' => new DateTime(),
            ],
        ];
        DB::table('trashes')->insert($param);
    }
}
