@extends('layouts.adminsidebar')

@section('content')
    <div class="container mb-3">
        <h2 class="text-center py-2">User Status: <b>{{$user->email}}</b></h2>
        <form method="POST" action="{{route('ManageUser.update',['id'=>$user->id])}})}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="availability">Status</label><br>
                    <select name="Status" class="form-control" required>
                        <option value="Active">Active</option>
                        <option value="Suspended">Suspended</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <button type="submit" name="upload" class="btn btn-primary" style="width:120px; font-size:20px">
                        <i class="fa fa-sign-in" aria-hidden="true"></i> &nbsp; Update
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection