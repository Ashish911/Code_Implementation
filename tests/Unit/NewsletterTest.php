<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\newsletter;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class NewsletterTest extends TestCase
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
    public function Newsletter_Subscibe()
    {
        factory(newsletter::class)->create();
        $newsletter=newsletter::first();
        $response= $this->post('Newsletter',[
            'email'=>$newsletter->email,
        ]);
        $this->assertCount(1,newsletter::all()); 
    }
}
