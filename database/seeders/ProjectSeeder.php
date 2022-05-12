<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'video_id' => 1,
            'language_code' => 'nl',
        ]);
        DB::table('projects')->insert([
            'video_id' => 1,
            'language_code' => 'nl',
        ]);
    }
}
