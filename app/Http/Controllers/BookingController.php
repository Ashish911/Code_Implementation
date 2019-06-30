<?php

namespace App\Http\Controllers;

use App\ArtistReservation;
use App\artistreviews;
use App\Booking;
use App\User;
use App\artist;
use Illuminate\Http\Request;

class BookingController extends Controller
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
        $Book = new Booking;
        $Book->Day = $request->Days;
        $Book->ArtistId = $request->id;
        $Book->UserId = $request->user()->id;
        $Reservation = ArtistReservation::where('Day', $Book->Day)->first()->Availability;
        if ($Reservation == $request->Days){
            ArtistReservation::where('Day', $Book->Day)->Input('Availability', $request->Availability);
        }
        $Book->save();
        return redirect()->route('Artists');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::all();
        $Reservation = ArtistReservation::all();
        $artist = artist::findorfail($id);
        $Review = artistreviews::all();
        $books = Booking::all();
        return view('BookingForm',compact('user','artist','books','Reservation','Review'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
