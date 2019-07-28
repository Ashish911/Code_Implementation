@extends('layouts.usersidebar')
@section('content')

    <style>
        .card{
            width: 600px;
        }
    </style>

    <div class="page-wrapper padding-t-a padding-b-a">
        <div class="wrapper wrapper--a">
                    <h2 class="title text-center font-weight-bold">Review </h2>
            <div class="card offset-3">
                <div class="card-body">
                    <form method="post" name="edit" action="{{route('Review.store',Auth::user()->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                                <div class="col-12">
                                    <label class="label">Comment</label>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control" type="text" name="Comment" placeholder="review" required></textarea>
                                </div>
                        </div>
                        <div class="button--panel-2 mt-2">
                            <input type="submit" class="btn btn-success" title="BecomeAnArtist" name="BecomeAnArtist" value="Submit"></input>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection