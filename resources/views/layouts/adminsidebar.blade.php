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

    <a class="navbar-brand mr-1" href="{{route('AdminDashboard')}}">Royal Tattoo Service</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>

    </ul>

</nav>

<div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="{{route('AdminDashboard')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('AdminProfile')}}">
                <i class="fas fa-fw fa-id-card"></i>
                <span>Admin Profile</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('AdminViewUsers') }}">
                <i class="fa fa-fw fa-users"></i>
                <span>View Users</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('AdminViewArtists') }}">
                <i class="fa fa-fw fa-users"></i>
                <span>View Artists</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('AdminViewTattoos')}}">
                <i class="fa fa-fw fa-paint-brush"></i>
                <span>View Tattoos</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('AdminViewCategories')}}">
                <i class="fa fa-fw fa-tags"></i>
                <span>View Categories</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('AdminViewProducts')}}">
                <i class="fa fa-fw fa-shopping-cart"></i>
                <span>View Products</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('AdminViewReservations')}}">
                <i class="fa fa-fw fa-book-open"></i>
                <span>View Artist Reservations</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('AdminViewBookings')}}">
                <i class="fas fa-fw fa-eye"></i>
                <span>View Bookings</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('AdminViewTattooTransaction')}}">
                <i class="fas fa-fw fa-eye"></i>
                <span>View Tattoo Transactions</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('AdminViewProductTransaction')}}">
                <i class="fas fa-fw fa-eye"></i>
                <span>View Product Transactions</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('ViewReview')}}">
                <i class="fas fa-fw fa-eye"></i>
                <span>View Reviews</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('AdminViewNewsletter')}}">
                <i class="fas fa-fw fa-eye"></i>
                <span>View NewsletterInfo</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('AdminViewContactUs')}}">
                <i class="fas fa-fw fa-eye"></i>
                <span>View ContactUsInfo </span></a>
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
