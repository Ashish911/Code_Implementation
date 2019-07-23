<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\User;
use App\products;
use App\Category;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Session;

class ProductTest extends TestCase
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
    public function Addcategory()
    {
     factory(Category::class)->create();
     $category= Category::first();
     $response=$this->post('Category',[
         'Categoryname'=>$category->Categoryname
     ]);
     $this->assertCount(1,Category::all());
    }

    /** @test */
    public function Createproduct()
    {
        Session::start();
        $this->withoutExceptionHandling();
        $this->actingAs(factory(User::class)->create());
        $user=User::first();
        factory(Category::class)->create();
        $category = Category::first();
        factory(products::class)->create(['Category_id'=>$category->id]);
        $product = products::first();
        $response = $this->POST('Product',[
            'Product_Name'=> $product->Product_Name,
            'Product_Detail'=> $product->Product_Detail,
            'Price'=>$product->Price,
            'Quantity'=>$product->Quantity,
            'Product_Image'=>$product->Product_Image,
            'Category_id'=>$category->id,
        ]);
        $this->assertCount(1,products::all());
      }
}
