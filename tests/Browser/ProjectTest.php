<?php

namespace Tests\Browser;

use App\Models\User;
use App\Project;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Hash;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ProjectTest extends DuskTestCase
{

    public function testProjectCreateNoAuth()
    {
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('panelnew_project')
                ->assertRouteIs('login');
        });
    }

    public function testProjectCreateAuth()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                ->visitRoute('panelnew_project')
                ->assertRouteIs('panelnew_project')
                ->assertSee('Naam van project:')
                ->assertSee('Template:')
                ->assertSee('Video Bestand:')
                ->assertSee('Video Naam:')
                ->logout();
        });
    }

    /*public function testProjectCreateSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                ->visitRoute('panelnew_project')
                ->assertRouteIs('panelnew_project')
                ->assertSee('Naam van project:')
                ->assertSee('Template:')
                ->assertSee('Video Bestand:')
                ->assertSee('Video Naam:')
                ->value('@title', 'Test Project')
                ->click('@template')
                ->attach('@video', public_path('img/small.mp4'))
                ->value('@video_name', 'Test Video')
                ->click('@submit')
                ->assertPathBeginsWith('/panel/project/')
                ->logout();
        });
    }*/

    public function testAllProjectsShown() {
        $this->browse(function (Browser $browser) {
            $amountOfProjects = Project::all()->count();
            $browser->visitRoute('projects');
            $cards = $browser->elements('.project-card');
            self::assertCount($amountOfProjects, $cards);
        });
    }

    public function testProjectDeleteNoAuth(){
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('panelproject.remove', ['id' => 2])
                ->assertRouteIs('login');
        });
    }

    public function testProjectDeleteAuth() {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                ->visitRoute('panelproject.remove', ['id' => 2]);
        });
    }

    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('migrate:fresh');
        $this->artisan('db:seed');
    }
}
