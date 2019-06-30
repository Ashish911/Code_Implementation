@extends('layouts.usersidebar')

@section('content')

    <h2 class="text-center py-2">Product Transaction</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12 table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Product Image</th>
                        <th>User Location</th>
                        <th>User Contact</th>
                        <th>Payment Method</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>

                    </tr>
                    </thead>
                    <tbody>
                    @if(count($buyP)>0)
                        @foreach($buyP as $buys)
                            @if($buys->UserId == Auth::user()->id)
                                <tr>
                                    <?php $Product = App\products::findorfail($buys->ProductId) ?>
                                    <td>{{$Product->Product_Name}}</td>
                                    <td>
                                        <img src="{{asset($Product->Product_Image)}}" alt="{{$Tattoo->Product_Name}}" height="100">
                                    </td>
                                    <td>{{$buys->Location}}</td>
                                    <td>{{$buys->Contact}}</td>
                                    <td>{{$buys->PaymentMethod}}</td>
                                    <td>{{$buys->Price}}</td>
                                    <td>{{$buys->Quantity}}</td>
                                    <td>{{$buys->Total}}</td>
                                </tr>
                            @endif
                        @endforeach
                    @else
                        <p>There are No Transaction to show</p>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection