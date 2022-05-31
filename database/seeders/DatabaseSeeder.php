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
        $this->call([BlockSeeder::class]);
        $this->call([MediaSeeder::class]);
        $this->call([MetaSeeder::class]);
        $this->call([ImageSeeder::class]);
        $this->call([BlockMediaSeeder::class]);
        $this->call([TemplateBlockSeeder::class]);
    }
}
