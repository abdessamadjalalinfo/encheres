<!DOCTYPE html>
<html lang="en">
    <style>
        .mt--165 {
    margin-top: -165px;
}
    </style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Sbidu - Bid And Auction HTML Template</title>

    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/owl.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/main.css')}}">

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
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


    <!--============= Header Section Starts Here =============-->
    <header>
        <div class="header-top">
            <div class="container">
                <div class="header-top-wrapper">
                    <ul class="customer-support">
                        <li>
                            <a href="#0" class="mr-3"><i class="fas fa-phone-alt"></i><span class="ml-2 d-none d-sm-inline-block">Customer Support</span></a>
                        </li>
                       
                    </ul>
                    
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href="./index.html">
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
                                        <a href="{{route('dashboard')}}">Dashboard</a>
                                    </li>
                                    
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    </li>
                                </ul>
                            @endguest 
                            
                        </li>
                    </ul>
                    
                    
                </div>
            </div>
        </div>
    </header>
    <!--============= Header Section Ends Here =============-->

    <!--============= Cart Section Starts Here =============-->
    <div class="cart-sidebar-area">
        <div class="top-content">
            <a href="index.html" class="logo">
                <img src="{{asset('assets/images/logo/logo2.png')}}" alt="logo">
            </a>
            <span class="side-sidebar-close-btn"><i class="fas fa-times"></i></span>
        </div>
        
    </div>
    <!--============= Cart Section Ends Here =============-->


    <!--============= Hero Section Starts Here =============-->
    <div class="hero-section style-2">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="{{route('index')}}">Accueil</a>
                </li>
                <li>
                    <a href="#0">Catégorie</a>
                </li>
                <li>
                    <span>
                        {{$categorie->nom}}</span>
                </li>
            </ul>
        </div>
        <div class="bg_img hero-bg bottom_center" data-background="{{asset('/assets/images/banner/hero-bg.png')}}"></div>
    </div>
    <!--============= Hero Section Ends Here =============-->


    <!--============= Featured Auction Section Starts Here =============-->
    <section class="featured-auction-section padding-bottom mt--165  pos-rel">
        <div class="container">
            <div class="section-header cl-white mw-100 left-style">
                <h3 class="title">{{$categorie->nom}}</h3>
                <p>Dernière Annonce</p>
            </div>
            @if($categorie->products->count()!=0)
         
        @endif
    </section>
    <!--============= Featured Auction Section Ends Here =============-->


    <!--============= Product Auction Section Starts Here =============-->

       @if($categorie->products->count()!=0)
    <div class="product-auction padding-bottom">
        <div class="container">
            <div class="product-header mb-40">
                <div class="product-header-item">
                    <div class="item">Trier par : </div>
                    <select name="sort-by" class="select-bar">
                        <option value="all">All</option>
                        <option value="name">Nom</option>
                        <option value="date">Date</option>
                        <option value="type">Type</option>
                        <option value="car">Car</option>
                    </select>
                </div>
                <div class="product-header-item">
                    <div class="item">Voir : </div>
                    <select name="sort-by" class="select-bar">
                        <option value="09">09</option>
                        <option value="21">21</option>
                        <option value="30">30</option>
                        <option value="39">39</option>
                        <option value="60">60</option>
                    </select>
                </div>
                <form class="product-search ml-auto">
                    <input type="text" placeholder="Nom ">
                    <button type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="row mb-30-none justify-content">
                @foreach($products as $product)
                 <?php
                        $dernier_enchere = App\Models\Enchere::all()->where('produit_id',  $product->id)->SortBy('price')->last();
                        if ($dernier_enchere) {
                            $date_expires ="Expire le :".(Carbon\Carbon::parse($dernier_enchere->created_at)->addHours($product->duree));
                         } else {
                          $date_expires = "aucun enchère";
                         }
                         $min = \App\Models\Enchere::all()->where('produit_id', $product->id)->max('price');
                        ?>
                <div class="col-sm-10 col-md-6 col-lg-4">
                    <div class="auction-item-2">
                        <div class="auction-thumb">
                            <a href="./product-details.html"><img src="{{asset($product->images[0]->path_logo ?? "")}}" alt="product"></a>
                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                        </div>
                        <div class="auction-content">
                            <h6 class="title">
                                <a href="#0">{{$product->titre}}</a>
                            </h6>
                            <div class="bid-area">
                                <div class="bid-amount">
                                    <div class="icon">
                                        <i class="flaticon-auction"></i>
                                    </div>
                                    <div class="amount-content">
                                        <div class="current">prix courant</div>
                                        <div class="amount">$876.00</div>
                                    </div>
                                </div>
                                <div class="bid-amount">
                                    <div class="icon">
                                        <i class="flaticon-money"></i>
                                    </div>
                                    <div class="amount-content">
                                        <div class="current">premier prix</div>
                                        <div class="amount">{{$product->premier_prix}} MAD</div>
                                    </div>
                                </div>
                            </div>
                            <div class="countdown-area">
                                <div class="countdown">
                                    {{$date_expires}}
                                </div>
                               
                            </div>
                            <div class="text-center">
                                @if($product->etat=="expiré")
                                <a href="{{route('showProduct',['id'=>$product->id])}}" class="btn btn-danger">Expiré</a>
                                @else 
                                 <a href="{{route('showProduct',['id'=>$product->id])}}" class="custom-button btn-success">Proposer</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            
 
            </div>
            <ul class="pagination">
                <li>
                    <a href="#0"><i class="flaticon-left-arrow"></i></a>
                </li>
                <li>
                    <a href="#0">1</a>
                </li>
                <li>
                    <a href="#0" class="active">2</a>
                </li>
                <li>
                    <a href="#0">3</a>
                </li>
                <li>
                    <a href="#0"><i class="flaticon-right-arrow"></i></a>
                </li>
            </ul>
        </div>
    </div>

    @endif
    <!--============= Product Auction Section Ends Here =============-->


    <!--============= Footer Section Starts Here =============-->
    <footer class="bg_img padding-top oh" data-background="{{asset('/assets/images/footer/footer-bg.jpg')}}">
        <div class="footer-top-shape">
            <img src="{{asset('/assets/css/img/footer-top-shape.png')}}" alt="css">
        </div>
        <div class="anime-wrapper">
            <div class="anime-1 plus-anime">
                <img src="{{asset('/assets/images/footer/p1.png')}}" alt="footer">
            </div>
            <div class="anime-2 plus-anime">
                <img src="{{asset('/assets/images/footer/p2.png')}}" alt="footer">
            </div>
            <div class="anime-3 plus-anime">
                <img src="{{asset('/assets/images/footer/p3.png')}}" alt="footer">
            </div>
            <div class="anime-5 zigzag">
                <img src="{{asset('/assets/images/footer/c2.png')}}" alt="footer">
            </div>
            <div class="anime-6 zigzag">
                <img src="{{asset('/assets/images/footer/c3.png')}}" alt="footer">
            </div>
            <div class="anime-7 zigzag">
                <img src="{{asset('/assets/images/footer/c4.png')}}" alt="footer">
            </div>
        </div>
      <div class="newslater-wrapper">
            <div class="container">
                <div class="newslater-area">
                    <div class="newslater-thumb">
                        <img src="{{asset('/assets/images/footer/newslater.png')}}" alt="footer">
                    </div>
                    <div class="newslater-content">
                        <div class="section-header left-style mb-low">
                            <h5 class="cate">Subscribe to Auction</h5>
                            <h3 class="title">Pour obtenir des avantages exclusifs</h3>
                        </div>
                        <form class="subscribe-form">
                            <input type="text" placeholder="Enter Your Email" name="email">
                            <button type="submit" class="custom-button">S'abonner</button>
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
                                <li>
                                    <a href="#0">Ending Now</a>
                                </li>
                                <li>
                                    <a href="#0">Vehicles</a>
                                </li>
                                <li>
                                    <a href="#0">Watches</a>
                                </li>
                                <li>
                                    <a href="#0">Electronics</a>
                                </li>
                                <li>
                                    <a href="#0">Real Estate</a>
                                </li>
                                <li>
                                    <a href="#0">Jewelry</a>
                                </li>
                                <li>
                                    <a href="#0">Art</a>
                                </li>
                                <li>
                                    <a href="#0">Sports & Outdoor</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget widget-links">
                            <h5 class="title">About Us</h5>
                            <ul class="links-list">
                                <li>
                                    <a href="#0">About Sbidu</a>
                                </li>
                                <li>
                                    <a href="#0">Help</a>
                                </li>
                                <li>
                                    <a href="#0">Affiliates</a>
                                </li>
                                <li>
                                    <a href="#0">Jobs</a>
                                </li>
                                <li>
                                    <a href="#0">Press</a>
                                </li>
                                <li>
                                    <a href="#0">Our blog</a>
                                </li>
                                <li>
                                    <a href="#0">Collectors' portal</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget widget-links">
                            <h5 class="title">We're Here to Help</h5>
                            <ul class="links-list">
                                <li>
                                    <a href="#0">Your Account</a>
                                </li>
                                <li>
                                    <a href="#0">Safe and Secure</a>
                                </li>
                                <li>
                                    <a href="#0">Shipping Information</a>
                                </li>
                                <li>
                                    <a href="#0">Contact Us</a>
                                </li>
                                <li>
                                    <a href="#0">Help & FAQ</a>
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
                            <a href="index.html"><img src="{{asset('/assets/images/logo/footer-logo.png')}}" alt="logo"></a>
                        </div>
                        <ul class="gateway-area">
                            <li>
                                <a href="#0"><img src="{{asset('/assets/images/footer/paypal.png')}}" alt="footer"></a>
                            </li>
                            <li>
                                <a href="#0"><img src="{{asset('/assets/images/footer/visa.png')}}" alt="footer"></a>
                            </li>
                            <li>
                                <a href="#0"><img src="{{asset('/assets/images/footer/discover.png')}}" alt="footer"></a>
                            </li>
                            <li>
                                <a href="#0"><img src="{{asset('/assets/images/footer/mastercard.png')}}" alt="footer"></a>
                            </li>
                        </ul>
                        <div class="copyright"><p>&copy; Copyright 2021 | <a href="#0">Sbidu</a> By <a href="#0">Uiaxis</a></p></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="https://cdn.weglot.com/weglot.min.js"></script>
<script>
    Weglot.initialize({
        api_key: 'wg_ba2dcb24c7e21c809d78f25e62e5476e2'
    });
</script>
    <!--============= Footer Section Ends Here =============-->



    <script src="{{asset('/assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('/assets/js/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('/assets/js/plugins.js')}}"></script>
    <script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('/assets/js/waypoints.js')}}"></script>
    <script src="{{asset('/assets/js/nice-select.js')}}"></script>
    <script src="{{asset('/assets/js/counterup.min.js')}}"></script>
    <script src="{{asset('/assets/js/owl.min.js')}}"></script>
    <script src="{{asset('/assets/js/magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/yscountdown.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('/assets/js/main.js')}}"></script>
</body>

</html>