<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ContactTest extends DuskTestCase
{
    /** @test */
    public function dusk_fill_form_and_submit()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/contact')
                    ->assertSee('Contact')
                    ->type('email', 'john@doe.com')
                    ->type('name', 'John Doe')
                    ->type('message', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live.')
                    ->pause(1000)
                    ->press('Versturen')
                    ->pause(5000)
                    ->assertSee('Bericht verzonden');
        });
    }
}
