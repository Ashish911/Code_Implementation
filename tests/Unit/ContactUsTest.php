<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\ContactUs;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReviewTest extends TestCase
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
    public function ContactUsTest()
    {
        factory(ContactUs::class)->create();
        $ContactUs=ContactUs::first();
        $response= $this->post('ContactUs',[
            'FirstName'=>$ContactUs->FirstName,
            'LastName'=>$ContactUs->LastName,
            'email'=>$ContactUs->email,
            'PhoneNo'=>$ContactUs->PhoneNo,
            'Comment'=>$ContactUs->Comment,
        ]);
        $this->assertCount(1,ContactUs::all()); 

    }
}
