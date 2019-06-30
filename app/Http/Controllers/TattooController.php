<?php

namespace App\Http\Controllers;


use App\Tattoo;
use App\User;
use Illuminate\Http\Request;

class TattooController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Users = User::all();
        $Tattoo = Tattoo::all();
        return view('User/TattooIndex',compact('Tattoo','Users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Users = User::all();
        return view('User/AddTattoos',compact('Users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Tattoo = new Tattoo();
        $Tattoo->Tattoo_Name = $request->Tattoo_Name;
        $Tattoo->Tattoo_Detail = $request->Tattoo_Detail;
        $Tattoo->Price = $request->Tattoo_Price;
        $Tattoo->Quantity = $request->Tattoo_Quantity;
        $Tattoo->User_Id = $request->user()->id;

        $image = $request->image;
        $image_new_name = time().$image->getClientOriginalName();
        $image->move('Uploads/Tattoos',$image_new_name);
        $img = 'Uploads/Tattoos/'.$image_new_name;

        $Tattoo->Tattoo_Image = $img;
        $Tattoo->save();
        return redirect()->route('AddTattoos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Tattoo = Tattoo::findOrFail($id);
        $User = User::all();

        return view('User/Tattoo_edit')->with('Tattoo',$Tattoo)
            ->with('User',$User);
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
        $Tattoo = Tattoo::findOrFail($id);
        $Tattoo->Tattoo_Name = $request->Tattoo_Name;
        $Tattoo->Tattoo_Detail = $request->Tattoo_Detail;
        $Tattoo->Price = $request->Tattoo_Price;
        $Tattoo->Quantity = $request->Tattoo_Quantity;
        $Tattoo->User_Id = $request->user()->id;

        $current = $Tattoo->Tattoo_Image;
        if($request->hasFile('image')){
            $image = $request->image;
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('Uploads/product',$image_new_name);
            $img = 'Uploads/product/'.$image_new_name;
            $Tattoo->Tattoo_Image = $img;

            if($current != $img){
                unlink($current);
            }
        }

        $Tattoo->save();
        return redirect()->route('AddTattoos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Tattoo = Tattoo::findOrFail($id);
        $Tattoo->delete();

        unlink($Tattoo->Tattoo_Image);
        return redirect()->back();
    }
}
