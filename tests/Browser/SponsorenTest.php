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
            $browser->visit('/samenwerkingen')
                    ->assertSee('Samenwerkingen')
                    ->assertSee('Comité van aanbevelingen')
                    ->assertSee('Gemeente Vught')
                    ->assertSee('Moved Media')
                    ->assertSee('Maarten Zomers')
                    ->assertSee('Scarabee Films')
                    ->assertSee('Noortje van Lith')
                    ->assertSee('Van Kruisdijk Notarissen')
                    ->assertSee('Kunstloc Brabant')
                    ->assertSee('Albert Verlinde')
                    ->assertSee('Nieuwerwets Creatief')
                    ->assertSee('Hans Kroon Advies & Zorg');
        });
    }
}
