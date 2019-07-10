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
                    <form class="text-center " method="post" name="edit" action="{{route('ProductBuy.store',['id'=>$product->id])}}">
                        @csrf
                        <div class="row mt-5">
                            <div class="col-6">
                                <label>Product Name</label>
                            </div>
                            <div class="col-6">
                                <input readonly name="Price" id="Price" value="{{$product->Product_Name}}" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <label>Product Detail</label>
                            </div>
                            <div class="col-6">
                                <input readonly name="Price" id="Price" value="{{$product->Product_Detail}}" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <label>Price</label>
                            </div>
                            <div class="col-6">
                                <input readonly name="Price" id="Price" value="{{$product->Price}}" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <label>Payment Method</label>
                            </div>
                            <div class="col-6">
                                <select class="form-control" required="required" name="Payment">
                                    <option value=""> Select payment method </option>
                                    <option value="Esewa"> Esewa </option>
                                    <option value="Paypal"> Paypal </option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <label>Location</label>
                            </div>
                            <div class="col-6">
                                <input class="form-control" type="text" name="Location" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <label>Quantity</label>
                            </div>
                            <div class="col-6">
                                <input class="form-control" name="quantity" id="Quantity" onKeyUp="multiply()" type="number" min="1" max="{{$product->Quantity}}" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <label>Contact Info</label>
                            </div>
                            <div class="col-6">
                                <input class="form-control" name="Contact" type="text" required>
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
    <div class="container-fluid">
    <div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <form method="post" name="edit" action="{{route('ProductReview.store',['id'=>$product->id])}}" >
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

    <script>
        function multiply()
        {
            a = Number(document.getElementById('Quantity').value);
            b = Number(document.getElementById('Price').value);
            c = a * b;

            document.getElementById('Total').value = c;
        }
    </script>

@endsection