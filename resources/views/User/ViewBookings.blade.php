@extends('layouts.usersidebar')


@section('content')

    <h2 class="text-center py-2">Users</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12 table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Artist Name</th>
                        <th>Artist Address</th>
                        <th>Artist Email</th>
                        <th>Artist Image</th>

                    </tr>
                    </thead>
                    <tbody>
                    @if(count($Booking)>0)
                        @foreach($Booking as $Bookings)
                            @if($Bookings->UserId ==  Auth::user()->id)
                            <tr>
                                <?php $artist = App\artist::findorfail($Bookings->ArtistId) ?>
                                <td>{{$artist->FullName}}</td>
                                <td>{{$artist->Address}}</td>
                                <td>{{$artist->email}}</td>
                                <td>
                                    <img src="{{asset($artist->Artist_Image)}}" alt="{{$artist->FullName}}" height="100">
                                </td>
                            </tr>
                            @endif
                        @endforeach
                    @else
                        <p>There are No bookings to show</p>
    @endif

@endsection