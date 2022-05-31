<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PlanFeatureTest extends TestCase
{
    /** @test */
    public function download()
    {
        $response = $this->get(route('jarenplandownload'));
        $response->assertStatus(200);
        $file = $response->getFile();
        self::assertFileExists($file);
    }

    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('migrate:fresh');
        $this->artisan('db:seed');
    }
}
