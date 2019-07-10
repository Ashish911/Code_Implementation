@extends('layouts.usersidebar')

@section('content')

    <h2 class="mt-3 ml-5">Dashboard</h2>
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Bookings</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{App\Booking::where(['UserId' => Auth::user()->id])->count()}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-user fa-3x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">My Tattoos</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{App\Tattoo::where(['User_Id' => Auth::user()->id])->count()}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-user fa-3x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tattoos Bought</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{App\buy::where(['UserId' => Auth::user()->id])->count()}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-paint-brush fa-3x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Products bought</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{App\buy_products::where(['UserId' => Auth::user()->id])->count()}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-user fa-3x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h2 class="text-center py-2">My Tattoos Sold</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12 table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Tattoo Name</th>
                        <th>Tattoo Image</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Buyer Name</th>
                        <th>Buyer Email</th>

                    </tr>
                    </thead>
                    <tbody>
                    @if(count($Buy)>0)
                        @foreach($Buy as $item)
                            <?php $Tattoo = App\Tattoo::findorfail($item->TattooId) ?>
                            @if($item->UserId !== Auth::user()->id && $Tattoo->User_Id == Auth::user()->id )
                                <tr>
                                    <?php $Tattoo = App\Tattoo::findorfail($item->TattooId) ?>
                                    <td>{{$Tattoo->Tattoo_Name}}</td>
                                    <td>
                                        <img src="{{asset($Tattoo->Tattoo_Image)}}" alt="{{$Tattoo->Tattoo_Name}}" height="100">
                                    </td>
                                    <td>{{$Tattoo->Price}}</td>
                                    <td>{{$item->Quantity}}</td>
                                    <?php $User = App\User::findorfail($item->UserId) ?>
                                    <td>{{$User->FullName}}</td>
                                    <td>{{$User->email}}</td>
                                </tr>
                                @else
                            @endif
                        @endforeach
                        @else
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection