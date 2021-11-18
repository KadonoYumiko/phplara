<?php

use Illuminate\Database\Seeder;

class Samp08TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	DB::table('bcontents')->insert([
            [
            'title'=>'テスト1',
            'contents'=>'ブログ表示テスト1',
            'tm'=>date('Y-m-d'),
            ],
            [
            'title'=>'テスト2',
            'contents'=>'ブログ表示テスト2',
            'tm'=>date('Y-m-d'),
            ]
        ]);
    }
}
