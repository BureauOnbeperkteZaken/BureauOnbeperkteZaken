<?php


namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class MetadataTest extends DuskTestCase
{
    /** @test */
    public function dusk_change_contact_metadata()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/login')
                ->type('email', "testuser@boz.com")
                ->type('password', "Welkom123")
                ->press('Log in')
                ->visit('/panel/metadata/contact')
                ->assertSee('Metadata aanpassen')
                ->assertValue('#urlInput', 'contact')
                ->type('title', "Lorem ipsum")
                ->type('description', 'The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Wa')
                ->pause(1000)
                ->press('Opslaan')
                ->pause(1000)
                ->assertSee('Opgeslagen')
                ->visit('/contact')
                ->assertTitle('Lorem ipsum')
                ->assertSourceHas('<meta name="description" content="The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Wa">');
        });
    }

    /** @test */
    public function dusk_description_too_long()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/panel/metadata/contact')
                ->assertSee('Metadata aanpassen')
                ->assertValue('#urlInput', 'contact')
                ->type('title', "Lorem ipsum")
                ->type('description', 'The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Wal')
                ->pause(1000)
                ->press('Opslaan')
                ->pause(1000)
                ->assertSee('The description may not be greater than 155 characters.');
        });
    }
}
