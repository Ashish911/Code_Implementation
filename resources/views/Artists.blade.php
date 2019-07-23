@extends('layouts.Pagelayout')

<style>
    .banner {
        height: 380px;
        background: url('assets/images/cool-background1.png') center no-repeat ;
        padding-top: 5%;

    }

    .gra-tat{
        font-size: 50px;
        background: -webkit-linear-gradient(#87AEDC , #FFFFFF);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

</style>

@section('activeAr','active')

@section('content')
<div class="banner">
    <div class="text-center mt-5 pt-5">
        <h2 class="font-weight-bold gra-tat">Book Artists</h2>
    </div>
</div>
<div class="container-fluid bg-light py-5">
<div class="container">
    <div class="row">
@foreach($artist as $artists)
            <div class="col-lg-3 col-md-4 pb-3 mb-4 ">
                <div class="card">

                    <!-- Card image -->
                    <img src="{{asset($artists->Artist_Image)}}" alt="{{$artists->FullName}}" height="300px">

                    <!-- Card content -->
                    <div class="card-body">

                        <!-- Title -->
                        <h4 class="card-title"><strong>{{$artists->FullName}}</strong></h4>
                        <!-- Text -->
                        <p class="card-text text-body">{{$artists->Address}}</p>
                        <p class="card-text text-body">{{$artists->Artist_Description}}</p>

                        <!-- Button -->
                        <a class="btn btn-outline-info" href="{{route('Booking.edit',['id'=>$artists->id])}}"> Book Now</a>

                    </div>

                </div>
            </div>
@endforeach
    </div>
</div>
</div>

@endsection