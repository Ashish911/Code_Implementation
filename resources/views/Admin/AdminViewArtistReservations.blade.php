@extends('layouts.adminsidebar')

@section('content')

    <h2 class="text-center py-2">Artists</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12 table-responsive">
                <table class="table table-bordered table-striped table-hover" >
                    <thead>
                    <tr>
                        <th>Artist Name</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Phone No</th>
                        <th>Day</th>
                        <th>Availability</th>
                        <th>Delete</th>

                    </tr>
                    </thead>
                    <tbody>
                    @if(count($Reservations)>0)
                        @foreach($Reservations as $Reservation)
                            <tr>
                                <?php $artists = App\artist::findorfail($Reservation->ArtistId) ?>
                                <td>{{$artists->FullName}}</td>
                                <td>{{$artists->Address}}</td>
                                <td>{{$artists->email}}</td>
                                <td>{{$artists->PhoneNo}}</td>
                                <td>{{$Reservation->Day}}</td>
                                <td>{{$Reservation->Availability}}</td>
                                <td>
                                    <form action="{{ route('ArtistReservation.destroy',['id'=>$Reservation->id]) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <p>There are no Reservations to show</p>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection