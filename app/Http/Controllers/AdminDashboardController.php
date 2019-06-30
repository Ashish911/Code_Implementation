<?php

namespace App\Http\Controllers;

use App\artist;
use App\ArtistReservation;
use App\BecomeAnArtist;
use App\Booking;
use App\buy;
use App\buy_products;
use App\Category;
use App\ContactUs;
use App\newsletter;
use App\products;
use App\Reviews;
use App\Tattoo;
use App\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
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

    public  function AdminP()
    {
        $Users = User::latest()->get();
        return view('Admin/AdminProfile',compact('Users'));
    }

    public  function ViewArtist()
    {
        $artist = artist::all();
        return view('Admin/AdminViewArtists', compact('artist'));
    }

    public  function ViewTattoo()
    {
        $Tattoo = Tattoo::all();
        return view('Admin/AdminViewTattoos', compact('Tattoo'));
    }

    public  function ViewCategories()
    {
        $Category = Category::all();
        return view('Admin/AdminViewCategory', compact('Category'));
    }

    public  function ViewProducts()
    {
        $Product = products::all();
        return view('Admin/AdminViewProducts', compact('Product'));
    }

    public  function  ViewUsers()
    {
        $users = User::all();
        return view('Admin/AdminViewUsers', compact('users'));
    }

    public  function Review(){
        $Review = Reviews::all();
        return view('Admin/AdminViewReviews',compact('Review'));
    }

    public  function ContactUs(){
        $ContactUS = ContactUs::all();
        return view('Admin/AdminViewContactUs',compact('ContactUS'));
    }

    public  function Newsletter(){
        $Newsletter = newsletter::all();
        return view('Admin/AdminViewNewsletter',compact('Newsletter'));
    }

    public  function ViewBookings(){
        $Booking = Booking::all();
        return view('Admin/AdminViewBookings', compact('Booking'));
    }

    public  function ViewReservations(){
        $Reservations = ArtistReservation::all();
        return view('Admin/AdminViewArtistReservations', compact('Reservations'));
    }

    public function ViewTattooTransaction()
    {
        $buy = buy::all();
        return view('Admin/AdminViewTattooTransaction', compact('buy'));
    }

    public function ViewProductTransaction()
    {
        $buyp = buy_products::all();
        return view('Admin/AdminViewProductTransaction', compact('buyp'));
    }

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
        //
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
    public function edit()
    {
        return view('Admin/AdminProfileEdit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $Users = User::find($id);
        $Users->FullName = $request->FullName;
        $Users->Address = $request->Address;
        $Users->DOB = $request->DOB;
        $Users->PhoneNo = $request->PhoneNo;
        $Users->email = $request->email;
        $Users->UserName = $request->UserName;
        $Users->Profile_Description = $request->Profile_Description;


        $image = $request->image;
        $image_new_name = time().$image->getClientOriginalName();
        $image->move('Uploads/AdminProfilePic',$image_new_name);
        $img = 'Uploads/AdminProfilePic/'.$image_new_name;
        $Users->Profile_Image = $img;

        $Users->save();
        return redirect()->route('AdminProfile');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
