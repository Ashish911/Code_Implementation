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
<body>
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
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('UserProfile')}}">
                <span>User Profile</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('ViewBookings')}}">
                <span>View Bookings</span></a>
        </li>
        @yield('sidebar')

    </ul>
<div class="container-fluid">  @yield('content') </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/sb-admin.min.js')}}"></script>

</body>
</html>