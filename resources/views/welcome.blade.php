@extends('layouts.Pagelayout')

@section('activeH','active')

@section('content')

    <style>
        
        .AboutUs{
            background-color: #0d0f11;
        }

        .Artist{
            background-color: #131619;
        }

        .Tattoos{
            background-color: #0d0f11;
        }

        .Img-welcome{
            height: 800px;
            background: url('assets/images/Tattoo1.jpg') ;
            background-size: cover;
            overflow: hidden;
            position: relative;
        }

        .texts{
            margin-top: 25%;
        }

        .innovate{
            background-color:#18181E  ;
            color: #ffe0bd;
            margin-left: 49%;
            transition: color 0.5s;
            border-radius: 10px;
            text-decoration: none;
        }

        .innovate:hover{
            background-color: white;
            color: black;
            text-decoration: none;
        }

        #ArtistBook{
            background: url('assets/images/skull.jpg') center center no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        .Newsletter{
            background: url('assets/images/smoking.jpg') center center no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        #TestimonialsI{
            background: url('assets/images/Tattoo1.jpg') center center no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

    </style>
<div class="Img-welcome">
    <div class="texts">
        <h1 class="text-center font-weight-bold text-light">Innovate your own Design</h1>
        <h2 class="text-center text-light">We'll transform any of your ideas into spectacular tattoo designs</h2>
        <h1 class="text-center font-weight-bold text-light">100% CUSTOM ARTWORK</h1>
    </div>
</div>
    
<div class="container-fluid py-3 AboutUs">
    <div class="row font-weight-bold text-center text-light">
        <div class="col-md-12">
            <h1>{{__('About Us')}}</h1>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-5 offset-1">
            <p class="text-light">Our mission is what drives us to do everything possible to expand human talent. We do that by giving fascinating classes to our students and sharpening their talent.<br> He have been doing this since 2001. Its already been 18 years and we are countinuing our legacy and creating great talents....</p>
        </div>
        <div class="col-md-4 offset-1">
            <img src="{{asset('assets/images/Tattoo0.jpg')}}" alt="AboutUs" class="img-fluid ">
        </div>
    </div>
</div>

<section id="ArtistBook" class="py-5">
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3 class="display-4 font-weight-bold text-light mb-0 pt-md-5 pt-5 wow fadeInUp">All Our Artists are Available for Booking</h3>
                    <h5 class="text-light pt-md-5 pt-sm-2 pt-5 pb-md-5 pb-sm-3 pb-5 wow fadeInUp" data-wow-delay="0.2s">You want a custom artwork done?
                        Here you can easily book any artist for any time.
                        There are some of the artist description given below. For more information check it out now!</h5>
                @guest
                    <div class="wow fadeInUp" data-wow-delay="0.4s">
                        <a class="btn btn-success btn-rounded" href="{{ route('Artists') }}">Learn more</a>
                    </div>
                @else
                    <div class="wow fadeInUp" data-wow-delay="0.4s">
                        <a class="btn btn-success btn-rounded" href="{{ route('register') }}">Sign up Now!</a>
                        <a class="btn btn-success btn-rounded" href="{{ route('Artists') }}">Learn more</a>
                    </div>
                @endguest
            </div>
        </div>
    </div>
</section>


<div class="Artist">
    <div class="container-fluid ">
        <div class="container">
            <h2 class="h1-responsive font-weight-bold text-center pt-5 wow fadeIn">Book Artists</h2>
            <div class="row wow fadeInRight">
                <!-- Block2 -->
                @foreach($artist as $artists)
                    <div class="col-lg-4 col-md-4 ezpz">
                        <div class="Thumbnail mb-3">
                            <img src="{{asset($artists->Artist_Image)}}" alt="{{$artists->FullName}}" class="img-fluid">
                        </div>
                        <div class="blog-column1">
                            <h3 class="font-weight-bold text-center mb-3">{{$artists->FullName}}</h3>
                            <p class="dark-grey-text text-center">${{$artists->Address}} </p>
                            @guest
                                <button type="submit" class="btn btn-success btn-md" disabled>Buy Now</button>
                                <p>(Note: You Need to Login to be able to buy tattoo)</p>
                            @else
                                <a class="btn btn-success" href="{{route('Buy.edit',['id'=>$artists->id])}}">Buy Now</a>
                            @endguest
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


<div class="container-fluid Newsletter">
<div class="container pt-5 pb-5 ">
    <div class="text-center">
        <h2>Newsletter</h2>
        <h5 class="text-body">Here you can subscribe to our newsletter. By doing so you will get news and updates from us.</h5>
    </div>
    <form method="post" action="{{route('Newsletter.store')}}">
        @csrf
        <div class="form-row justify-content-center">
            <div class="col-auto">
                <input type="email" class="form-control" name="Email" placeholder="Enter your Email" required>
            </div>
            <div class="col-auto">
                <input type="submit" class="btn btn-rounded bg-success text-light" title="subscribe" name="subscribe" value="subscribe"/>
            </div>
        </div>
    </form>
</div>
</div>



<div class="Tattoos">
    <div class="container-fluid ">
        <div class="container">
            <h2 class="h1-responsive font-weight-bold text-center pt-5 wow fadeIn">Shop Tattoos</h2>
            <div class="row wow fadeInRight">
            <!-- Block2 -->
            @foreach($Tattoo as $tattoo)
                    <div class="col-lg-4 col-md-4 ezpz">
                        <div class="Thumbnail mb-3">
                            <img src="{{asset($tattoo->Tattoo_Image)}}" alt="{{$tattoo->Tattoo_Name}}" class="img-fluid">
                        </div>
                        <div class="blog-column1">
                            <h3 class="font-weight-bold text-center mb-3">{{$tattoo->Tattoo_Name}}</h3>
                                <p class="dark-grey-text text-center">${{$tattoo->Price}} </p>
                            @guest
                                <button type="submit" class="btn btn-success btn-md" disabled>Buy Now</button>
                                <p>(Note: You Need to Login to be able to buy tattoo)</p>
                            @else
                                <a class="btn btn-success" href="{{route('Buy.edit',['id'=>$tattoo->id])}}">Buy Now</a>
                            @endguest
                        </div>
                    </div>
             @endforeach
            </div>
        </div>
    </div>
</div>

    <div id="TestimonialsI">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 wow fadeInUp">
                    <h2 class="pt-2 text-center text-light font-weight-bold">Testimonials</h2>
                    <div class="thing" id="wrapper">
                        @foreach($Review as $review)
                        <div class="h5 font-weight-normal one-slide mx-auto">
                            <div class="testimonial w-100 text-center text-light justify-content-center flex-wrap align-items-center">
                                <div class="message text-center blockquote w-100">{{$review->Review_Comment}}</div>
                                <?php $user = App\User::findorfail($review->UserId)?>
                                <div class="blockquote-footer text-light w-100">{{$user->FullName}}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection