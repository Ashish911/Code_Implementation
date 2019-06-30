@extends('layouts.usersidebar')
@section('sidebar')
@foreach($Users as $user)
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
    <p class="text-center my-5 py-5"> Welcome to the user dashboard <b class="text-danger">{{ Auth::user()->UserName }}</b></p>
@endsection