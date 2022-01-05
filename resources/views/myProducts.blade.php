<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Dashboard</title>

    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="./assets/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/animate.css">
    <link rel="stylesheet" href="./assets/css/nice-select.css">
    <link rel="stylesheet" href="./assets/css/owl.min.css">
    <link rel="stylesheet" href="./assets/css/magnific-popup.css">
    <link rel="stylesheet" href="./assets/css/flaticon.css">
    <link rel="stylesheet" href="./assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    

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
<style>
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
                        <li>
                            <i class="fas fa-globe"></i>
                            <select name="language" class="select-bar">
                                <option value="en">En</option>
                                <option value="Bn">Bn</option>
                                <option value="Rs">Rs</option>
                                <option value="Us">Us</option>
                                <option value="Pk">Pk</option>
                                <option value="Arg">Arg</option>
                            </select>
                        </li>
                    </ul>
                    <ul class="cart-button-area ">
                          
                        @auth
                            <li>
                                <a style="color: #f0f2f5" href="sign-in.html">Welcome, {{Auth::user()->nom }}</a>
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
                        <a href="/">
                            <img src="https://www.auksjonen.no/font/logo_74a1d5.svg" alt="logo">
                        </a>
                    </div>
                    <ul class="menu ml-auto">
                        <li>
                            <a href=""><i class="fas fa-home"></i>Home</a>
                            
                        </li>
                        <li>
                            
                            <a href=""><i class="fas fa-shopping-cart"></i>Sell</a>
                        </li>
                        
                        <li>
                            <a href="./contact.html"><i class="fas fa-address-card"></i>About</a>
                        </li>
                        <li>
                            
                           @guest
                           <a href="#0"><i class="fas fa-sign-in-alt"></i>Login/Register</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="/login">Sign In</a>
                                    </li>
                                    <li>
                                        <a href="./register">Sign Up</a>
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
                    <form class="search-form">
                        <input type="text" placeholder="Qu'est ce que vous cherchez?">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </form>
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
    <!--============= Header Section Ends Here =============-->

 

    <!--============= Hero Section Starts Here =============-->
    <div class="hero-section style-2 pb-lg-400">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="./index.html">Accueil</a>
                </li>
                <li>
                    <a href="#0">Mon Compte</a>
                </li>
                <li>
                    <span>Dashboard</span>
                </li>
            </ul>
        </div>
        <div class="bg_img hero-bg bottom_center" data-background="./assets/images/banner/hero-bg.png"></div>
    </div>
    <!--============= Hero Section Ends Here =============-->


    <!--============= Dashboard Section Starts Here =============-->
    <section class="dashboard-section padding-bottom mt--240 mt-lg--325 pos-rel">
        <div class="container">
            <div class="row justify-content-center">
                @include("layouts.sidebarDashboard",['mesAnnonces'=>'active'])
                <div class="col-lg-8">
                    <div class="dashboard-widget mb-40">
                        <div class="dashboard-title mb-30">
                            <h5 class="title">Mes produits</h5>
                        </div>
                        <div class="row justify-content-center mb-30-none">
                            <div class="col-md-4 col-sm-6">
                                <div class="dashboard-item">
                                    <div class="thumb">
                                        <img src="./assets/images/dashboard/03.png" alt="dashboard">
                                    </div>
                                    <div class="content">
                                        <h2 class="title"><span class="counter">{{$normalProducts->count()+$expiredProducts->count()}}</span></h2>
                                        <h6 class="info">Tout les produits</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="dashboard-item">
                                    <div class="thumb">
                                        <img src="./assets/images/dashboard/01.png" alt="dashboard">
                                    </div>
                                    <div class="content">
                                        <h2 class="title"><span class="counter">{{$normalProducts->count()}}</span></h2>
                                        <h6 class="info">En cours</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="dashboard-item">
                                    <div class="thumb">
                                        <img src="./assets/images/dashboard/02.png" alt="dashboard">
                                    </div>
                                    <div class="content">
                                        <h2 class="title"><span class="counter">{{$expiredProducts->count()}}</span></h2>
                                        <h6 class="info">Expiré</h6>
                                    </div>
                                </div>
                                
                            </div>
                                 <p style="color:red;padding-bottom: 11px;"><b>Contacter l'admin sur: <b style='color:rgb(0, 0, 0);'>admin@auction.ma</b> pour voir les informations de l'acheteur pour les produits expirés. veuillez mentionnez le nom de l'annonce.</b> </p>
                      
                            
                            
                        </div>
                    </div>
                    <div class="dashboard-widget">
                        {{-- comment 
                        <h5 class="title mb-10">Purchasing</h5>--}}
                        <div class="dashboard-purchasing-tabs">
                            <ul class="nav-tabs nav">
                                <li>
                                    <a href="#in_progress" class="active" data-toggle="tab">En cours</a>
                                </li>
                                <li>
                                    <a href="#expired" data-toggle="tab">Expiré</a>
                                </li>
                                {{-- comment 
                                
                                <li>
                                    <a href="#history" data-toggle="tab">History</a>
                                </li>--}}
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane show active fade" id="in_progress">
                                    <table class="purchasing-table">
                                        <thead>
                                            <th>Titre</th>
                                            <th>Nombre de vue</th>
                                            <th>Categorie</th>
                                            <th>Premier prix(DH)</th>
                                            <th>Enchère</th>
                                            <th>Prix Courant(DH)</th>
                                            
                                        </thead>
                                        <tbody>
                                            @foreach ($normalProducts as $product)
                                            
                                            <tr>
                                                
                                                <td data-purchase="Title"><a style="color: black" href="{{route('showProduct',['id'=>$product->id])}}"> <strong>{{$product->titre}} </strong></a></td>
                                                
                                                <td data-purchase="Description">{{$product->nb_vue}} </td>
                                                <td data-purchase="Categorie">{{$product->categorie()->get()[0]->nom}}</td>
                                                <td data-purchase="First Price(DH)">{{$product->premier_prix}}</td>
                                                <td data-purchase="Bids">{{$product->countBids}}</td>
                                                <td data-purchase="Current Bid(DH)">{{$product->currentBid}}</td>
                                            </tr>
                                            
                                            @endforeach
                                          
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane show fade" id="expired">
                                    <table class="purchasing-table">
                                        <thead>
                                            <th>Titre</th>
                                            <th>Nombre de Vue</th>
                                            <th>Categorie</th>
                                            <th>Premier Prix(DH)</th>
                                            <th>Prix d'enchère(DH)</th>
                                            <th>Winner</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($expiredProducts as $product)
                                            <tr>
                                                <td data-purchase="Title"><a style="color: black" href="{{route('showProduct',['id'=>$product->id])}}"> <strong>{{$product->titre}} </strong></a></td>
                                                <td data-purchase="Description">{{$product->nb_vue}} </td>
                                                <td data-purchase="Categorie">{{$product->categorie()->get()[0]->nom}}</td>
                                                <td data-purchase="First Price">{{$product->premier_prix}}</td>
                                                <td>{{$product->bidPrice}}</td>
                                                <td data-purchase="Winner" style="text-align: center"> 
                                                    <i class="fas fa-eye" type="button" class="btn btn-primary" data-toggle="modal" data-target="#InfoWinner{{$product->winner->id}}"></i>
                                                </td>
                                               
                                            </tr>
                                            @endforeach
                                            
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Modal -->
                                                 
        
    </section>

    @foreach ($expiredProducts as $product)

    <div class="modal fade" id="InfoWinner{{$product->winner->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="title">Winner Details</h4>
            </div>
            <div class="modal-body">
                <ul class="dash-pro-body">
                    <li>
                        <div class="info-name">Name : {{$product->winner->prenom}} {{$product->winner->nom}}</div>
                    </li>
                    <div>
                        Contact the administrator for more information about the winner 
                    </div>
                    <li>
                        <div class="info-name">Admin Phone : +212678768909</div>
                    </li>
                    <li>
                        <div class="info-name">Admin Email : admin@bid.com</div>
                    </li>
                </ul>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
    </div>
    @endforeach
    <!--============= Dashboard Section Ends Here =============-->


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
                        <form class="subscribe-form">
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
                            <a href="index.html"><img  src="https://www.auksjonen.no/font/logo_74a1d5.svg" alt="logo"></a>
                        </div>
                        
                        <div class="copyright"><p>&copy; Copyright 2021 | <a href="#0">Auction</a> By <a href="#0">Auction</a></p></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--============= Footer Section Ends Here =============-->



    <script src="./assets/js/jquery-3.3.1.min.js"></script>
    <script src="./assets/js/modernizr-3.6.0.min.js"></script>
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/isotope.pkgd.min.js"></script>
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/waypoints.js"></script>
    <script src="./assets/js/nice-select.js"></script>
    <script src="./assets/js/counterup.min.js"></script>
    <script src="./assets/js/owl.min.js"></script>
    <script src="./assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/yscountdown.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="./assets/js/main.js"></script>

    
</body>

</html>