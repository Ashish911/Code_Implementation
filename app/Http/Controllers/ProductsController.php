<?php

namespace App\Http\Controllers;

use App\Category;
use App\products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Product = products::all();
        $Category = Category::all();
        return view('Admin.AddProduct',compact('Product','Category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Product = new products();
        $Product->Product_Name = $request->Product_Name;
        $Product->Price = $request->Price;
        $Product->Quantity = $request->Quantity;
        $Product->Product_Detail = $request->Product_Detail;
        $Product->Category_id = $request->category;

        $image = $request->image;
        $image_new_name = time().$image->getClientOriginalName();
        $image->move('Uploads/Products',$image_new_name);
        $img = 'Uploads/Products/'.$image_new_name;

        $Product->Product_Image = $img;
        $Product->save();
        return redirect()->route('AdminViewProducts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Product = products::findorfail($id);
        $Category = Category::all();
        return view('Admin.ProductEdit',compact('Product','Category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Product = products::findOrFail($id);
        $Product->Product_Name = $request->Product_Name;
        $Product->Price = $request->Price;
        $Product->Quantity = $request->Quantity;
        $Product->Product_Detail = $request->Product_Detail;
        $Product->Category_id = $request->category;

        $current = $Product->Product_Image;
        if($request->hasFile('image')){
            $image = $request->image;
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('Uploads/Artists',$image_new_name);
            $img = 'Uploads/Artists/'.$image_new_name;
            $Product->Product_Image = $img;

            if($current != $img){
                unlink($current);
            }
        }
        $Product->save();
        return redirect()->route('AdminViewProducts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy($id )
    {
        $Product = products::findOrFail($id);
        $Product->delete();
        return redirect()->back();
    }
}
