<?php

namespace App\Http\Controllers;

use App\artist;
use App\ArtistReservation;
use Illuminate\Http\Request;

class ArtistReservationController extends Controller
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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Reservation = new ArtistReservation();
        $Reservation->Day = $request->Days;
        $Reservation->ArtistId = $request->id;
        $Reservation->Max_Bookings = $request->Max;
        $Reservation->save();
        return redirect()->route('AdminViewArtists');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ArtistReservation  $artistReservation
     * @return \Illuminate\Http\Response
     */
    public function show(ArtistReservation $artistReservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ArtistReservation  $artistReservation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artist = artist::findorfail($id);
        $Reservation = ArtistReservation::all();
        return view('Admin/ArtistReservation', compact('artist','Reservation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ArtistReservation  $artistReservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ArtistReservation $artistReservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ArtistReservation  $artistReservation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Reservation = ArtistReservation::findOrFail($id);
        $Reservation->delete();
        return redirect()->back();
    }
}
