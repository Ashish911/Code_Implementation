<?php

namespace App\Http\Controllers;

use App\artist;
use App\Booking;
use App\products;
use App\Reviews;
use App\Tattoo;
use App\ContactUs;
use App\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Review = Reviews::all()->take(3);
        $Tattoo = Tattoo::where('Quantity' ,'>','0')->take(4)->get();
        $artist = artist::all()->take(4);
        return view('welcome',compact('Review','Tattoo','artist'));
    }

    public function Tattoo()
    {
        $Tattoo = Tattoo::all();
        return view('Tattoos',compact('Tattoo'));
    }

    public function Artists()
    {
        $artist = artist::all();
        return view('Artists',compact('artist'));
    }

    public function Products()
    {
        $Product = products::all();
        return view('Products',compact('Product'));
    }

    public function ContactUs()
    {
        return view('ContactUs');
    }

    public function AboutUs()
    {
        return view('AboutUs');
    }

    public function Help()
    {
        return view('Help');
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
        //
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
