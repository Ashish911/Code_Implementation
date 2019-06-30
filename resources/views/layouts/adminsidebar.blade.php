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
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('AdminProfile')}}">
                <span>Admin Profile</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('AdminViewUsers') }}">
                <span>View Users</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('AdminViewArtists') }}">
                <span>View Artists</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('AdminViewTattoos')}}">
                <span>View Tattoos</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('AdminViewCategories')}}">
                <span>View Categories</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('AdminViewProducts')}}">
                <span>View Products</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('AdminViewReservations')}}">
                <span>View Artist Reservations</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('AdminViewBookings')}}">
                <span>View Bookings</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('AdminViewTattooTransaction')}}">
                <span>View Tattoo Transactions</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('AdminViewProductTransaction')}}">
                <span>View Product Transactions</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('ViewReview')}}">
                <span>View Reviews</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('AdminViewNewsletter')}}">
                <span>View NewsletterInfo</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('AdminViewContactUs')}}">
                <span>View ContactUsInfo </span></a>
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
    </ul>
    <div class="container-fluid">  @yield('content') </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/sb-admin.min.js')}}"></script>

</body>
</html>
