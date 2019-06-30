@extends('layouts.adminsidebar')

@section('content')

    <h2 class="text-center py-2">Artists</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12 table-responsive">
                <div>
                    <a class="btn btn-success mb-2" href="{{route('Artist.create')}}" >Create Artist</a>
                </div>
                <table class="table table-bordered table-striped table-hover" >
                    <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Phone No</th>
                        <th>Artist Description</th>
                        <th>Artist Image</th>
                        <th>Create Reservation</th>
                        <th>Edit</th>
                        <th>Delete</th>

                    </tr>
                    </thead>
                    <tbody>
                    @if(count($artist)>0)
                        @foreach($artist as $artists)
                            <tr>
                                <td>{{$artists->FullName}}</td>
                                <td>{{$artists->Address}}</td>
                                <td>{{$artists->email}}</td>
                                <td>{{$artists->PhoneNo}}</td>
                                <td>{{$artists->Artist_Description}}</td>
                                <td><img src="{{asset($artists->Artist_Image)}}" alt="{{$artists->FullName}}" height="100"></td>
                                <td><a href="{{route('ArtistReservation.edit',['id'=>$artists->id])}}" class="btn btn-outline-info">Create</a> </td>
                                <td>
                                    <a href="{{ route('Artist.edit',['id'=>$artists->id])}}" class="btn btn-outline-info">Edit</a></td>
                                <td>
                                    <form action="{{ route('Artist.destroy',['id'=>$artists->id]) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <p>There are no artists to show</p>
    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection