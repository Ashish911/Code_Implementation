<?php

namespace App\Http\Controllers;

use App\artistreviews;
use Illuminate\Http\Request;

class ArtistreviewsController extends Controller
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
        $Review = new artistreviews();
        $Review->Review_Comment = $request->Comment;
        $Review->UserId = $request->user()->id;
        $Review->ArtistId = $request->id;

        $Review->save();
        return redirect()->route('Artists');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\artistreviews  $artistreviews
     * @return \Illuminate\Http\Response
     */
    public function show(artistreviews $artistreviews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\artistreviews  $artistreviews
     * @return \Illuminate\Http\Response
     */
    public function edit(artistreviews $artistreviews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\artistreviews  $artistreviews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, artistreviews $artistreviews)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\artistreviews  $artistreviews
     * @return \Illuminate\Http\Response
     */
    public function destroy(artistreviews $artistreviews)
    {
        //
    }
}
