<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('templates')->insert([
            'content' => '<h1>Noah heeft elke dag haram</h1><p>crab rave!!🦀</p><h1>🥺👉👈</h1><p><br></p><p><br></p><p><br></p><p>DABABY1</p><p>!!!!!! </p><h2>👉😂👈</h2>',
            'language_code' => 'cn',
        ]);
    }
}
