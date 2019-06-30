<?php

namespace Tests\Unit;

use App;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Usertest extends TestCase
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

    public function CreateUser()
    {
        $user = factory(\App\User::class)->create();
    }
}
