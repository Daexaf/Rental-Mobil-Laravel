<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Rent A Care</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/fontawesome.css')}} ">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}} ">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.css')}} ">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <h2>Car Rental <em>Website</em></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item {{ Request::is('offers') ? 'active' : '' }}">
                            <a class="nav-link" href="#offer">Offers</a>
                        </li>
                        <li class="nav-item {{ Request::is('about-us') ? 'active' : '' }}">
                            <a class="nav-link" href="#about">About Us</a>
                        </li>
                        <!-- <li class="nav-item {{ Request::is('contact-us') ? 'active' : '' }}">
                            <a class="nav-link" href="#contact-us">Contact Us</a>
                        </li> -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/home') }}">Home</a>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
        <div class="owl-banner owl-carousel">
            <div class="banner-item-01">
                <div class="text-content">
                    <h4>Find your car today!</h4>
                    <h2>Lorem ipsum dolor sit amet</h2>
                    <a href="{{ route('admin.dashboard.index') }}" class="filled-button">Rent Now</a>
                </div>
            </div>
            <div class="banner-item-02">
                <div class="text-content">
                    <h4>Fugiat Aspernatur</h4>
                    <h2>Laboriosam reprehenderit ducimus</h2>
                    <a href="{{ route('admin.dashboard.index') }}" class="filled-button">Rent Now</a>
                </div>
            </div>
            <div class="banner-item-03">
                <div class="text-content">
                    <h4>Saepe Omnis</h4>
                    <h2>Quaerat suscipit unde minus dicta</h2>
                    <a href="{{ route('admin.dashboard.index') }}" class="filled-button">Rent Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Banner Ends Here -->

    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2 id="offer">Offers</h2>
                        <a href="{{ route('admin.dashboard.index') }}">view more <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-item">
                        <a href="offer.html"><img src="{{asset('frontend/assets/images/offer-1-370x270.jpg')}}" alt=""></a>
                        <div class="down-content">
                            <a href="offer.html">
                                <h4>Lorem ipsum dolor sit amet, consectetur</h4>
                            </a>
                            <h6><small>from</small> $120 <small>per weekend</small></h6>
                            <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                            <a href="{{ route('admin.dashboard.index') }}" class="filled-button">Rent Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="product-item">
                        <a href="offer.html"><img src="{{asset('frontend/assets/images/offer-2-370x270.jpg')}}" alt=""></a>
                        <div class="down-content">
                            <a href="offer.html">
                                <h4>Estorum aspernatur officiis accusamus</h4>
                            </a>
                            <h6><small>from</small> $150 <small>per weekend</small></h6>
                            <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                            <a href="{{ route('admin.dashboard.index') }}" class="filled-button">Rent Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="product-item">
                        <a href="offer.html"><img src="{{asset('frontend/assets/images/offer-3-370x270.jpg')}}" alt=""></a>
                        <div class="down-content">
                            <a href="offer.html">
                                <h4>Reiciendis ullam culpa optio providen</h4>
                            </a>
                            <h6><small>from</small> $150 <small>per weekend</small></h6>
                            <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                            <a href="{{ route('admin.dashboard.index') }}" class="filled-button">Rent Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="best-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2 id="about">About Us</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        <p>Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipisicing elit. Explicabo, esse consequatur alias repellat in excepturi inventore ad <a href="#">asperiores</a> tempora ipsa. Accusantium tenetur voluptate labore aperiam molestiae rerum excepturi minus in pariatur praesentium, corporis, aliquid dicta.</p>
                        <ul class="featured-list">
                            <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                            <li><a href="#">Consectetur an adipisicing elit</a></li>
                            <li><a href="#">It aquecorporis nulla aspernatur</a></li>
                            <li><a href="#">Corporis, omnis doloremque</a></li>
                        </ul>
                        <a href="about-us.html" class="filled-button">Read More</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="{{asset('frontend/assets/images/about-1-570x350.jpg')}} " alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <p>Copyright © 2020 Company Name - Template by: Human</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('frontend/vendor/jquery/jquery.min.js')}} "></script>
    <script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}} "></script>


    <!-- Additional Scripts -->
    <script src="{{asset('frontend/assets/js/custom.js')}} "></script>
    <script src="{{asset('frontend/assets/js/owl.js')}} "></script>
</body>

</html>