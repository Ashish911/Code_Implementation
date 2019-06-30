@extends('layouts.adminsidebar')

@section('content')

    <h2 class="text-center py-2">Users</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12 table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone No</th>
                        <th>Message</th>

                    </tr>
                    </thead>
                    <tbody>
                    @if(count($ContactUS)>0)
                        @foreach($ContactUS as $ContactUSs)
                            <tr>
                                <td>{{$ContactUSs->FirstName}}</td>
                                <td>{{$ContactUSs->LastName}}</td>
                                <td>{{$ContactUSs->email}}</td>
                                <td>{{$ContactUSs->PhoneNo}}</td>
                                <td>{{$ContactUSs->Comment}}</td>
                            </tr>
                        @endforeach
                    @else
                        <p>There are No info to show</p>
    @endif

@endsection