<?php

namespace App\Http\Controllers;

use App\artist;
use Illuminate\Http\Request;

class artistController extends Controller
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
        $artist = artist::all();
        return view('Admin.AddArtist',compact('artist'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $artist = new artist();
        $artist->FullName = $request->FullName;
        $artist->Address = $request->Address;
        $artist->PhoneNo = $request->PhoneNo;
        $artist->email = $request->email;
        $artist->Artist_Description = $request->Artist_Description;

        $image = $request->image;
        $image_new_name = time().$image->getClientOriginalName();
        $image->move('Uploads/Artists',$image_new_name);
        $img = 'Uploads/Artists/'.$image_new_name;

        $artist->Artist_Image = $img;
        $artist->save();
        return redirect()->route('AdminViewArtists');

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
        $artist = artist::findorfail($id);
        return view('Admin.ArtistEdit',compact('artist'));
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
        $artist = artist::findOrFail($id);
        $artist->FullName = $request->FullName;
        $artist->Address = $request->Address;
        $artist->PhoneNo = $request->PhoneNo;
        $artist->email = $request->email;
        $artist->Artist_Description = $request->Artist_Description;

        $current = $artist->Artist_Image;
        if($request->hasFile('image')){
            $image = $request->image;
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('Uploads/Artists',$image_new_name);
            $img = 'Uploads/Artists/'.$image_new_name;
            $artist->Artist_Image = $img;

            if($current != $img){
                unlink($current);
            }
        }
        $artist->save();
        return redirect()->route('AdminViewArtists');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artist = artist::findOrFail($id);
        $artist->delete();
        return redirect()->back();
    }
}
