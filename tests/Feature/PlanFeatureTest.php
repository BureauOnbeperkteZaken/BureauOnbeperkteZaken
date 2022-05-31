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
        $response = $this->get('downloadables/1Meerjarenplan Bureau onbeperkte zaken.pdf');
        $response->assertStatus(200);
        $file = $response->getFile();
        self::assertFileExists($file);
    }
}
