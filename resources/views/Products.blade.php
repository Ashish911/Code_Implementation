@extends('layouts.Pagelayout')

@section('content')

    @foreach($Product as $product)

        <div><img src="{{asset($product->Product_Image)}}" alt="{{$product->Product_Name}}" height="100"></div>
        <div>{{$product->Product_Detail}}</div>
        <div>
            <a class="btn btn-outline-info" href="{{route('ProductBuy.edit',['id'=>$product->id])}}"> Buy Now</a>
        </div>
    @endforeach
@endsection