@extends('layouts.Pagelayout')

@section('content')
<div class="container-fluid bg-light py-5">
<div class="container">
    <div class="row">
@foreach($artist as $artists)
            <div class="col-lg-4 col-md-4 pb-3 mb-4 ">
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