@extends('layouts.adminsidebar')

@section('content')
    <h2 class="mt-3 ml-5">Dashboard</h2>
    <div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Users</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{App\User::where(['UserType' => 'User'])->count()}}</div>
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
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Artists</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{App\artist::where(['id' => Auth::user()->id])->count()}}</div>
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
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tattoos</div>
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
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Products</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{App\products::where(['id' => Auth::user()->id])->count()}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-user fa-3x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<p class="text-center my-5 py-5"> Welcome to the admin dashboard <b class="text-danger">{{ Auth::user()->UserName }}</b></p>
@endsection
