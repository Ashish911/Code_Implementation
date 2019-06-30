@extends('layouts.usersidebar')

@section('content')

    <h2 class="text-center py-2">Tattoo Details</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12 table-responsive">
                <div>
                    <a class="btn btn-success mb-2" href="{{route('AddTattoos.create')}}" >Create Tattoo</a>
                </div>
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Tattoo Name</th>
                        <th>Tattoo Image</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Description</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($Tattoo)>0)
                    @foreach($Tattoo as $item)
                        @if($item->User_Id == Auth::user()->id)
                        <tr>
                            <td>{{$item->Tattoo_Name}}</td>
                            <td>
                                <img src="{{asset($item->Tattoo_Image)}}" alt="{{$item->Tattoo_Name}}" height="100">
                            </td>
                            <td>{{$item->Price}}</td>
                            <td>{{$item->Quantity}}</td>
                            <td>{{$item->Tattoo_Detail}}</td>
                            <td>
                                <a href="{{route('AddTattoos.edit',['id'=>$item->id])}}" class="btn btn-outline-primary">Edit</a>
                            </td>

                            <td>
                                <form method="post" action="{{route('AddTattoos.destroy',['id'=>$item->id]) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @else
                        @endif
                    @endforeach
                    @else
                        <p>There are no tattoos</p>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
