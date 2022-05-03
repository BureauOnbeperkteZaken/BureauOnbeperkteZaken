<?php

namespace Database\Seeders;

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
        $this->call([LanguageSeeder::class]);
        $this->call([TemplateSeeder::class]);
        $this->call([BlockSeeder::class]);
    }
}
