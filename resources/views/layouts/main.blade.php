<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Mardzi|webmall</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png')}}">
		
		<!-- all css here -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/pe-icon-7-stroke.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/slinky.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/bundle.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">
        <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- header start -->
        {{-- @include('layouts.header')
        <!-- header end -->    
        @include('layouts.slider')
        --}}
		<div class="header-top-wrapper-2 border-bottom-2">
            <div class="header-info-wrapper pl-200 pr-200">
                <div class="header-contact-info">
                    <ul>
                        <li><i class="pe-7s-call"></i> +011 2231 4545</li>
                        <li><i class="pe-7s-mail"></i> <a href="#">company@domail.info</a></li>
                    </ul>
                </div>
                <div class="electronics-login-register">
                    <ul>
                        <li><a href="{{route('home')}}"><i class="pe-7s-users"></i>Home</a></li>
                        <li><a href="#"><i class="pe-7s-users"></i>My Account</a></li>
                        <li><a data-toggle="modal" data-target="#exampleCompare" href="#"><i
                                    class="pe-7s-repeat"></i>Compare</a></li>
                        {{-- <li><a href="wishlist.html"><i class="pe-7s-like"></i>Wishlist</a></li> --}}

                        @auth
                        
                        <li>
                                <form action=" {{ url('/logout') }} " method="POST">
                                    @csrf
                                    <input type="submit" value="Logout" />
                                </form>
                        </li>
                            @else

                            <li>
                                <a href="{{url('/login')}}">Login</a>
                            </li>
                            <li>
                                <a href="{{url('/register')}}">Sign Up</a>
                            </li>
                        @endauth

                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom pt-40 pb-30 clearfix">
            <div class="header-bottom-wrapper pr-200 pl-200">
                <div class="logo-3">
                    <a href="{{route('home')}}">
                        <img src="/assets/img/logo/logo-3.png" alt="">
                    </a>
                </div>
                <div class="categories-search-wrapper">

                    <div class="categories-wrapper">
                        {{-- <form action="{{route('products.search')}}" method="GET"> --}}
                        <form action="" method="GET">
                            <input name="query" placeholder="Enter Your key word" type="text">
                            <button type="submit"> Search </button>
                        </form>
                    </div>
                </div>
                <div class="trace-cart-wrapper">
                    <div class="trace same-style">
                        <div class="same-style-icon">
                            <a href="#"><i class="pe-7s-plane"></i></a>
                        </div>
                        <div class="same-style-text">
                            <a href="#">Product <br>trace</a>
                        </div>
                    </div>
                    <div class="categories-cart same-style">
                        <div class="same-style-icon">
                            <a href="{{ route('cart.list') }}"><i class="pe-7s-cart"></i></a>
                        </div>
                        <div class="same-style-text">
                            <a href="{{ route('cart.list') }}">My Cart <br>

                                @auth
                                {{Cart::session(auth()->id())->getContent()->count()}}
                                @else
                                0
                                @endauth

                                Item</a>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu-area electro-menu d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <ul class="menu-overflow">
                                <li><a href="{{url('/')}}">HOME</a>

                                </li>
                                <li><a href="#">BLOG</a>

                                </li>
                                <li><a href="#"> Contact </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->


    @if(session('message'))

        <div class="alert alert-success text-center" role="alert">
            <strong>{{ session('message') }}</strong>
        </div>
    @endif

    @if(session('error'))

        <div class="alert alert-danger text-center" role="alert">
            <strong>{{session('error')}} </strong>
        </div>
    @endif

        {{-- display success message --}}
        @if(session()->has('message'))
            <div class="alert alert-success text-center" role="alert">
               {{session('message')}}
            </div>
        @endif

        {{-- display error message --}}

        @if(session()->has('error'))
        <div class="alert alert-danger text-center" role="alert">
            {{session('error')}}
        </div>
        @endif
		
		
		@yield('content')
		
		
		
		
		 {{-- footer start --}}
        @include('layouts.footer')

		<!-- all js here -->
        <script src="{{ asset('assets/js/vendor/jquery-1.12.0.min.js')}}"></script>
        <script src="{{ asset('assets/js/popper.js')}}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{ asset('assets/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.counterup.min.js')}}"></script>
        <script src="{{ asset('assets/js/waypoints.min.js')}}"></script>
        <script src="{{ asset('assets/js/ajax-mail.js')}}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('assets/js/plugins.js')}}"></script>
        <script src="{{ asset('assets/js/main.js')}}"></script>
    </body>
</html>
