<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BuyTest extends TestCase
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

    public function buytest()
    {
        $data = [
            'PaymentMethod' => 'Esewa',
            'Price' => '30',
            'Quantity' => '5',
            'Total' => '150',
            'Location' => 'Bafal',
            'Contact' => '98464864',
            'TattooId' => '1',
            'UserId' => '1'
        ];
        $response = $this->json('POST','/App/buys',$data);
            $response->assertStatus(200);
            $response->assertJson(['status' => true]);
            $response->assertJson(['message' => "Successfull!!"]);
            $response->assertJson(['data' => $data]);
    }
}
