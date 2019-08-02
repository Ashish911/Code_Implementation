@extends('layouts.Pagelayout')

@section('content')
    <style>
        .card{
            width: 400px;
        }
        .banner {
            height: 200px;
        }
        .dbd{
            width: 1200px;
        }
    </style>

    <div class="banner">
        <img style="width: 100%; height: 1000px; " src={{asset('assets/images/leaves.jpg')}}>
    </div>

    <div class="container-fluid">
        <div class="container">

            <div class="card mt-5">

                <div class="card-body px-lg-5 pt-0">
                    <form method="POST" action="{{route('Booking.store',['id'=>$artist->id])}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-5">
                            <div class="col-12">
                                <label>Artist Name</label>
                            </div>
                            <div class="col-12">
                                <input readonly name="FullName" id="Price" value="{{$artist->FullName}}" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label>Artist Address</label>
                            </div>
                            <div class="col-12">
                                <input readonly name="Address" id="Price" value="{{$artist->Address}}" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label>Phone No</label>
                            </div>
                            <div class="col-12">
                                <input readonly name="Phone No" id="Price" value="{{$artist->PhoneNo}}" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="form-group col-12">
                                <label>Day</label>
                            </div>
                            <div class="col-12">
                                <select name="Days" class="form-control" required>
                                    @foreach ($Reservation as $item)
                                        @if($artist->id == $item->ArtistId)
                                            @if($item->Max_Bookings == '0')
                                                <option>No Booking Available</option>
                                            @else
                                                <option value="{{$item->Day}}">{{$item->Day}}</option>
                                            @endif
                                        @elseif($artist->id !== $item->ArtistId)
                                        <option>No Booking Available</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="form-group col-12">
                                <label>Quantity</label>
                            </div>
                            <div class="col-12">
                                <input type="text" name="quantity" class="form-control" readonly value="1">
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
    <div class="container-fluid mt-2 mb-2">
        <div class="container">
            <div class="card dbd">
            <div class="row">
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
                        <div class="mt-2 offset-2 mb-2">
                            <input type="submit" class="btn btn-success" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>

@endsection