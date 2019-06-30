@extends('layouts.usersidebar')

@section('sidebar')
    @foreach($Users as $user)
        @if($user->id == Auth::user()->id)
            @if($user->is_artist == '1')
                <li class="nav-item">
                    <a class="nav-link" href="{{route('AddTattoos.index')}}">
                        <span>Tattoos</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=href="{{ route('logout') }}" onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>{{ __('Logout') }}</span></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href=href="{{ route('logout') }}" onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>{{ __('Logout') }}</span></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                </li>
            @endif
        @endif
    @endforeach
@endsection

@section('content')

    <style>
        .card{
            width: 500px;
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

                <h5 class="card-header text-center py-4">
                    <strong>Add Tattoo</strong>
                </h5>

                <div class="card-body px-lg-5 pt-0">
                    <form method="post" name="add" action="{{route('AddTattoos.store',Auth::user()->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="md-form mt-3">
                                    <input type="text" name="Tattoo_Name" class="form-control" placeholder="Tattoo Name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="md-form mt-3">
                                    <input type="text" name="Tattoo_Price" class="form-control" placeholder="Tattoo Price" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="md-form mt-3">
                                    <input type="text" name="Tattoo_Quantity" class="form-control" placeholder="Quantity" required>
                                </div>
                            </div>
                        </div>
                        <div class="md-form mt-3">
                            <textarea id="materialContactFormMessage" class="form-control md-textarea" name="Tattoo_Detail" placeholder="Tattoo Description" rows="3"></textarea>
                        </div>
                        <div class="Image mt-3">
                            <label class="label">Tattoo Image</label>
                            <input type="file" name="image" accept="image/*">
                        </div>

                        <!-- Send button -->
                        <input class="btn btn-submit btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" value="Add Tattoo">

                    </form>
                    <!-- Form -->

                </div>

            </div>
        </div>
    </div>

@endsection