<?php

namespace App\Http\Controllers;

use App\productreviews;
use Illuminate\Http\Request;

class ProductreviewsController extends Controller
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
        $Review = new productreviews();
        $Review->Review_Comment = $request->Comment;
        $Review->UserId = $request->user()->id;
        $Review->ProductId = $request->id;

        $Review->save();
        return redirect()->route('Products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\productreviews  $productreviews
     * @return \Illuminate\Http\Response
     */
    public function show(productreviews $productreviews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\productreviews  $productreviews
     * @return \Illuminate\Http\Response
     */
    public function edit(productreviews $productreviews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\productreviews  $productreviews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, productreviews $productreviews)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\productreviews  $productreviews
     * @return \Illuminate\Http\Response
     */
    public function destroy(productreviews $productreviews)
    {
        //
    }
}
