@extends('layouts.adminsidebar')

@section('content')

    <h2 class="text-center py-2">Users</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12 table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Review</th>
                        <th>Written By</th>

                    </tr>
                    </thead>
                    <tbody>
                    @if(count($Review)>0)
                        @foreach($Review as $Reviews)
                            <tr>
                                <td>{{$Reviews->Review_Comment}}</td>
                                <?php $user = App\User::findorfail($Reviews->UserId) ?>
                                <td>{{$user->FullName}}</td>
                            </tr>
                        @endforeach
                    @else
                        <p>There are No Reviews to show</p>
    @endif

@endsection