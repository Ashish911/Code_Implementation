@extends('layouts.Pagelayout')

@section('content')
    <style>
        .card{
            width: 600px;
        }

        .btn-submit{
            color: #DEC79B;;
            background-color: #18181E;
            transition: 0.5s color;
            transition: 0.5s background-color;
        }

        .btn-submit:hover{
            color: white;;
            background-color: lightskyblue;
        }
    </style>

    <div class="container-fluid">
        <div class="container">

            <div class="card offset-3 mt-5">

                <div class="card-body px-lg-5 pt-0">
                    <form method="POST" action="{{route('Booking.store',['id'=>$artist->id])}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-5">
                            <div class="col-6">
                                <label>Artist Name</label>
                            </div>
                            <div class="col-6">
                                <input readonly name="FullName" id="Price" value="{{$artist->FullName}}" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <label>Artist Address</label>
                            </div>
                            <div class="col-6">
                                <input readonly name="Address" id="Price" value="{{$artist->Address}}" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <label>Phone No</label>
                            </div>
                            <div class="col-6">
                                <input readonly name="Phone No" id="Price" value="{{$artist->PhoneNo}}" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="form-group col-6">
                                <label>Day</label>
                            </div>
                            <div class="col-6">
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
                        </div>
                        <div class="row">
                            <input class="btn btn-outline-dark btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" value="Book Now">
                        </div>
                    </form>
                    <!-- Form -->

                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <form method="post" name="edit" action="{{route('ProductReview.store')}}" >
                        @csrf
                        <div class="row mt-3">
                            <div class="col-lg-9 col-md-9 offset-2">
                                <div class="input-group">
                                    <textarea class="form-control" type="text" name="Comment" placeholder="Write a review about this product" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2 offset-2">
                            <input type="submit" class="btn btn-success" value="Submit">
                        </div>
                    </form>
                </div>

                <div class="mt-5 col-lg-9 offset-2" name="Review section">
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
    </div>

@endsection