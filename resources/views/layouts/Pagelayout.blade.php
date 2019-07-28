<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Royal Tattoo Service</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/slick.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/slick-theme.css')}}/"/>

    <!-- Styles -->
    <style>


        .navbar {
            background-color: #18181E ;
        }

        a{
            color: #DEC79B;
        }

        a:hover{
            color: #E7DFDD;
        }


        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        footer{
            background-color: #18181E ;
        }

        .page-footer .footer-copyright{
            color: #DEC79B;
        }

        h5, p{
            color: #DEC79B;
        }
    </style>
</head>
<body onload="myFunction()">

<div id="loading"></div>

<div class="mynav">
    <nav class="navbar navbar-expand-lg navbar-dark ">
        <a class="navbar-brand" href="{{route('welcome')}}">Royal Tattoo Service</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ml-3">
                    <a class="nav-link @yield('activeH')" href="{{route('welcome')}}">HOME</a>
                </li>
                <li class="nav-item ml-3 ">
                    <a class="nav-link @yield('activeT')" href="{{route('Tattoos')}}">TATTOOS</a>
                </li>
                <li class="nav-item ml-3 ">
                    <a class="nav-link @yield('activeP')" href="{{route('Products')}}">PRODUCTS</a>
                </li>
                <li class="nav-item ml-3 ">
                    <a class="nav-link @yield('activeAr')" href="{{route('Artists')}}">ARTISTS</a>
                </li>
                <li class="nav-item ml-3 ">
                    <a class="nav-link @yield('activeC')" href="{{route('ContactUs')}}">CONTACTUS</a>
                </li>
                <li class="nav-item ml-3 ">
                    <a class="nav-link @yield('activeHe')" href="{{route('Help')}}">HELP</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item ml-3">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item ml-1 mr-1">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('REGISTER') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false" style="cursor:pointer;">{{Auth::user()->FullName}}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('UserDashboard.index',Auth::user()->id) }}";>{{ __('User Dashboard')}}</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>
</div>

<div>
    <main class="Content">
        @yield('content')
    </main>
</div>

<!--Footer-->
<footer class="page-footer font-small pt-4 wow fadeInUp delay-0s" >
    <div class="container text-center text-white text-md-left">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Royal Tattoo Service</h5>
                <p>We help to create great talents and enlighten your talent.</p>
            </div>
            <hr class="clearfix w-100 d-md-none">
            <div class="col-md-3 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="{{ url('/AboutUs') }}">AboutUs</a>
                    </li>
                    <li>
                        <a href="{{ url('/Tattoos') }}">Tattoos</a>
                    </li>
                    <li>
                        <a href="{{ url('/Artists') }}">Artists</a>
                    </li>
                    <li>
                        <a href=href="{{route('login')}}">Login</a>
                    </li>
                </ul>
            </div>
            <hr class="clearfix w-100 d-md-none">
            <div class="col-md-3 mx-auto">
                <h5 class="font-weight-bold text-uppercase ml-3 mt-3 mb-4">Contact</h5>
                <ul class="list-unstyled">
                    <p><i class="fa fa-home mr-3"></i>RTS, RTS 10012, UK</p>
                    <p><i class="fa fa-envelope mr-3"></i>RTS@gmail.com</p>
                    <p><i class="fa fa-phone mr-3"></i> + 44 234 567 88</p>
                </ul>
            </div>
            <div class="Social">
                <h5 class="font-weight-bold text-uppercase ml-3 mt-3 mb-4"> Follow Us On</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="https://www.facebook.com" class="btn fa fa-facebook"></a>
                        <a href="https://twitter.com" class="btn fa fa-twitter"></a>
                        <a href="https://plus.google.com" class="btn fa fa-google"></a>
                        <a href="https://www.instagram.com" class="btn fa fa-instagram"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright text-center text-light py-1">Royal Tattoo Service © 2019 Copyright</div>
</footer>

<!--Scripts-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/slick.min.js')}}"></script>
<script>
    var preloader = document.getElementById("loading");

    function myFunction(){
        preloader.style.display = 'none';
    };
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('.thing').slick({
            dots: false,
            arrows: false,
            autoplay: true,
            autoplaySpeed:1000
        });
    });
</script>
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5d0fc5f936eab9721118d3a8/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
</body>
</html>
