<?php

namespace Tests\Feature;

use App\Models\User;
use App\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class HomePageTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRecentProjects()
    {
        $projects = Project::orderBy('created_at', 'desc')->get()->take(3);
        $match = '/project/';
        $result = $this->get('/');
        $ids = [];

        foreach ($projects as $project) {
            $ids[] = $match . $project->id;
        }

        $result->assertViewHasAll($ids);
    }

    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('migrate:fresh');
        $this->artisan('db:seed');
    }
}
