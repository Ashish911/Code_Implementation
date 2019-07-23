@extends('layouts.Pagelayout')

@section('activeP','active')

<style>
    .banner {
        height: 380px;
        background: url('assets/images/cool-background2.png') center no-repeat ;
        padding-top: 5%;

    }

    .gra-tat{
        font-size: 50px;
        background: -webkit-linear-gradient(#576C75 , #253237);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

</style>

@section('content')
<div class="banner">
    <div class="text-center mt-5 pt-5">
        <h2 class="font-weight-bold gra-tat">Shop Products</h2>
    </div>
</div>
<div class="container-fluid bg-light py-5">
    <div class="container">
        <div class="row">
        @foreach($Product as $product)
            @if($product->Quantity == '0')
            @else
            <div class="col-lg-3 col-md-4 pb-3 mb-4 ">
                <div class="card">

                    <!-- Card image -->
                    <img src="{{asset($product->Product_Image)}}" alt="{{$product->Product_Name}}" height="300px">

                    <!-- Card content -->
                    <div class="card-body">

                        <!-- Title -->
                        <h4 class="card-title"><strong>{{$product->Product_Name}}</strong></h4>
                        <!-- Text -->
                        <div class="row">
                            <div class="col-9">
                                <p class="card-text text-body">{{$product->Product_Detail}}</p>
                            </div>
                            <div class="col-3">
                                <p class="card-text text-body text-right">{{$product->Price}}</p>
                            </div>
                        </div>
                        <!-- Button -->
                        <a class="btn btn-outline-info" href="{{route('ProductBuy.edit',['id'=>$product->id])}}"> Buy Now</a>

                    </div>

                </div>
            </div>
            @endif
        @endforeach
        </div>
    </div>
</div>
@endsection