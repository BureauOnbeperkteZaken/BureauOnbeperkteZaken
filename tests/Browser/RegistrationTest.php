<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Hash;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegistrationTest extends DuskTestCase
{

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testRegisterFailTest()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                    ->visitRoute('panelcreate_user')
                    ->assertSee('Naam')
                    ->assertSee('Email')
                    ->assertSee('Wachtwoord')
                    ->value('@name', 'Test')
                    ->value('@email', 'test@register.com')
                    ->value('@password', 'test')
                    ->press('@register')
                    ->assertSee('The password must be at least 8 characters.')
                    ->logout();
        });
        $user = User::where('email', 'test@register.com')->first();
    }

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testHashedTest()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                ->visitRoute('panelcreate_user')
                ->assertSee('Naam')
                ->assertSee('Email')
                ->assertSee('Wachtwoord')
                ->value('@name', 'Test')
                ->value('@email', 'test@register.com')
                ->value('@password', 'test1234')
                ->press('@register')
                ->logout();
        });
        $user = User::where('email', 'test@register.com')->first();
        $this->assertTrue(Hash::check('test1234', $user->password));
    }

    public function testLoginFailTest()
    {
        $user = User::factory()->create();

        $this->browse(function (Browser $browser) {
            $browser
                ->visitRoute('login')
                ->assertSee('Email')
                ->assertSee('Wachtwoord')
                ->value('@email', 'nonexistant@boz.com')
                ->value('@password', 'Welkom123')
                ->press('@login')
                ->assertSee('These credentials do not match our records.');
        });
    }

    public function testLoginSucceedTest()
    {
        $user = User::factory()->create();

        $this->browse(function (Browser $browser) use ($user) {
            $browser
                ->visitRoute('login')
                ->assertSee('Email')
                ->assertSee('Wachtwoord')
                ->value('@email', $user->email)
                ->value('@password', 'Welkom123')
                ->press('@login')
                ->assertRouteIs('panelhome');
        });
    }

    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('migrate:fresh');
        $this->artisan('db:seed');
    }
}
