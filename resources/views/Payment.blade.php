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
        <img style="width: 100%; height: 1200px; " src={{asset('assets/images/Ocean.jpg')}}>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="card mt-5">

                <div class="card-body px-lg-5 pt-0">
                    <form class="text-center " method="post" name="edit" action="{{route('Buy.store',['id'=>$tattoo->id])}}">
                        @csrf
                        <div class="row mt-5">
                            <div class="col-12">
                                <label>Tattoo Name</label>
                            </div>
                            <div class="col-12">
                                <input readonly name="Name" value="{{$tattoo->Tattoo_Name}}" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label>Tattoo Detail</label>
                            </div>
                            <div class="col-12">
                                <input readonly name="Detail" value="{{$tattoo->Tattoo_Detail}}" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label>Price</label>
                            </div>
                            <div class="col-12">
                                <input readonly name="Price" id="PPRICE" value="{{$tattoo->Price}}" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label>Payment Method</label>
                            </div>
                            <div class="col-12">
                                <select class="form-control" required="required" name="Payment">
                                    <option value=""> Select payment method </option>
                                    <option value="Esewa"> Esewa </option>
                                    <option value="Paypal"> Paypal </option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label>Location</label>
                            </div>
                            <div class="col-12">
                                <input class="form-control" type="text" name="Location" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label>Quantity</label>
                            </div>
                            <div class="col-12">
                                <input class="form-control" name="quantity" id="QTY" onKeyUp="multiply()"onMouseUp="multiply()" onKeyDown="return false" type="number" min="1" max="{{$tattoo->Quantity}}" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label>Contact Info</label>
                            </div>
                            <div class="col-12">
                                <input class="form-control" name="Contact" type="text" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label>Total</label>
                            </div>
                            <div class="col-12">
                                <input class="form-control" name="Total" id="TOTAL" type="number" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <input class="btn btn-outline-success btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" value="Buy Now">
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
                    <h2 class="text-center font-weight-bold">Reviews</h2>
                    <div class="thing" id="wrapper">
                    @foreach($Review as $review)
                        <div class="mt-4">
                            <div class="message text-center blockquote w-100">{{$review->Review_Comment}}</div>
                            <?php $user = App\User::findorfail($review->UserId)?>
                            <div class="blockquote-footer text-body text-center w-100">{{$user->FullName}}</div>
                        </div>
                    @endforeach
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <form method="post" name="edit" action="{{route('TattooReview.store',['id'=>$tattoo->id])}}" >
                        @csrf
                        <div class="row mt-3">
                            <div class="col-lg-9 col-md-9 offset-2">
                                <div class="input-group">
                                    <textarea class="form-control" type="text" name="Comment" placeholder="Write a review about this product" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2 mb-2 offset-2">
                            <input type="submit" class="btn btn-success" value="Submit">
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function multiply()
        {
            a = document.getElementById('QTY').value;
            b = document.getElementById('PPRICE').value;
            c = a * b;

            document.getElementById('TOTAL').value = c;
        }
    </script>

@endsection