@extends('layouts.Pagelayout')

<style>
    .banner {
        height: 380px;
        background: url('assets/images/cool-background.png') center center no-repeat ;
        padding-top: 5%;
    }

    .gra-tat{
        font-size: 50px;
        background: -webkit-linear-gradient(#ffffff , #000000);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

</style>

@section('content')
<div class="banner">
    <div class="text-center mt-5 pt-5">
        <h2 class="font-weight-bold gra-tat">Shop Tattoos</h2>
    </div>
</div>
<div class="container-fluid bg-light py-5">
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
                        <div class="col-9">
                            <p class="card-text text-body">{{$tattoo->Tattoo_Detail}}</p>
                        </div>
                        <div class="col-3">
                            <p class="card-text text-body text-right">${{$tattoo->Price}}</p>
                        </div>
                    </div>

                    <!-- Button -->
                    <a class="btn btn-outline-info" href="{{route('Buy.edit',['id'=>$tattoo->id])}}"><i class="fa fa-shopping-cart"></i> Buy Now</a>

                </div>

            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>
</div>
@endsection