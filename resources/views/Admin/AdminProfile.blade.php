@extends('layouts.adminsidebar')

<style>
    body{
        background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    }
    .emp-profile{
        padding: 3%;
        margin-top: 3%;
        margin-bottom: 3%;
        border-radius: 0.5rem;
        background: #fff;
    }
    .profile-img{
        text-align: center;
    }
    .profile-img img{
        border-radius: 20%;
        width: 70%;
        height: 30%;
    }

    .profile-head h5{
        color: #333;
    }
    .profile-head h6{
        color: #0062cc;
    }
    .proile-rating span{
        color: #495057;
        font-size: 15px;
        font-weight: 600;
    }
    .profile-head .nav-tabs{
        margin-bottom:5%;
    }
    .profile-head .nav-tabs .nav-link{
        font-weight:600;
        border: none;
    }
    .profile-head .nav-tabs .nav-link.active{
        border: none;
        border-bottom:2px solid #0062cc;
    }
    .profile-work p{
        font-size: 12px;
        color: #818182;
        font-weight: 600;
        margin-top: 10%;
    }
    .profile-work a{
        text-decoration: none;
        color: #495057;
        font-weight: 600;
        font-size: 14px;
    }
    .profile-work ul{
        list-style: none;
    }
    .profile-tab label{
        font-weight: 600;
    }
    .profile-tab p{
        font-weight: 600;
        color: #0062cc;
    }
</style>

@section('content')


    <div class="container emp-profile">
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    @if (File::exists(Auth::user()->Profile_Image))
                        <div class="profile-img">
                            <img src="{{asset(Auth::user()->Profile_Image)}}" alt="{{Auth::user()->FullName}}" width="100%" />
                        </div>
                    @else
                        <div class="profile-img">
                            <img src="{{asset('assets/images/blank-profile-picture-973460_1280.png')}}" alt="Blank"/>
                        </div>
                    @endif


                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                        <h5 class="pb-3">
                            {{Auth::user()->FullName}}
                        </h5>
                        <h6 class="pb-3">
                            {{Auth::user()->email}}
                        </h6>

                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                            </li>
                        </ul>

                    </div>
                </div>


            </div>
            <div class="row">
                <div class="col-md-8 offset-4">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>FullName</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{Auth::user()->FullName}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Address</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{Auth::user()->Address}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{Auth::user()->email}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>UserName</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{Auth::user()->UserName}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Phone</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{Auth::user()->PhoneNo}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Date of Birth</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{Auth::user()->DOB}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Description</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{Auth::user()->Profile_Description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 offset-4">
                    <a class="btn btn-outline-primary" href="{{route('AdminDashboard.edit',Auth::user()->id)}}">Edit Profile</a>
                </div>
            </div>
        </form>
    </div>
@endsection