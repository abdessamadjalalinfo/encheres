<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Auction</title>

    <link rel="stylesheet" href="{{asset("/assets/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("/assets/css/all.min.css")}}">
    <link rel="stylesheet" href="{{asset("/assets/css/animate.css")}}">
    <link rel="stylesheet" href="{{asset("/assets/css/nice-select.css")}}">
    <link rel="stylesheet" href="{{asset("/assets/css/owl.min.css")}}">
    <link rel="stylesheet" href="{{asset("/assets/css/magnific-popup.css")}}">
    <link rel="stylesheet" href="{{asset("/assets/css/flaticon.css")}}">
    <link rel="stylesheet" href="{{asset("/assets/css/jquery-ui.min.css")}}">
    <link rel="stylesheet" href="{{asset("/assets/css/main.css")}}">
    <link rel="shortcut icon" href="{{asset("assets/images/favicon.png")}}" type="image/x-icon">
    @yield('stylesheets')
</head>

<body>
    <!--============= ScrollToTop Section Starts Here =============-->
    <div class="overlayer" id="overlayer">
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>
    <a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
    <div class="overlay"></div>
    <!--============= ScrollToTop Section Ends Here =============-->
<style>
    .custom-button {
    color: #ffffff;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    border-radius: 30px;
    font-weight: 500;
    text-transform: uppercase;
    padding: 12px 30px 10px;
    font-size: 18px;
    background: -moz-linear-gradient(90deg, #ee4730 0%, #cf031c  100%);
    background: -ms-linear-gradient(90deg, #cf031c  0%,#cf031c 100%);
    background: -webkit-linear-gradient(
90deg, #ee4730 0%, #cf031c 100%);
    box-shadow: -1.04px 4.891px 20px 0px rgb(69 49 183 / 50%);
    font-family: "Roboto", sans-serif;
}
    .header-bottom.active {
    background: #9b9b9b;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 99;
    animation-name: fadeInUp;
    animation-duration: 1s;
}
</style>

    <!--============= Header Section Starts Here =============-->
    <header style='background:#9b9b9b'>
        <div class="header-top">
            <div class="container">
                <div class="header-top-wrapper">
                    <ul class="customer-support">
                        <li>
                            <a href="#0" class="mr-3"><i class="fas fa-phone-alt"></i><span class="ml-2 d-none d-sm-inline-block">Customer Support</span></a>
                        </li>
                        
                    </ul>
                    <ul class="cart-button-area ">
                        @auth
                            <li >
                                <span  style="color: #f0f2f5">Welcome, {{Auth::user()->nom }}</span>
                                <a href="#" class="profile user-button"><i class="flaticon-user"></i></a>
                            </li>  
                        @endauth                
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href="{{route('index')}}">
                            <img src="https://www.auksjonen.no/font/logo_74a1d5.svg" alt="logo">
                        </a>
                    </div>
                    <ul class="menu ml-auto">
                        <li>
                            <a href="{{route('index')}}"><i class="fas fa-home"></i>Home</a>
                            
                        </li>
                        <li>
                            
                            <a href="{{route('sell')}}"><i class="fas fa-shopping-cart"></i>Sell</a>
                        </li>
                        
                        <li>
                            <a href="{{route('about')}}"><i class="fas fa-address-card"></i>About</a>
                        </li>
                        <li>
                            
                           @guest
                           <a href="#0"><i class="fas fa-sign-in-alt"></i>Login/Register</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="{{route('login')}}">Sign In</a>
                                    </li>
                                    <li>
                                        <a href="{{route('register')}}">Sign Up</a>
                                    </li>
                                </ul>
                            @else   
                                <a href="#0">Profile</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="{{route('dashboard')}}"><i class="flaticon-dashboard"></i>Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="{{route('profile')}}"> <i class="flaticon-settings"></i>Mon profile</a>
                                    </li>
                                    <li>
                                        <a href="{{route('favorits')}}"><i class="flaticon-star"></i>Favoris</a>
                                    </li>
                                     <li>
                                        <a href="{{route('favorits')}}"><i class="flaticon-auction"></i></i>Mes ench??res</a>
                                    </li>
                                    
                                    
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       Logout <i class="flaticon-logout"></i>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    </li>
                                </ul>
                            @endguest 
                            
                        </li>
                    </ul>
                    
                    <div class="search-bar d-md-none">
                        <a href="#0"><i class="fas fa-search"></i></a>
                    </div>
                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@auth
  <!--============= Cart Section Starts Here =============-->
  <div class="cart-sidebar-area">
    <div class="top-content">
        <span class="side-sidebar-close-btn"><i class="fas fa-times"></i></span>
    </div>
    <div class="bottom-content">
        <div class="cart-products">
            <div class="btn-wrapper text-center">
                <a href="/dashboard" class="custom-button"><span>Dashboard</span></a>
            </div>
            <div class="btn-wrapper text-center">
                <a href="/profile" class="custom-button"><span>Profile</span></a>
            </div>
            <div class="btn-wrapper text-center">
                <a  class="custom-button" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <span>Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
<!--============= Cart Section Ends Here =============-->
@endauth 

@yield('content')



    
    <!--============= Footer Section Starts Here =============-->
    <footer style="background-color: #9b9b9b" class=" padding-top oh" >
        <div class="footer-top-shape">
            <img src="./assets/css/img/footer-top-shape.png" alt="css">
        </div>
        <div class="anime-wrapper">
            <div class="anime-1 plus-anime">
                <img src="./assets/images/footer/p1.png" alt="footer">
            </div>
            <div class="anime-2 plus-anime">
                <img src="./assets/images/footer/p2.png" alt="footer">
            </div>
            <div class="anime-3 plus-anime">
                <img src="./assets/images/footer/p3.png" alt="footer">
            </div>
            <div class="anime-5 zigzag">
                <img src="./assets/images/footer/c2.png" alt="footer">
            </div>
            <div class="anime-6 zigzag">
                <img src="./assets/images/footer/c3.png" alt="footer">
            </div>
            <div class="anime-7 zigzag">
                <img src="./assets/images/footer/c4.png" alt="footer">
            </div>
        </div>
        <div class="newslater-wrapper">
            <div class="container">
                <div class="newslater-area">
                    <div class="newslater-thumb">
                        <img src="./assets/images/footer/newslater.png" alt="footer">
                    </div>
                    <div class="newslater-content">
                        <div class="section-header left-style mb-low">
                            <h5 class="cate">Subscribe to Sbidu</h5>
                            <h3 class="title">To Get Exclusive Benefits</h3>
                        </div>
                        <form action="{{route('subscribe')}}" class="subscribe-form">
                            <input type="text" placeholder="Enter Your Email" name="email">
                            <button type="submit" class="custom-button">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-top padding-bottom padding-top">
            <div class="container">
                <div class="row mb--60">
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget widget-links">
                            <h5 class="title">Auction Categories</h5>
                            <ul class="links-list">
                                @php $categories=App\Models\Categorie::all(); @endphp
                                @foreach($categories as $categorie)
                                <li>
                                    <a href="#0">{{$categorie->nom}}</a>
                                </li>
                                @endforeach
                               
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget widget-links">
                            <h5 class="title">About Us</h5>
                            <ul class="links-list">
                                <li>
                                    <a href="{{route('about')}}">About</a>
                                </li>
                                <li>
                                    <a href="{{route('about')}}">Privacy</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget widget-links">
                            <h5 class="title">We're Here to Help</h5>
                            <ul class="links-list">
                                @auth
                                <li>
                                    <a href="{{route('profile')}}">Your Account</a>
                                </li>
                                @else
                                <li>
                                    <a href="{{route('login')}}">Login/Sign Up</a>
                                </li>
                                @endauth
                                
                                <li>
                                    <a href="{{route('about')}}">Contact Us</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget widget-follow">
                            <h5 class="title">Follow Us</h5>
                            <ul class="links-list">
                                <li>
                                    <a href="#0"><i class="fas fa-phone-alt"></i>(646) 663-4575</a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fas fa-blender-phone"></i>(646) 968-0608</a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fas fa-envelope-open-text"></i>help@engotheme.com</a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fas fa-location-arrow"></i>1201 Broadway Suite</a>
                                </li>
                            </ul>
                            <ul class="social-icons">
                                <li>
                                    <a href="#0" class="active"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="copyright-area">
                    <div class="footer-bottom-wrapper">
                        <div class="logo">
                            <a href="{{route('index')}}"><img  src="https://www.auksjonen.no/font/logo_74a1d5.svg" alt="logo"></a>
                        </div>
                        
                        <div class="copyright"><p>&copy; Copyright 2021 | <a href="#0">Auction</a> By <a href="#0">Auction</a></p></div>
                    </div>
                </div>
            </div>
        </div>
        
   </footer>
    <!--============= Footer Section Ends Here =============-->



    <script src="{{asset("./assets/js/jquery-3.3.1.min.js")}}"></script>
    <script src="{{asset("./assets/js/modernizr-3.6.0.min.js")}}"></script>
    <script src="{{asset("./assets/js/plugins.js")}}"></script>
    <script src="{{asset("./assets/js/bootstrap.min.js")}}"></script>
    <script src="{{asset("./assets/js/isotope.pkgd.min.js")}}"></script>
    <script src="{{asset("./assets/js/wow.min.js")}}"></script>
    <script src="{{asset("./assets/js/waypoints.js")}}"></script>
    <script src="{{asset("./assets/js/nice-select.js")}}"></script>
    <script src="{{asset("./assets/js/counterup.min.js")}}"></script>
    <script src="{{asset("./assets/js/owl.min.js")}}"></script>
    <script src="{{asset("./assets/js/magnific-popup.min.js")}}"></script>
    <script src="{{asset("assets/js/yscountdown.min.js")}}"></script>
    <script src="{{asset("assets/js/jquery-ui.min.js")}}"></script>
    <script src="{{asset("./assets/js/main.js")}}"></script>
    @yield('scripts')
    
</body>

<script type="text/javascript" src="https://cdn.weglot.com/weglot.min.js"></script>
<script>
    Weglot.initialize({
        api_key: 'wg_ba2dcb24c7e21c809d78f25e62e5476e2'
    });
</script>

</html>