<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;
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
    public function Login_Test()
    {
        $this->withoutExceptionHandling();
        $this->actingAs(factory(User::class)->create());
        $response = $this->get('UserDashboard')->assertOk();
    }

    /** @test */
    public function Create_User()
    {
        factory(User::class)->create();
        $user=User::first();
        $response= $this->post('register',[
            'FullName' =>$user->FullName,
            'Address' =>$user->Address,
            'DOB' =>$user->DOB,
            'PhoneNo' =>$user->PhoneNo,
            'email'=>$user->email,
            'UserName'=>$user->UserName,
            'Usertype' =>$user->UserType,
            'Status' =>$user->Status,
            'password'=>$user->password,
        ]);
        $this->assertCount(1,User::all()); 
    }
}
