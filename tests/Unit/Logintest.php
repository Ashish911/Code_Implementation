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

    /** @test */
    public function logintest()
    {
        $this->get('/login');
        $this->type('asd@asd.com', 'email');
        $this->type('12345678', 'password');
        $this->press('Login');
        $this->assetTrue(Auth::check());
        $this->seePageIs(route('user.userdashboard'));
    }
}
