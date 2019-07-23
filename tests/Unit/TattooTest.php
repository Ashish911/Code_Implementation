<?php

namespace Tests\Unit;

use App\Tattoo;
use App\User;
use App\Category;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Session;

class TattooTest extends TestCase
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
    public function TattooPage()
    {
        $response = $this->get('/Tatoos');
        $response->assertStatus(404);
    }

    /** @test */
    public function Create_Tattoo()
    {
        Session::start();
        $this->withoutExceptionHandling();
        $this->actingAs(factory(User::class)->create(['id'=>1]));
        $user=User::first();
        factory(Tattoo::class)->create();
        $Tattoo = Tattoo::first(['User_Id'->$user->id]);
        $response = $this->post('/AddTattoos.store',[
            'Tattoo_Name'=> $Tattoo->Tattoo_Name,
            'Tattoo_Detail'=> $Tattoo->Tattoo_Detail,
            'Price'=> $Tattoo->Price,
            'Quantity'=> $Tattoo->Quantity,
            'Tattoo_Image'=> $Tattoo->Image,
            'User_Id' => $Tattoo->User_Id,
        ]);
        $this->assertCount(1,Tattoo::all());
    }
}
