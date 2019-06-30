<?php

namespace App\Http\Controllers;

use App\buy_products;
use App\productreviews;
use App\products;
use App\User;
use Illuminate\Http\Request;

class BuyProductsController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $BuyProduct = new buy_products();
        $BuyProduct->PaymentMethod = $request->Payment;
        $BuyProduct->Location = $request->Location;
        $BuyProduct->Contact = $request->Contact;
        $BuyProduct->Quantity = $request->quantity;
        $BuyProduct->Price = $request->Price;
        $pri = $request->Price;
        $qty = $request->quantity;
        $total = $pri * $qty;
        $BuyProduct->Total = $total;
        $BuyProduct->ProductId = $request->id;
        $BuyProduct->UserId = $request->user()->id;
        $stock = products::where('id', $BuyProduct->ProductId)->first()->Quantity;
        if ($stock >= $request->quantity){
            products::where('id', $BuyProduct->ProductId)->decrement('Quantity', $request->quantity);
        }
        $BuyProduct->save();
        return redirect()->route('Products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\buy_products  $buy_products
     * @return \Illuminate\Http\Response
     */
    public function show(buy_products $buy_products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\buy_products  $buy_products
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::all();
        $product = products::findorfail($id);
        $Review = productreviews::all();
        return view('ProductPayment',compact('user','product','Review'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\buy_products  $buy_products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, buy_products $buy_products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\buy_products  $buy_products
     * @return \Illuminate\Http\Response
     */
    public function destroy(buy_products $buy_products)
    {
        //
    }
}
