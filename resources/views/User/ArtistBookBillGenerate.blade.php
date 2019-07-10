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
                <h2 class="text-center mt-5"> Artist Invoice</h2>
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
                            <label>Artist Name</label>
                        </p>
                    </div>
                    <div class="col-6">
                        <?php $Artist = App\artist::findorfail($Booking->ArtistId) ?>
                        <label>{{$Artist->FullName}}</label>
                    </div>
                    <div class="col-6">
                        <p>
                            <label>Artist Image</label>
                        </p>
                    </div>
                    <div class="col-6">
                        <?php $Artist = App\artist::findorfail($Booking->ArtistId) ?>
                        <td>
                            <img src="{{asset($Artist->Artist_Image)}}" alt="{{$Artist->FullName}}" height="100">
                        </td>
                    </div>
                    <div class="col-6">
                        <p>
                            <label>Day</label>
                        </p>
                    </div>
                    <div class="col-6">
                        <label>{{$Booking->Day}}</label>
                    </div>
                </div>
            </div>
            <a class="btn btn-outline-success offset-5" onclick="window.print();return false;" id="print"><i class="fa fa-print"></i>Print </a>
        </div>
    </div>
@endsection