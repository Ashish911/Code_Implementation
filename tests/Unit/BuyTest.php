<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\buy;
use App\User;
use App\Tattoo;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Session;

class BuyTest extends TestCase
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
    public function buyTattootest()
    {
        Session::start();
        $this->withoutExceptionHandling();
        $this->actingAs(factory(User::class)->create());
        $user=User::first();
        factory(Tattoo::class)->create();
        $tattoo = Tattoo::first(['User_Id'->$user->id]);
        $response = $this->post('/Payment',[
            'PaymentMethod'=>'Esewa',
             'Contact'=>'asdasd',
             'Quantity'=>'1',
             'Price'=>'2000',
             'Total'=>'2000',
             'Location'=>'asdasd',             
             'TattooId'=>$Tattoo->id,
             'UserId'=>$user->id,
        ]);
        $this->assertCount(1,buy::all());
    }
}
