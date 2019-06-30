<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BookingTest extends TestCase
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

    public function BookingTest()
    {
        $data = [
            'Day' => 'Sunday',
            'ArtistId' => '1',
            'UserId' => '1'
        ];
        $response = $this->json('POST', '/api/Booking',$data);
            $response->assertStatus(200);
            $response->assertJson(['status' => true]);
            $response->assertJson(['message' => "Successful"]);
            $response->assertJson(['data' => $data]);
    }
}
