<?php

namespace App\Http\Controllers;

use App\buy;
use App\Tattoo;
use App\tattooreviews;
use App\User;
use Illuminate\Http\Request;

class buyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        $Buy = new buy();
        $Buy->PaymentMethod = $request->Payment;
        $Buy->Location = $request->Location;
        $Buy->Contact = $request->Contact;
        $Buy->Quantity = $request->quantity;
        $Buy->Price = $request->Price;
        $pri = $request->Price;
        $qty = $request->Quantity;
        $total = $pri * $qty;
        $Buy->Total = $total;
        $Buy->TattooId = $request->id;
        $Buy->UserId = $request->user()->id;
        $stock = Tattoo::where('id', $Buy->TattooId)->first()->Quantity;
        if ($stock >= $request->quantity){
            Tattoo::where('id', $Buy->TattooId)->decrement('Quantity', $request->quantity);
        }
        $Buy->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::all();
        $tattoo = Tattoo::findorfail($id);
        $Review = tattooreviews::all();
        return view('Payment',compact('user','tattoo','Review'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
