@extends('layouts.Pagelayout')

@section('content')
<div class="container-fluid">
<div class="container">
    <div class="row">
        @foreach($Tattoo as $tattoo)
        <div class="col-lg-4 col-md-4">
            <div>
                <img src="{{asset($tattoo->Tattoo_Image)}}" alt="{{$tattoo->Tattoo_Name}}" class="img-fluid">
            </div>
            <div>{{$tattoo->Tattoo_Detail}}</div>
            <div>
                <a class="btn btn-outline-info" href="{{route('Buy.edit',['id'=>$tattoo->id])}}"> Buy Now</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>
@endsection