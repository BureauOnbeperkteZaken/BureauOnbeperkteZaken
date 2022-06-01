<?php

namespace Tests\Browser;

use App\Models\User;
use App\Project;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Hash;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class HomeTest extends DuskTestCase
{

    public function testRecentProjects()
    {
        $this->browse(function (Browser $browser) {
            $projects = Project::orderBy('created_at', 'desc')->get()->take(3);
            $browser->visitRoute('home');

            foreach ($projects as $project) {
                $browser->assertSee($project->name);
            }
        });
    }

    public function testProjectImages()
    {
        $this->browse(function (Browser $browser) {
            $projects = Project::orderBy('created_at', 'desc')->get()->take(3);
            $browser->visitRoute('home');

            foreach ($projects as $project) {
                $browser->assertSourceHas($project->image_path);
            }
        });
    }

    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('migrate:fresh');
        $this->artisan('db:seed');
    }
}
