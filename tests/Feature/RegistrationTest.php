<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class RegistrationTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $userArray = [
            'name' => 'test',
            'email' => 'test@test.com',
            'password' => 'test1234',
        ];

        $response = $this->post('/panel/add_user'
            , $userArray);

        $user = User::where('email', $userArray['email'])->first();
        $response->assertStatus(200);
        $this->assertTrue(Hash::check($userArray['password'], $user->password));
    }

    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('migrate:fresh');
        $this->artisan('db:seed');
    }
}
