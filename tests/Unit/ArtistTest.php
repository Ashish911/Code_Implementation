<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ArtistTest extends TestCase
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

    public function CreateArtist()
    {
        $data = [
            'FullName' => 'Ashish Dongol',
            'Address' => 'Bafal',
            'PhoneNo' => '64864684',
            'email' => 'ggg@ggg.com',
            'Artist_Image' => 'Uploads/Artists/1561909212t3.jpg',
        ];

        $response = $this->json('POST','/App/artist',$data);
            $response->assertStatus(200);
            $response->assertJson(['status' => true]);
            $response->assertJson(['message' => "Artist Created!!"]);
            $response->assertJson(['data' => $data]);
    }
}
