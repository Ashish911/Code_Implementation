@extends('layouts.adminsidebar')

@section('content')
<p class="text-center my-5 py-5"> Welcome to the admin dashboard <b class="text-danger">{{ Auth::user()->UserName }}</b></p>
@endsection
