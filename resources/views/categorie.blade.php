<!DOCTYPE html>

<html lang="en">

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
        .mt--165 {
    margin-top: -165px;
}
      .img-h {
   float: left;
    width:  100%;
    height: 150px;    object-fit: cover;
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
    <header style='background:#9b9b9b'>
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
        <div class="header-bottom" style="background:#9b9b9b;">
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
   
    <!--============= Hero Section Ends Here =============-->


    <!--============= Featured Auction Section Starts Here =============-->
    <section class="featured-auction-section padding-bottom mt--165  pos-rel">
        <div class="container">
            
            
       
            <div class="section-header cl-white mw-100 left-style">
                <h3 class="title">{{$categorie->nom}}  ({{$categorie->products->count()}})</h3>
                <p>Dernière Annonce</p>
            </div>
            @if($categorie->products->count()!=0)
         
        @endif
    </section>
    <!--============= Featured Auction Section Ends Here =============-->


    <!--============= Product Auction Section Starts Here =============-->

       @if($categorie->products->count()!=0)
    <div class="product-auction padding-bottom" style="
    margin-top: 61px;
">

        <div class="container">
            <h2>{{$categorie->nom}}({{$categorie->products->count()}})</h2>
            <br>
            <div class="product-header mb-40">
                
                @if($brands)
                    <div class="input-group">

  <input type="number" placeholder="price min" name="pricemin" aria-label="First name" class="form-control">
  <input type="number"placeholder="price max"  name="pricemax" aria-label="Last name" class="form-control control-sm"><br>
  <div class="col-2 btn-group"  >
    <button onclick="filtreByPrice()" type="submit"><i class="fas fa-search"></i></button> 
    <button type="button"  onclick="reset()"  class="btn btn-primary">Reset</button>
 
  
   </div>

</div>
                   
                    
                @endif
                
                
            </div>
            <div class="row ">
                <div class="row">
           <div class="col-xs-12 col-sm-2">
              <h6>Filtre:</h6> 
             
<form action="{{route('showProductCategoriesfiltre',$categorie->id)}}" method="post">
    @csrf
     @foreach ($brands as $brand)
           <div class="form-check">
  <input style="height:20px;left: 120px;" class="form-check-input"@if($requests) @if(in_array($brand->id,$requests)) checked @endif @endif name="brand[]" type="checkbox" value="{{$brand->id}}" id="flexCheckIndeterminate"> 
  <label class="form-check-label" for="flexCheckIndeterminate">
   {{$brand->name_brand}}
  </label>
</div>
@endforeach


<br>
<button  style="height:40px;text-align:center" type="submit" class="btn btn-success btn-sm">check</button>
</form>

 

            </div>
<div class="col-xs-12 col-sm-10 justify-content"> 
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
         
                        <div class="col-sm-10 col-md-12 col-lg-12 @php if($product->brand_id) echo 'Cars brandNum'.$product->brand_id @endphp">
                            <div class="auction-item-2">
                                <div class="row">

                                    <div class="col-4"> <div class="auction-thumb">
                                    <a href="./product-details.html"><img src="{{asset($product->images[0]->path_logo ?? "")}}" alt="product"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div></div>
                                    <div class="col-8">
                                <div class="auction-content">
                                    <h6 class="title">
                                        
                                        <a href="#0">{{$product->titre}}  @php  if($product->brand_id) echo 'Brand : '.$product->brand()->get()[0]->name_brand @endphp</a>
                                    </h6>
                                    <div class="bid-area">
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-auction"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">prix courant</div>
                                                <div><div class="amount jalal">{{\App\Models\Enchere::all()->where('produit_id', $product->id)->max('price') ?? $product->premier_prix}}</div>Mad</div>
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
                                        </div><div class="text-center">
                                        @if($product->etat=="expiré")
                                        <a href="{{route('showProduct',['id'=>$product->id])}}" class="btn btn-danger">Expiré</a>
                                        @else 
                                        <a href="{{route('showProduct',['id'=>$product->id])}}" class="btn btn-success">Proposer</a>
                                        @endif
                                    </div>
                                    
                                    </div>
                                    
                                </div></div>
                                </div>
                               
                               
                            </div>
                        </div>
                @endforeach</div>

                </div>
              
            
 
            </div>
          
          
        </div>
    </div>

    @endif
    <!--============= Product Auction Section Ends Here =============-->


    <!--============= Footer Section Starts Here =============-->
    <footer style="background-color: #9b9b9b"  class="bg_img padding-top oh">
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
                        <form action="{{route('subscribe')}}" class="subscribe-form">
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
    

    <script>
        
       function filtreByPrice()
       {
           var list=$(".amount.jalal");
        var min=$("input[name=pricemin]").val();
        var max =$("input[name=pricemax]").val();
        for (let i = 0; i < list.length; i++) {
           
                list[i].parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.style.display = 'block';

        }
          for (let i = 0; i < list.length; i++) {     
            if((parseInt(list[i].textContent) < parseInt(min) )||(parseInt(list[i].textContent) > parseInt(max)))
            {
                list[i].parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.style.display = 'none';
            }  
        }
       }
       function reset()
       {
            var list=$(".amount.jalal"); 
            for (let i = 0; i < list.length; i++) {
           
                list[i].parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.style.display = 'block';

        }
       }
        
        



    </script>
    
    


  <!-- BEGIN VENDOR JS-->

  <!-- END PAGE LEVEL JS-->
</body>

</html>