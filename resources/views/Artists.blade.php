@extends('layouts.Pagelayout')

@section('content')
<div class="container-fluid bg-light pt-5">
<div class="container">
    <div class="row">
@foreach($artist as $artists)
        <div class="col-lg-4 col-md-4">
            <div class="Thumbnail mb-3">
                <img src="{{asset($artists->Artist_Image)}}" alt="{{$artists->FullName}}" class="img-fluid">
            </div>
            <div class="blog-column1">
                <h3 class="font-weight-bold mb-3">{{$artists->FullName}}</h3>
                <p class="dark-grey-text ">{{$artists->Address}} </p>
            </div>
            <div>
                <p>{{$artists->Artist_Description}}</p>
            </div>
            <a class="btn btn-outline-info" href="{{route('Booking.edit',['id'=>$artists->id])}}"> Book Now</a>
        </div>
@endforeach
    </div>
</div>
</div>

@endsection