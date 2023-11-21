<?php

use Illuminate\Database\Seeder;

class GuestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '大阪たろう',
            'address' => '大阪府大阪市',
            'tel' => '12-3456-7890'
        ];
        DB::table('guests')->insert($param);

        $param = [
            'name' => '京都はなこ',
            'address' => '京都府京都市',
            'tel' => '12-3456-7890'
        ];
        DB::table('guests')->insert($param);
    }
}
