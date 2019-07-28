<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Royal Tattoo Service</title>

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="{{asset('css/sb-admin.css')}}">

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">

    <script src="https://kit.fontawesome.com/5b14d241b3.js"></script>

</head>
<body onload="myFunction()">

<div id="loading"></div>

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="{{route('UserDashboard.index')}}">Royal Tattoo Service</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>

    </ul>

</nav>

<div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="{{route('UserDashboard.index')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('UserProfile')}}">
                <i class="fas fa-fw fa-id-card"></i>
                <span>User Profile</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('ViewBookings')}}">
                <i class="fas fa-fw fa-eye"></i>
                <span>View Bookings</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('TattooTransaction')}}">
                <i class="fas fa-fw fa-eye"></i>
                <span>View Tattoo Transaction</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('ProductTransaction')}}">
                <i class="fas fa-fw fa-eye"></i>
                <span>View Product Transaction</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('AddTattoos.index')}}">
                <i class="fas fa-fw fa-paint-brush"></i>
                <span>Tattoos</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('welcome')}}">
                <i class="fas fa-fw fa-home"></i>
                <span>Back to home</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href=href="{{ route('logout') }}" onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                <i class="fas fa-fw fa-sign-out-alt"></i>
                <span>{{ __('Logout') }}</span></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

        </li>

    </ul>
<div class="container-fluid">  @yield('content') </div>

</div>

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

<script>
    var preloader = document.getElementById("loading");

    function myFunction(){
        preloader.style.display = 'none';
    };
</script>

<!-- Bootstrap core JavaScript-->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/sb-admin.min.js')}}"></script>

</body>
</html>