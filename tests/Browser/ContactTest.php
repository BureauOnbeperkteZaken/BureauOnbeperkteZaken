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
//    /** @test */
//    public function dusk_fill_form_incorrect_email()
//    {
//        $this->browse(function (Browser $browser) {
//            $browser->visit('/contact')
//                ->assertSee('Contact')
//                ->type('email', 'john')
//                ->type('name', 'John Doe')
//                ->type('message', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live.')
//                ->pause(1000)
//                ->press('Versturen')
//                ->pause(5000)
//                ->assertSee('Bericht verzonden');
//        });
//    }
//    /** @test */
//    public function dusk_fill_form_message_too_long()
//    {
//        $this->browse(function (Browser $browser) {
//            $browser->visit('/contact')
//                ->assertSee('Contact')
//                ->type('email', 'john@doe.com')
//                ->type('name', 'John Doe')
//                //501 characters
//                ->type('message', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus')
//                ->pause(1000)
//                ->press('Versturen')
//                ->pause(5000)
//                ->assertSee('Bericht verzonden');
//        });
//    }
}
