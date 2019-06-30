@extends('layouts.usersidebar')
@section('content')
    <div class="page-wrapper padding-t-a padding-b-a">
        <div class="wrapper wrapper--a">
            <div class="card-4">
                <div class="card-body">
                    <h2 class="title text-center font-weight-bold">Add Tattoo</h2>
                    <form method="post" name="edit" action="{{route('Review.store',Auth::user()->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="input-group">
                                    <label class="label">Comment</label>
                                    <textarea class="input-style-aa" type="text" name="Comment" placeholder="review" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="button--panel-2">
                            <input type="submit" class="btn btn-success" title="BecomeAnArtist" name="BecomeAnArtist" value="Submit"></input>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection