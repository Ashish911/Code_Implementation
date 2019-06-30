@extends ('layouts.usersidebar')


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
        <strong>Edit Profile</strong>
    </h5>

    <div class="card-body px-lg-5 pt-0">
        <form class="text-center " method="post" name="edit" action="{{route('UserDashboard.update',Auth::user()->id)}}" enctype="multipart/form-data">
            @csrf
            {{method_field('PUT')}}
            <div class="md-form mt-3">
                <input type="text" name="FullName" class="form-control" placeholder="Full name" value="{{Auth::user()->FullName}}">
            </div>
            <div class="row">
            <div class="col">
            <div class="md-form mt-3">
                <input type="text" name="Address" class="form-control" placeholder="Address" value="{{Auth::user()->Address}}">
            </div>
            </div>
            <div class="col">
            <div class="md-form mt-3">
                <input type="date" name="DOB" class="form-control" value="{{Auth::user()->DOB}}" required>
            </div>
            </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="md-form mt-3">
                        <input type="text" name="PhoneNo" class="form-control" placeholder="PhoneNo" value="{{Auth::user()->PhoneNo}}">
                    </div>
                </div>
                <div class="col">
                    <div class="md-form mt-3">
                        <input type="text" name="UserName" class="form-control" value="{{Auth::user()->UserName}}" required>
                    </div>
                </div>
            </div>
            <div class="md-form mt-3">
                <input type="email" class="form-control" name="email" placeholder="E-mail" value="{{Auth::user()->email}}" required>
            </div>
            <div class="md-form mt-3">
                <textarea id="materialContactFormMessage" class="form-control md-textarea" name="Profile_Description" placeholder="Description about Yourself" rows="3"></textarea>
            </div>
            @if(Auth::user()->is_artist == '1')
            @else
                <div class="md-form mt-3">
                    <input type="checkbox" name="is_artist"  value="TRUE">Become An Artist
                </div>
            @endif
            <div class="Image mt-3">
                <label class="label">Profile Image</label>
                <input type="file" name="Image" accept="image/*">
            </div>

            <!-- Send button -->
            <input class="btn btn-submit btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" value="Edit Profile">

        </form>
        <!-- Form -->

    </div>

</div>
</div>
</div>
@endsection