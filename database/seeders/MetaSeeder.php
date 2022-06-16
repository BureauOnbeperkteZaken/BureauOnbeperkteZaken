<?php

namespace Database\Seeders;

use App\Models\MetaData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('meta_data')->insert([
            'url' => 'contact',
            'title' => 'Contact',
            'description' => 'Neem contact met ons op'
        ]);
        DB::table('meta_data')->insert([
            'url' => 'home',
            'title' => 'Home',
            'description' => 'Welkom bij Bureau Onbeperkte Zaken'
        ]);
        DB::table('meta_data')->insert([
            'url' => 'jarenplan',
            'title' => 'Meerjarenplan 2021-2025',
            'description' => 'Het meerjarenplan van Bureau Onbeperkte Zaken'
        ]);
        DB::table('meta_data')->insert([
            'url' => 'projecten',
            'title' => 'Projecten',
            'description' => 'Zie alle projecten van BOZ'
        ]);
        DB::table('meta_data')->insert([
            'url' => 'overons',
            'title' => 'Over BOZ',
            'description' => 'Wie zijn wij en wat doen wij'
        ]);
        DB::table('meta_data')->insert([
            'url' => 'samenwerkingen',
            'title' => 'Samenwerkingen',
            'description' => 'Onze sponsoren en partners'
        ]);
    }
}
