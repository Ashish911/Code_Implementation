<?php

namespace App\Http\Controllers;
use App\Booking;
use App\buy;
use App\buy_products;
use App\products;
use App\Tattoo;
use App\User;
use File;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $Users = User::latest()->get();
        $Buy = buy::all();
        return view('User/UserDashboard',compact('Users','Buy'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function UserP()
    {
        $Users = User::all();
        return view('User/UserProfile',compact('Users'));
    }

    public function ViewBooking()
    {
        $User = User::all();
        $Booking = Booking::all();
        return view('User/ViewBookings', compact('Booking','User'));
    }

    public function ViewTattooTransaction()
    {
        $User = User::all();
        $buy = buy::all();
        return view('User/ViewTattooTransaction', compact('buy','User'));
    }

    public function ViewProductTransaction()
    {
        $User = User::all();
        $buyP = buy_products::all();
        return view('User/ViewProductTransaction', compact('buyP','User'));
    }

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
    public function edit()
    {
        $Users = User::all();
        return view('User/ProfileEdit',compact('Users'));
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
        $Users = User::find($id);
        $Users->FullName = $request->FullName;
        $Users->Address = $request->Address;
        $Users->DOB = $request->DOB;
        $Users->PhoneNo = $request->PhoneNo;
        $Users->email = $request->email;
        $Users->UserName = $request->UserName;
        $Users->Profile_Description = $request->Profile_Description;
        $Users->is_artist = $request->input('is_artist') ? true : false ;

            $image = $request->Image;
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('Upload/ProfilePic',$image_new_name);
            $img = 'Upload/ProfilePic/'.$image_new_name;
            $Users->Profile_Image = $img;

        $Users->save();
        return redirect()->route('UserProfile');
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
