@extends('layouts.Pagelayout')

@section('content')

    @foreach($Tattoo as $tattoo)

    <div><img src="{{asset($tattoo->Tattoo_Image)}}" alt="{{$tattoo->Tattoo_Name}}" height="100"></div>
        <div>{{$tattoo->Tattoo_Detail}}</div>
        <div>
            <a class="btn btn-outline-info" href="{{route('Buy.edit',['id'=>$tattoo->id])}}"> Buy Now</a>
        </div>
    @endforeach
@endsection