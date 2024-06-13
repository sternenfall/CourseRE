<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;　
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DateTime;　


class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {// DB::table('テーブル名')->insert(['カラム名' => 'データ' ] );
        DB::table('subjects')->insert([
                'name' => '',
                'semester' => '',
                'grade' =>
                'credit' =>
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
