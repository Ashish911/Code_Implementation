@extends('layouts.usersidebar')

@section('sidebar')
    @foreach($User as $user)
        @if($user->id == Auth::user()->id)
            @if($user->is_artist == '1')
                <li class="nav-item">
                    <a class="nav-link" href="{{route('AddTattoos.index')}}">
                        <span>Tattoos</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=href="{{ route('logout') }}" onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>{{ __('Logout') }}</span></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href=href="{{ route('logout') }}" onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>{{ __('Logout') }}</span></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                </li>
            @endif
        @endif
    @endforeach
@endsection

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