<?php


namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class MetadataTest extends DuskTestCase
{
    /** @test */
    public function dusk_fill_form_and_submit()
    {
        $this->browse(function (Browser $browser) {
            //login
            //go to contact
            //change metadata
            //check if metadata is correct
            $browser
                ->visit('/login')
                ->type('email', "testuser@boz.com")
                ->type('password', "Welkom123")
                ->press('Log in')
                ->visit('/panel/metadata/contact')
                ->assertSee('Metadata aanpassen')
                ->assertSee('contact')
                ->type('title', "Lorem ipsum")
                ->type('description', 'The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Wa')
                ->pause(1000)
                ->press('Opslaan')
                ->pause(2000)
                ->assertSourceHas('<meta name="title" content="Lorem ipsum">')
                ->assertSourceHas('<meta name="description" content="The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Wa">');
        });
    }
}
