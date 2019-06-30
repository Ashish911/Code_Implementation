@extends('layouts.Pagelayout')

@section('content')
    <div class="container-fluid">
        <div class="container">
            <form method="POST" action="{{route('Booking.store',['id'=>$artist->id])}}" enctype="multipart/form-data">
            @csrf
            <div>
                <div class="row">
                    <div class="col-6">
                        <label>Artist Name</label>
                    </div>
                    <div class="col-6">
                        <label>{{$artist->FullName}}</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label>Tattoo Detail</label>
                    </div>
                    <div class="col-6">
                        <label>{{$artist->Address}}</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label>Price</label>
                    </div>
                    <div class="col-6">
                        <label>{{$artist->PhoneNo}}</label>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="form-group col-3">
                <label>Day</label>
                <select name="Days" class="form-control" required>
                    @foreach ($Reservation as $item)
                        @if($artist->id == $item->ArtistId)
                            @if($item->Availability == 'Yes')
                            <option value="{{$item->Day}}">{{$item->Day}}</option>
                            @endif
                        @endif
                    @endforeach
                </select>
            </div>
                <input hidden type="text" name="Availability" Value="No">
            </div>
                <div>
                    <input type="submit" class="btn btn-outline-dark" placeholder="Book">
                </div>
            </form>
            <form method="post" name="edit" action="{{route('ArtistReview.store',['id'=>$artist->id])}}" >
                @csrf
                <div class="row mt-3">
                    <div class="col-lg-6 col-md-12">
                        <div class="input-group">
                            <textarea class="form-control" type="text" name="Comment" placeholder="Write a review about this artist" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <input type="submit" class="btn btn-success" title="BecomeAnArtist" name="BecomeAnArtist" value="Submit">
                </div>
            </form>

            <div class="mt-5" name="Review section">
                <h2 class="text-center">Reviews</h2>
                @foreach($Review as $review)
                    <div class="mt-4">
                        <div class="message text-center blockquote w-100">{{$review->Review_Comment}}</div>
                        <?php $user = App\User::findorfail($review->UserId)?>
                        <div class="blockquote-footer text-body text-center w-100">{{$user->FullName}}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection