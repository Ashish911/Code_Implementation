<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Producttest extends TestCase
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

    public function Createproduct()
    {
        $data = [
            'Product_Name' => 'Ink Machine',
            'Product_Detail' => 'Mostlyink',
            'Price' => '30',
            'Quantity' => '30',
            'Product_Image' => 'Uploads/Products/15619090871131.jpg',
            'Category_id' => '1'
        ];

        $response = $this->json('POST','/api/Product',$data);
            $response->assertStatus(200);
            $response->assertJson(['status' => true]);
            $response->assertJson(['message' => "Product Created!!"]);
            $response->assertJson(['data' => $data]);
    }
}
