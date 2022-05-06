<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blocks')->insert([
            'template_id' => 1,
            'order' => 1,
            'content' => '<div class="paragraph"><h5>Subheading</h5><h1>Title</h1><p>Deserunt labore do mollit consectetur mollit sit ex dolor anim exercitation fugiat dolore fugiat Lorem. Et officia adipisicing Lorem aute ex in occaecat anim laborum cupidatat quis ut magna reprehenderit. Consectetur aute irure in dolor. Pariatur ea occaecat nisi officia esse non pariatur ullamco veniam est.</p></div>',
            'type' => 'paragraph',
        ]);
        DB::table('blocks')->insert([
            'template_id' => 1,
            'order' => 2,
            'content' => '<div class="paragraph"><p>Tempor aliquip sint consequat Lorem proident sint nostrud aute ex adipisicing eu. Consequat exercitation et sint aliqua ullamco adipisicing ipsum ex. Occaecat eu do ipsum sunt velit culpa. Laborum aliqua exercitation consequat aute eiusmod ipsum sint irure sint reprehenderit ullamco.</p><ul><li>This is</li><li>An unordered</li><li>List</li></ul><ol><li>This is</li><li>An unordered</li><li>List</li></ol></div>',
            'type' => 'paragraph',
        ]);
        DB::table('blocks')->insert([
            'template_id' => 2,
            'order' => 1,
            'content' => '<h5>Subheading</h5><h1>Title</h1><p>Deserunt labore do mollit consectetur mollit sit ex dolor anim exercitation fugiat dolore fugiat Lorem. Et officia adipisicing Lorem aute ex in occaecat anim laborum cupidatat quis ut magna reprehenderit. Consectetur aute irure in dolor. Pariatur ea occaecat nisi officia esse non pariatur ullamco veniam est.</p><p>Tempor aliquip sint consequat Lorem proident sint nostrud aute ex adipisicing eu. Consequat exercitation et sint aliqua ullamco adipisicing ipsum ex. Occaecat eu do ipsum sunt velit culpa. Laborum aliqua exercitation consequat aute eiusmod ipsum sint irure sint reprehenderit ullamco.</p><ul><li>This is</li><li>An unordered</li><li>List</li></ul><ol><li>This is</li><li>An unordered</li><li>List</li></ol><p> Non ad excepteur nisi amet pariatur elit laboris. Duis ullamco ut voluptate laboris. Officia veniam sit proident amet nostrud do. Eiusmod tempor eiusmod proident aute dolor laborum.</p>',
            'type' => 'paragraph',
        ]);
    }
}
