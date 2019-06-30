<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function logintest()
    {
        $user = factory(App\User::class)->create(['email'=>'john@example.com', 'password' => bcrypt('testpass123')]);

        $this->visit(route('login'));
        $this->type($user->email, 'email');
        $this->type($user->password, 'password');
        $this->press('Login');
        $this->assetTrue(Auth::check());
        $this->seePageIs(route('userdashboard'));
    }
}
