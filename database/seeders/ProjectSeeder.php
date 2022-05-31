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
            'name' => 'Project onbeperkt anders',
            'description' => 'In onze eerste documentaireserie “Onbeperkt Anders” laten vijf mensen met een handicap zien waar hun dromen en potentie’s liggen. Wij gaan met hun meedenken tot het absurde toe. “Ik ga jou leren wie ik ben en wat ik kan betekenen voor de maatschappij.”',
            'image_path' => 'https://bureauonbeperktezaken.nl/wp-content/uploads/2021/12/Camera-handen-Djorg-768x792.jpg'
        ]);
        DB::table('projects')->insert([
            'video_id' => 1,
            'language_code' => 'nl',
            'name' => 'Geen gunst maar een mensrecht',
            'description' => 'Later meer informatie...',
            'image_path' => 'https://bureauonbeperktezaken.nl/wp-content/uploads/2022/01/Project-2-768x512.jpg'
        ]);
    }
}
