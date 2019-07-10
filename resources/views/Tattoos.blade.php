@extends('layouts.Pagelayout')

<style>
    .banner {
        height: 200px;
        background-color: #0d0f11;
        padding-top: 5%;
    }

</style>

@section('content')
<div class="banner">
    <div class="text-center">
        <p class="blockquote">Buy Tattoo</p>
    </div>
</div>
<div class="container-fluid py-5">
<div class="container">
    <div class="row">
        @foreach($Tattoo as $tattoo)
        @if($tattoo->Quantity == '0')
        @else
        <div class="col-lg-3 col-md-3 pb-3 mb-4 ">
            <div class="card">

                <!-- Card image -->
                <img src="{{asset($tattoo->Tattoo_Image)}}" alt="{{$tattoo->Tattoo_Name}}" height="300px">

                <!-- Card content -->
                <div class="card-body">

                    <!-- Title -->
                    <h4 class="card-title"><strong>{{$tattoo->Tattoo_Name}}</strong></h4>
                    <!-- Text -->
                    <div class="row">
                        <div class="col-6">
                            <p class="card-text text-body">{{$tattoo->Tattoo_Detail}}</p>
                        </div>
                        <div class="col-6">
                            <p class="card-text text-body text-right">${{$tattoo->Price}}</p>
                        </div>
                    </div>

                    <!-- Button -->
                    <a class="btn btn-outline-info" href="{{route('Buy.edit',['id'=>$tattoo->id])}}"> Buy Now</a>

                </div>

            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>
</div>
@endsection