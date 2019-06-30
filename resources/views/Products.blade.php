@extends('layouts.Pagelayout')

@section('content')
<div class="container-fluid">
    <div class="container">
        <div class="row">
        @foreach($Product as $product)
            <div class="col-lg-4 col-md-4">
            <div>
                <img src="{{asset($product->Product_Image)}}" alt="{{$product->Product_Name}}" height="100">
            </div>
            <div>{{$product->Product_Detail}}</div>
            <div>
                <a class="btn btn-outline-info" href="{{route('ProductBuy.edit',['id'=>$product->id])}}"> Buy Now</a>
            </div>
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection