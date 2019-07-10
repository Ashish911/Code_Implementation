@extends('layouts.Pagelayout')

@section('content')
<div class="container-fluid py-5">
    <div class="container">
        <div class="row">
        @foreach($Product as $product)
            @if($product->Quantity == '0')
            @else
            <div class="col-lg-4 col-md-4 pb-3 mb-4 ">
                <div class="card">

                    <!-- Card image -->
                    <img src="{{asset($product->Product_Image)}}" alt="{{$product->Product_Name}}" height="300px">

                    <!-- Card content -->
                    <div class="card-body">

                        <!-- Title -->
                        <h4 class="card-title"><strong>{{$product->Product_Name}}</strong></h4>
                        <!-- Text -->
                        <p class="card-text text-body">{{$product->Product_Name}}</p>
                        <p class="card-text text-body">{{$product->Price}}</p>

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