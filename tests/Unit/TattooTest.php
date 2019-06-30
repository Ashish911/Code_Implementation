<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TattooTest extends TestCase
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

    public function CreateTattoo()
    {
        $data = [
            'Tattoo_Name' => 'Mind Blown',
            'Tattoo_Detail' => 'mindblown',
            'Price' => '30',
            'Quantity' => '30',
            'Tattoo_Image' => 'Uploads/Tattoos/1561909212t3.jpg',
            'User_Id' => '1'
        ];

        $response = $this->json('POST','/App/Tattoo',$data);
            $response->assertStatus(200);
            $response->assertJson(['status' => true]);
            $response->assertJson(['message' => "Tattoo Created!!"]);
            $response->assertJson(['data' => $data]);
    }
}
