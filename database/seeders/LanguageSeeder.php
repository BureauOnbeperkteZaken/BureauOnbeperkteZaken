<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
            'code' => 'en', 'name' => 'English'
        ]);
        DB::table('languages')->insert([
            'code' => 'nl', 'name' => 'Nederlands'
        ]);        
        DB::table('languages')->insert([
            'code' => 'cn', 'name' => '中文'
        ]);
    }
}
