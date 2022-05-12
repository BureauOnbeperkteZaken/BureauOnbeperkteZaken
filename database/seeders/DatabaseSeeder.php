<?php

namespace Database\Seeders;

use App\Models\MetaData;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'email' => 'testuser@boz.com',
        ]);
        $this->call([VideoSeeder::class]);
        $this->call([LanguageSeeder::class]);
        $this->call([ProjectSeeder::class]);
        $this->call([TemplateBlockSeeder::class]);
        $this->call([BlockSeeder::class]);
        
        MetaData::create([
            'url' => 'contact',
            'title' => 'Contact',
            'description' => 'Neem contact met ons op'
        ]);
        MetaData::create([
            'url' => 'home',
            'title' => 'Home',
            'description' => 'Welkom bij Bureau Onbeperkte Zaken'
        ]);
    }
}
