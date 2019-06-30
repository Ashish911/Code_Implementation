@extends('layouts.adminsidebar')

@section('content')

    <h2 class="text-center py-2">Users</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12 table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Email-Address</th>

                    </tr>
                    </thead>
                    <tbody>
                    @if(count($Newsletter)>0)
                        @foreach($Newsletter as $Newsletters)
                            <tr>
                                <td>{{$Newsletters->id}}</td>
                                <td>{{$Newsletters->email}}</td>
                            </tr>
                        @endforeach
                    @else
                        <p>There are No Users to show</p>
    @endif

@endsection