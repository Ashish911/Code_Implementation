@extends('layouts.usersidebar')

<style type="text/css" media="print">
        body{
            visibility: hidden;
        }
        #bill{
            margin-top: 10%;
            margin-right: 10%;
            visibility: visible;
        }
</style>

@section('content')
<div class="container-fluid">
<div class="container">
    <div id="bill">
        <h2 class="text-center mt-5"> Tattoo Invoice</h2>
        <div class="row offset-3">
            <div class="col-6">
            <p>
                <label>Username</label>
            </p>
            </div>
            <div class="col-6">
                <label>{{Auth::user()->UserName}}</label>
            </div>
            <div class="col-6">
                <p>
                    <label>E-Mail Address</label>
                </p>
            </div>
            <div class="col-6">
                <label>{{Auth::user()->email}}</label>
            </div>
            <div class="col-6">
                <p>
                    <label>Delivery Location</label>
                </p>
            </div>
            <div class="col-6">
                <label>{{$buy->Location}}</label>
            </div>
            <div class="col-6">
                <p>
                    <label>Contact No</label>
                </p>
            </div>
            <div class="col-6">
                <label>{{$buy->Contact}}</label>
            </div>
            <div class="col-6">
                <p>
                    <label>Tattoo Name</label>
                </p>
            </div>
            <div class="col-6">
                <?php $Tattoo = App\Tattoo::findorfail($buy->TattooId) ?>
                <label>{{$Tattoo->Tattoo_Name}}</label>
            </div>
            <div class="col-6">
                <p>
                    <label>Tattoo Image</label>
                </p>
            </div>
            <div class="col-6">
                <?php $Tattoo = App\Tattoo::findorfail($buy->TattooId) ?>
                    <td>
                        <img src="{{asset($Tattoo->Tattoo_Image)}}" alt="{{$Tattoo->Tattoo_Name}}" height="100">
                    </td>
            </div>
            <div class="col-6">
                <p>
                    <label>Quantity</label>
                </p>
            </div>
            <div class="col-6">
                <label>{{$buy->Quantity}}</label>
            </div>
            <div class="col-6">
                <p>
                    <label>Price</label>
                </p>
            </div>
            <div class="col-6">
                <label>{{$buy->Price}}</label>
            </div>
            <div class="col-6">
                <p>
                    <label>Total</label>
                </p>
            </div>
            <div class="col-6">
                <label>{{$buy->Total}}</label>
            </div>
        </div>
    </div>
    <a class="btn btn-outline-success offset-5" onclick="window.print();return false;" id="print"><i class="fa fa-print"></i>Print </a>
</div>
</div>
@endsection