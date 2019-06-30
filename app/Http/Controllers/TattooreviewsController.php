<?php

namespace App\Http\Controllers;

use App\tattooreviews;
use Illuminate\Http\Request;

class TattooreviewsController extends Controller
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
        $Review = new tattooreviews();
        $Review->Review_Comment = $request->Comment;
        $Review->UserId = $request->user()->id;
        $Review->TattooId = $request->id;

        $Review->save();
        return redirect()->route('Tattoos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tattooreviews  $tattooreviews
     * @return \Illuminate\Http\Response
     */
    public function show(tattooreviews $tattooreviews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tattooreviews  $tattooreviews
     * @return \Illuminate\Http\Response
     */
    public function edit(tattooreviews $tattooreviews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tattooreviews  $tattooreviews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tattooreviews $tattooreviews)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tattooreviews  $tattooreviews
     * @return \Illuminate\Http\Response
     */
    public function destroy(tattooreviews $tattooreviews)
    {
        //
    }
}
