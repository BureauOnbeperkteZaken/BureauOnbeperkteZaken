<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class SponsorenTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testSponsoren()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/overons')
                    ->assertSee('Ideeënmakers')
                    ->assertSee('Het Bestuur')
                    ->assertSee('Jojo')
                    ->assertSee('Over Ons');
        });
    }
}