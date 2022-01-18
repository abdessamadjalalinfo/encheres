<!DOCTYPE html>
<html lang="en">

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

    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
</head>
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

  <style>
      .img-h {
    float: left;
    
    height: 500px;
    object-fit: cover;
}
</style> 
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
                                        <a href="{{route('dashboard')}}"><i class="flaticon-dashboard"></i>Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="{{route('profile')}}"> <i class="flaticon-settings"></i>Mon profile</a>
                                    </li>
                                    <li>
                                        <a href="{{route('favorits')}}"><i class="flaticon-star"></i>Favoris</a>
                                    </li>
                                     <li>
                                        <a href="{{route('favorits')}}"><i class="flaticon-auction"></i></i>Mes enchères</a>
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
                    
                   
                </div>
            </div>
        </div>
    </header>
    <!--============= Header Section Ends Here =============-->

    <!--============= Cart Section Starts Here =============-->
  
    <!--============= Cart Section Ends Here =============-->


    <!--============= Hero Section Starts Here =============-->
    <div class="hero-section style-2">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="{{route('index')}}">Home</a>
                </li>
                <li>
                    <a href="#0">Pages</a>
                </li>
                <li>
                    <span>Vehicles</span>
                </li>
            </ul>
        </div>
        <div class="bg_img hero-bg bottom_center" data-background="/assets/images/banner/hero-bg.png"></div>
    </div>
    <!--============= Hero Section Ends Here =============-->


    <!--============= Product Details Section Starts Here =============-->
    <section class="product-details padding-bottom mt--140 mt-lg--440">
        <div class="container">
            <div class="product-details-slider-top-wrapper">
                <div class="product-details-slider owl-theme owl-carousel" id="sync1">
                  
                    @foreach($product->images()->get() as $image)

                    <div class="slide-top-item card h-70">
                        <div class="slide-inner">
                            <img class="img-h" src="{{asset($image->path_logo)}}" alt="product">
                        </div>
                    </div>
                    @endforeach
                   
                  
                    
                    
                </div>
            </div>
            <div class="product-details-slider-wrapper">
                <div class="product-bottom-slider owl-theme owl-carousel" id="sync2">
                  
                    @foreach($product->images()->get() as $img)
                   
                    <div class="slide-bottom-item">
                        <div class="slide-inner">
                         
                            <img src="{{asset($img->path_logo)}}" alt="product">
                        </div>
                    </div>

                    @endforeach
                    
                    
                   
                   
                   
                </div>
                <span class="det-prev det-nav">
                    <i class="fas fa-angle-left"></i>
                </span>
                <span class="det-next det-nav active">
                    <i class="fas fa-angle-right"></i>
                </span>
            </div>
            <div class="row mt-40-60-80">
                <div class="col-lg-8">
                    <div class="product-details-content">
                        <div class="product-details-header">
                            <h2 class="title">{{$product->titre}}</h2>
                            <ul>
                                <li>Listing ID: 14076242</li>
                                <li>Item #: 7300-3356862</li>
                            </ul>
                        </div>
                        <ul class="price-table mb-10">
                            <li class="header">
                                <h4 class="current">Prix Courant</h4>
                                
                                <h3 class="price">{{$min ?? $product->premier_prix}} MAD</h3>
                            <p>*Prix ​​minimum non atteint, mais peut toujours être vendu</p>
                                
                            </li>
                           
                            <li>
                                <h5 class="current">Prix de départ</span>
                                <h5 class="info">{{$product->premier_prix }} MAD</h5>
                            </li>
                        </ul>
                        <div class="product-bid-area">
                            
                            @if($product->etat=="expiré")
                            <button type="button" class="btn btn-danger" >Expiré</button>
                            @else 
                            <form action="{{route('proposer1',$product->id)}}" class="product-bid-form">
                                <div class="search-icon">
                                    <img src="{{asset("/assets/images/product/search-icon.png")}}" alt="product">
                                </div>
                                <input min="{{$min ?? $product->premier_prix}}" value="{{$min}}" type="number" placeholder="votre proposition">   
                                @auth
                                <!--button type="submit" class="custom-button">Proposer</!--button-->
                               
                                

                              
                           
                                
                                <button class="btn btn-danger" type="button" class="custom-button" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Proposer</button>
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Proposer </h5>
                                        
                                        
                                    </div>
                                    <div class="modal-body">
                                   
                                          <input min="{{$min ?? $product->premier_prix}}" value="{{$min ?? $product->premier_prix}}" name="proposition" type="number" placeholder="votre proposition">
                                         <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-success">Etes vous sûr?</button>
                                         </div>
                                       
                                    
                                        
                                    </div>
                                    
                                    </div>
                                </div>
                                </div>
                            </form>
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#autobid" data-bs-whatever="@getbootstrap">Proposition Automatique</button>
<div class="modal fade" id="autobid" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
         <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Proposition Automatique </h5>
                                        
                                        
                                    </div>
      
      <div class="modal-body">
        <form action="{{route('proposer',$product->id)}}">
            @php
             $proposition=$min ?? $product->premier_prix;
             $proposition=$product->premier_prix*0.03 +$proposition;
                @endphp
          
          <h5> votre proposition automatique sera :{{$proposition}} MAD</h5>
          <div class="modal-footer">
        <input disabled value="{{$proposition}}" name="proposition" type="number">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-warning">Proposer</button>
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>

                                @else
                                <a href="{{route('login')}}" class="custom-button">Se connecter pour Proposer</a>
                                <p> *Le montant peut être modifié dans le champ ci-dessus avant l'enregistrement de l'offre</p>
                                 
                                 
                                 
                                @endauth


                            
                           
                            @endif
                        </div>
                        <div class="buy-now-area">
                            
                            <a href="{{route('add_to_favoris',$product->id)}}" class="rating custom-button active border"><i class="fas fa-star"></i> 
                               
                                @if($exist ==0)
                                Ajouter au Favoris
                            @else 
                        Dans votre Favoris
                            @endif

                            </a>
                            <div class="share-area">
                                <span>Share to:</span>
                                <ul>
                                    <li>
                                        <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#0"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#0"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="product-sidebar-area">
                        <div class="product-single-sidebar mb-1">
                            <h6 class="title">Cette enchère se termine:</h6>
                             @if($product->etat=="expiré")
                             <div class="countdown">
                                Expiré
                             </div>
                             @else
                            <div class="countdown">
                                {{$date_expiration}}
                            </div>
                            @endif
                            <div class="side-counter-area">
                                
                                <div class="side-counter-item">
                                    <div class="thumb">
                                        <img src="{{asset('/assets/images/product/icon2.png')}}" alt="product">
                                    </div>
                                    <div class="content">
                                        <h3 class="count-title"><span class="counter">{{$product->nb_vue}}</span></h3>
                                        <p>Nombre de Vue</p>
                                    </div>
                                </div>
                                <div class="side-counter-item">
                                    <div class="thumb">
                                        <img src="{{asset('/assets/images/product/icon3.png')}}" alt="product">
                                    </div>
                                    <div class="content">
                                        <h3 class="count-title"><span class="counter">{{$nb_encheres}}</span></h3>
                                        <p>Totale d'enchères</p>
                                    </div>
                                </div>
                                <div class="side-counter-item">
                                    
                                    <div class="content">
                                        <h4 class=""><span class="localisation">Casablanca</span></h4>
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                         <div class="product-single-sidebar mb-1">
                            <h6 class="title">Historique:</h6>
                            
                           <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Prix proposé</th>
                                    <th scope="col">Date et heure</th>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($encheres as $enchere)
                                    <tr>
                                    <th scope="row">Budgiver{{$enchere->user_id}}</th>
                                    <td>{{$enchere->price}} MAD</td>
                                    <td>{{$enchere->created_at}}</td>
                                    
                                    </tr>

                                @endforeach
                                </tbody>
                           </table>    
                            
                        </div>
                        <a href="#0" class="cart-link">View Shipping, Payment & Auction Policies</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-tab-menu-area mb-40-60 mt-70-100">
            <div class="container">
                <ul class="product-tab-menu nav nav-tabs">
                    <li>
                        <a href="#details" class="active" data-toggle="tab">
                            <div class="thumb">
                                <img src="{{asset("/assets/images/product/tab1.png")}}" alt="product">
                            </div>
                            <div class="content">Déscription</div>
                        </a>
                    </li>
                    <li>
                        <a href="#delevery" data-toggle="tab">
                            <div class="thumb">
                                <img src="{{asset("/assets/images/product/tab2.png")}}" alt="product">
                            </div>
                            <div class="content">Delivery Options</div>
                        </a>
                    </li>
                   
                    <li>
                        <a href="#questions" data-toggle="tab">
                            <div class="thumb">
                                <img src="{{asset("/assets/images/product/tab4.png")}}" alt="product">
                            </div>
                            <div class="content">Questions </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="details">
                    <div class="tab-details-content">
                        <div class="header-area">
                            <h3 class="title"> {{$product->titre}}</h3>
                            
                            
                            <div class="item">
                                <h5 class="subtitle">Description</h5>
                                <p>
                                    {!!$product->description!!}
                                </p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="delevery">
                    <div class="shipping-wrapper">
                        <div class="item">
                            <h5 class="title">shipping</h5>
                            <div class="table-wrapper">
                                <table class="shipping-table">
                                    <thead>
                                        <tr>
                                            <th>Available delivery methods </th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Customer Pick-up (within 10 days)</td>
                                            <td>$0.00</td>
                                        </tr>
                                        <tr>
                                            <td>Standard Shipping (5-7 business days)</td>
                                            <td>Not Applicable</td>
                                        </tr>
                                        <tr>
                                            <td>Expedited Shipping (2-4 business days)</td>
                                            <td>Not Applicable</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="item">
                            <h5 class="title">Notes</h5>
                            <p>Please carefully review our shipping and returns policy before committing to a bid.
                            From time to time, and at its sole discretion, Sbidu may change the prevailing fee structure for shipping and handling.</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="history">
                    <div class="history-wrapper">
                        <div class="item">
                            <h5 class="title">Bid History</h5>
                            <div class="history-table-area">
                                <table class="history-table">
                                    <thead>
                                        <tr>
                                            <th>Bidder</th>
                                            <th>date</th>
                                            <th>time</th>
                                            <th>unit price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-history="bidder">
                                                <div class="user-info">
                                                    <div class="thumb">
                                                        <img src="{{asset("/assets/images/history/01.png")}}" alt="history">
                                                    </div>
                                                    <div class="content">
                                                        Moses Watts
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-history="date">06/16/2021</td>
                                            <td data-history="time">02:45:25 PM</td>
                                            <td data-history="unit price">$900.00</td>
                                        </tr>
                                        <tr>
                                            <td data-history="bidder">
                                                <div class="user-info">
                                                    <div class="thumb">
                                                        <img src="{{asset("/assets/images/history/02.png")}}" alt="history">
                                                    </div>
                                                    <div class="content">
                                                        Pat Powell
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-history="date">06/16/2021</td>
                                            <td data-history="time">02:45:25 PM</td>
                                            <td data-history="unit price">$900.00</td>
                                        </tr>
                                        <tr>
                                            <td data-history="bidder">
                                                <div class="user-info">
                                                    <div class="thumb">
                                                        <img src="{{asset("/assets/images/history/03.png")}}" alt="history">
                                                    </div>
                                                    <div class="content">
                                                        Jack Rodgers
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-history="date">06/16/2021</td>
                                            <td data-history="time">02:45:25 PM</td>
                                            <td data-history="unit price">$900.00</td>
                                        </tr>
                                        <tr>
                                            <td data-history="bidder">
                                                <div class="user-info">
                                                    <div class="thumb">
                                                        <img src="{{asset("/assets/images/history/04.png")}}" alt="history">
                                                    </div>
                                                    <div class="content">
                                                        Arlene Paul
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-history="date">06/16/2021</td>
                                            <td data-history="time">02:45:25 PM</td>
                                            <td data-history="unit price">$900.00</td>
                                        </tr>
                                        <tr>
                                            <td data-history="bidder">
                                                <div class="user-info">
                                                    <div class="thumb">
                                                        <img src="{{asset("/assets/images/history/05.png")}}" alt="history">
                                                    </div>
                                                    <div class="content">
                                                        Marcia Clarke
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-history="date">06/16/2021</td>
                                            <td data-history="time">02:45:25 PM</td>
                                            <td data-history="unit price">$900.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="text-center mb-3 mt-4">
                                    <a href="#0" class="button-3">Load More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="questions">
                        <h5 class="faq-head-title">Frequently Asked Questions</h5>
                        <div class="faq-wrapper">
                            <div class="faq-item">
                                <div class="faq-title">
                                    <img src="{{asset("/assets/css/img/faq.png")}}" alt="css"><span class="title">Comment commencer à enchérir ?</span><span class="right-icon"></span>
                                </div>
                                <div class="faq-content">
                                    <p>All successful bidders can confirm their winning bid by checking the “Sbidu”. In addition, all successful bidders will receive an email notifying them of their winning bid after the auction closes.</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-title">
                                    <img src="{{asset("/assets/css/img/faq.png")}}" alt="css"><span class="title">Security Deposit / Bidding Power </span><span class="right-icon"></span>
                                </div>
                                <div class="faq-content">
                                    <p>All successful bidders can confirm their winning bid by checking the “Sbidu”. In addition, all successful bidders will receive an email notifying them of their winning bid after the auction closes.</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-title">
                                    <img src="/assets/css/img/faq.png" alt="css"><span class="title">Delivery time to the destination port </span><span class="right-icon"></span>
                                </div>
                                <div class="faq-content">
                                    <p>All successful bidders can confirm their winning bid by checking the “Sbidu”. In addition, all successful bidders will receive an email notifying them of their winning bid after the auction closes.</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-title">
                                    <img src="{{asset("/assets/css/img/faq.png")}}" alt="css"><span class="title">How to register to bid in an auction?</span><span class="right-icon"></span>
                                </div>
                                <div class="faq-content">
                                    <p>All successful bidders can confirm their winning bid by checking the “Sbidu”. In addition, all successful bidders will receive an email notifying them of their winning bid after the auction closes.</p>
                                </div>
                            </div>
                            <div class="faq-item open active">
                                <div class="faq-title">
                                    <img src="/assets/css/img/faq.png" alt="css"><span class="title">How will I know if my bid was successful?</span><span class="right-icon"></span>
                                </div>
                                <div class="faq-content">
                                    <p>All successful bidders can confirm their winning bid by checking the “Sbidu”. In addition, all successful bidders will receive an email notifying them of their winning bid after the auction closes.</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-title">
                                    <img src="{{asset("/assets/css/img/faq.png")}}" alt="css"><span class="title">What happens if I bid on the wrong lot?</span><span class="right-icon"></span>
                                </div>
                                <div class="faq-content">
                                    <p>All successful bidders can confirm their winning bid by checking the “Sbidu”. In addition, all successful bidders will receive an email notifying them of their winning bid after the auction closes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Product Details Section Ends Here =============-->


    <!--============= Footer Section Starts Here =============-->
    <footer style="background-color: #9b9b9b">
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
                            <h5 class="cate">S'abonner</h5>
                            <h3 class="title">Pour obtenir des avantages exclusifs</h3>
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
                                    <a href="{{route('showProductCategories',$categorie->id)}}">{{$categorie->nom}}</a>
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
                             <a href="index.html"><img  src="https://www.auksjonen.no/font/logo_74a1d5.svg" alt="logo"></a>
                        </div>
                        
                        <div class="copyright"><p>&copy; Copyright 2021 | <a href="#0">Sbidu</a> By <a href="#0">Uiaxis</a></p></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--============= Footer Section Ends Here =============-->



    <script src="{{asset('/assets/js/jquery-3.3.1.min.js')}}"></sx>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.weglot.com/weglot.min.js"></script>
<script>
    Weglot.initialize({
        api_key: 'wg_ba2dcb24c7e21c809d78f25e62e5476e2'
    });
</script>
</body>



</html>