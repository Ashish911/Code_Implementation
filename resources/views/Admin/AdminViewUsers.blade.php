@extends('layouts.adminsidebar')

@section('content')

<h2 class="text-center py-2">Users</h2>
<div class="container">
    <div class="row">
        <div class="col-md-12 table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Address</th>
                    <th>Date Of Birth</th>
                    <th>Phone No</th>
                    <th>E-mail Address</th>
                    <th>Username</th>
                    <th>Description</th>
                    <th>User Status</th>
                    <th>Manage Status</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @if(count($users)>0)
                @foreach($users as $user)
                    @if($user->UserType =='User')
                    <tr>
                        <td>{{$user->FullName}}</td>
                        <td>{{$user->Address}}</td>
                        <td>{{$user->DOB}}</td>
                        <td>{{$user->PhoneNo}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->UserName}}</td>
                        <td>{{$user->Profile_Description}}</td>
                        <td>{{$user->Status}}</td>
                        <td>
                            <a href="{{ route('ManageUser.edit',['id'=>$user->id])}}" class="btn btn-outline-info">Manage</a></td>
                        <td>
                            <form action="{{ route('ManageUser.destroy',['id'=>$user->id]) }}" method="POST">
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
                    <p>There are No Users to show</p>
                @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection