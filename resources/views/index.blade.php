@extends('layouts.master')

@section('content')
    




  


    <!--============= Banner Section Starts Here =============-->
    <section class="banner-section bg_img" data-background="./assets/images/banner/banner-bg-1.png">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner-content cl-white">
                        <h5 class="cate">Vente aux enchères de nouvelle génération</h5>
                        <h1 class="title"><span class="d-xl-block"> 
Trouver votre
</span> Prochaine affaire !</h1>
                        <p>
                     La vente aux enchères en ligne est l'endroit où tout le monde va acheter, vendre et donner, tout en découvrant la variété et l'abordabilité.   </p>
                        <a href="#0" class="custom-button yellow btn-large">Commencer</a>
                    </div>
                </div>
                <div class="d-none d-lg-block col-lg-4">
                    <div class="banner-thumb-2">
                        <img src="cover.png" alt="banner">
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-shape d-none d-lg-block">
            <img src="./assets/css/img/banner-shape.png" alt="css">
        </div>
    </section>
    <!--============= Banner Section Ends Here =============-->


    <div class="browse-section ash-bg">
        <!--============= Hightlight Slider Section Starts Here =============-->
        <div class="browse-slider-section mt--140">
            <div class="container">
                <div class="section-header-2 cl-white mb-4">
                    <div class="left">
                        <h6 class="title pl-0 w-100">Nos Catégories</h6>
                    </div>
                    <div class="slider-nav">
                        <a href="#0" class="bro-prev"><i class="flaticon-left-arrow"></i></a>
                        <a href="#0" class="bro-next active"><i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
                <div class="m--15">
                    <div class="browse-slider owl-theme owl-carousel">
                        @foreach($categories as $categorie)
                        <a href="#0" class="browse-item">
                            <img src="/img/{{$categorie->path_logo}}" alt="auction">
                            <span class="info">{{ $categorie->nom}}</span>
                        </a>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
        <!--============= Hightlight Slider Section Ends Here =============-->
        
        <!--============= Car Auction Section Starts Here =============-->
        <section class="car-auction-section padding-bottom padding-top pos-rel oh">
            <div class="car-bg"><img src="./assets/images/auction/car/car-bg.png" alt="car"></div>
            <div class="container">
                <div class="section-header-3">
                    <div class="left">
                        <div class="thumb">
                            <img src="./assets/images/header-icons/car-1.png" alt="header-icons">
                        </div>
                        <div class="title-area">
                            <h2 class="title">{{$categories[0]->nom}}</h2>
                            <p>We offer affordable Vehicles</p>
                        </div>
                    </div>
                    <a href="#0" class="normal-button"> Voir plus</a>
                </div>
                <div class="row justify-content-center mb-30-none">
                    <div class="col-sm-10 col-md-6 col-lg-4">
                        <div class="auction-item-2">
                            <div class="auction-thumb">
                                <a href="./product-details.html"><img src="./assets/images/auction/car/auction-1.jpg" alt="car"></a>
                                <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                            </div>
                            @foreach($categories[0]->products as $product)
                            <div class="auction-content">
                                <h6 class="title">
                                    <a href="./product-details.html">{{$product->titre}}</a>
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
                                            <div class="amount">${{$product->premier_prix}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="countdown-area">
                                    <div class="countdown">
                                        <div id="bid_counter26"></div>
                                    </div>
                                    <span class="total-bids">30 Bids</span>
                                </div>
                                <div class="text-center">
                                    <a href="#0" class="custom-button">Proposer</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                   
                    
                </div>
            </div>
        </section>
        <!--============= Car Auction Section Ends Here =============-->
    </div>


    <!--============= Jewelry Auction Section Starts Here =============-->
    <section class="jewelry-auction-section padding-bottom padding-top pos-rel">
        <div class="jewelry-bg d-none d-xl-block"><img src="./assets/images/auction/jewelry/jwelry-bg.png" alt="jewelry"></div>
        <div class="container">
            <div class="section-header-3">
                <div class="left">
                    <div class="thumb">
                        <img src="/img/{{$categories[4]->path_logo}}" alt="header-icons">
                    </div>
                    <div class="title-area">
                        <h2 class="title">{{$categories[4]->nom}}</h2>
                        <p>Ventes aux enchères de bijoux en ligne où vous pouvez enchérir maintenant et économiser de l'argent</p>
                    </div>
                </div>
                <a href="#0" class="normal-button">View All</a>
            </div>
            <div class="row justify-content-center mb-30-none">
                <div class="col-sm-10 col-md-6 col-lg-4">
                    <div class="auction-item-2">
                        <div class="auction-thumb">
                            <a href="./product-details.html"><img src="./assets/images/auction/jewelry/auction-1.jpg" alt="jewelry"></a>
                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                        </div>
                        <div class="auction-content">
                            <h6 class="title">
                                <a href="./product-details.html">Gold Ring With Clear Stones</a>
                            </h6>
                            <div class="bid-area">
                                <div class="bid-amount">
                                    <div class="icon">
                                        <i class="flaticon-auction"></i>
                                    </div>
                                    <div class="amount-content">
                                        <div class="current">Current Bid</div>
                                        <div class="amount">$876.00</div>
                                    </div>
                                </div>
                                <div class="bid-amount">
                                    <div class="icon">
                                        <i class="flaticon-money"></i>
                                    </div>
                                    <div class="amount-content">
                                        <div class="current">Buy Now</div>
                                        <div class="amount">$5,00.00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="countdown-area">
                                <div class="countdown">
                                    <div id="bid_counter23"></div>
                                </div>
                                <span class="total-bids">30 Bids</span>
                            </div>
                            <div class="text-center">
                                <a href="#0" class="custom-button">Submit a bid</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-6 col-lg-4">
                    <div class="auction-item-2">
                        <div class="auction-thumb">
                            <a href="./product-details.html"><img src="./assets/images/auction/jewelry/auction-2.jpg" alt="jewelry"></a>
                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                        </div>
                        <div class="auction-content">
                            <h6 class="title">
                                <a href="./product-details.html">Ring With Clear Stone Accents</a>
                            </h6>
                            <div class="bid-area">
                                <div class="bid-amount">
                                    <div class="icon">
                                        <i class="flaticon-auction"></i>
                                    </div>
                                    <div class="amount-content">
                                        <div class="current">Current Bid</div>
                                        <div class="amount">$876.00</div>
                                    </div>
                                </div>
                                <div class="bid-amount">
                                    <div class="icon">
                                        <i class="flaticon-money"></i>
                                    </div>
                                    <div class="amount-content">
                                        <div class="current">Buy Now</div>
                                        <div class="amount">$5,00.00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="countdown-area">
                                <div class="countdown">
                                    <div id="bid_counter24"></div>
                                </div>
                                <span class="total-bids">30 Bids</span>
                            </div>
                            <div class="text-center">
                                <a href="#0" class="custom-button">Submit a bid</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-6 col-lg-4">
                    <div class="auction-item-2">
                        <div class="auction-thumb">
                            <a href="./product-details.html"><img src="./assets/images/auction/jewelry/auction-3.jpg" alt="jewelry"></a>
                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                        </div>
                        <div class="auction-content">
                            <h6 class="title">
                                <a href="./product-details.html">Gold Ring With Clear Stones</a>
                            </h6>
                            <div class="bid-area">
                                <div class="bid-amount">
                                    <div class="icon">
                                        <i class="flaticon-auction"></i>
                                    </div>
                                    <div class="amount-content">
                                        <div class="current">Current Bid</div>
                                        <div class="amount">$876.00</div>
                                    </div>
                                </div>
                                <div class="bid-amount">
                                    <div class="icon">
                                        <i class="flaticon-money"></i>
                                    </div>
                                    <div class="amount-content">
                                        <div class="current">Buy Now</div>
                                        <div class="amount">$5,00.00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="countdown-area">
                                <div class="countdown">
                                    <div id="bid_counter25"></div>
                                </div>
                                <span class="total-bids">30 Bids</span>
                            </div>
                            <div class="text-center">
                                <a href="#0" class="custom-button">Submit a bid</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Jewelry Auction Section Ends Here =============-->


    <!--============= Call In Section Starts Here =============-->
    <section class="call-in-section padding-top pt-max-xl-0">
        <div class="container">
            <div class="call-wrapper cl-white bg_img" data-background="./assets/images/call-in/call-bg.png">
                <div class="section-header">
                    <h3 class="title">Register for Free & Start Bidding Now!</h3>
                    <p>From cars to diamonds to iPhones, we have it all.</p>
                </div>
                <a href="sign-up.html" class="custom-button white">Register</a>
            </div>
        </div>
    </section>
    <!--============= Call In Section Ends Here =============-->


    <!--============= Watches Auction Section Starts Here =============-->
   
    <!--============= Watches Auction Section Ends Here =============-->


    <!--============= Popular Auction Section Starts Here =============-->
    <section class="popular-auction padding-top pos-rel">
        <div class="popular-bg bg_img" data-background="./assets/images/auction/popular/popular-bg.png"></div>
        <div class="container">
            <div class="section-header cl-white">
                <span class="cate">Closing Within 24 Hours</span>
                <h2 class="title">Popular Auctions</h2>
                <p>Bid and win great deals,Our auction process is simple, efficient, and transparent.</p>
            </div>
            <div class="popular-auction-wrapper">
                <div class="row justify-content-center mb-30-none">
                    <div class="col-lg-6">
                        <div class="auction-item-3">
                            <div class="auction-thumb">
                                <a href="./product-details.html"><img src="./assets/images/auction/popular/auction-1.jpg" alt="popular"></a>
                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                            </div>
                            <div class="auction-content">
                                <h6 class="title">
                                    <a href="./product-details.html">Apple Macbook Pro Laptop</a>
                                </h6>
                                <div class="bid-amount">
                                    <div class="icon">
                                        <i class="flaticon-auction"></i>
                                    </div>
                                    <div class="amount-content">
                                        <div class="current">Current Bid</div>
                                        <div class="amount">$876.00</div>
                                    </div>
                                </div>
                                <div class="bids-area">
                                    Total Bids : <span class="total-bids">130 Bids</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="auction-item-3">
                            <div class="auction-thumb">
                                <a href="./product-details.html"><img src="./assets/images/auction/popular/auction-2.jpg" alt="popular"></a>
                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                            </div>
                            <div class="auction-content">
                                <h6 class="title">
                                    <a href="./product-details.html">Canon EOS Rebel T6I
                                        Digital Camera</a>
                                </h6>
                                <div class="bid-amount">
                                    <div class="icon">
                                        <i class="flaticon-auction"></i>
                                    </div>
                                    <div class="amount-content">
                                        <div class="current">Current Bid</div>
                                        <div class="amount">$876.00</div>
                                    </div>
                                </div>
                                <div class="bids-area">
                                    Total Bids : <span class="total-bids">130 Bids</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="auction-item-3">
                            <div class="auction-thumb">
                                <a href="./product-details.html"><img src="./assets/images/auction/popular/auction-3.jpg" alt="popular"></a>
                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                            </div>
                            <div class="auction-content">
                                <h6 class="title">
                                    <a href="./product-details.html">14k Gold Geneve Watch,
                                        24.5g</a>
                                </h6>
                                <div class="bid-amount">
                                    <div class="icon">
                                        <i class="flaticon-auction"></i>
                                    </div>
                                    <div class="amount-content">
                                        <div class="current">Current Bid</div>
                                        <div class="amount">$876.00</div>
                                    </div>
                                </div>
                                <div class="bids-area">
                                    Total Bids : <span class="total-bids">130 Bids</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="auction-item-3">
                            <div class="auction-thumb">
                                <a href="./product-details.html"><img src="./assets/images/auction/popular/auction-4.jpg" alt="popular"></a>
                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                            </div>
                            <div class="auction-content">
                                <h6 class="title">
                                    <a href="./product-details.html">14K White Gold 185.60
                                        Grams 5.95 Carats</a>
                                </h6>
                                <div class="bid-amount">
                                    <div class="icon">
                                        <i class="flaticon-auction"></i>
                                    </div>
                                    <div class="amount-content">
                                        <div class="current">Current Bid</div>
                                        <div class="amount">$876.00</div>
                                    </div>
                                </div>
                                <div class="bids-area">
                                    Total Bids : <span class="total-bids">130 Bids</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="auction-item-3">
                            <div class="auction-thumb">
                                <a href="./product-details.html"><img src="./assets/images/auction/popular/auction-5.jpg" alt="popular"></a>
                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                            </div>
                            <div class="auction-content">
                                <h6 class="title">
                                    <a href="./product-details.html">2009 Toyota Prius
                                        (Medford, NY 11763)</a>
                                </h6>
                                <div class="bid-amount">
                                    <div class="icon">
                                        <i class="flaticon-auction"></i>
                                    </div>
                                    <div class="amount-content">
                                        <div class="current">Current Bid</div>
                                        <div class="amount">$876.00</div>
                                    </div>
                                </div>
                                <div class="bids-area">
                                    Total Bids : <span class="total-bids">130 Bids</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="auction-item-3">
                            <div class="auction-thumb">
                                <a href="./product-details.html"><img src="./assets/images/auction/popular/auction-6.jpg" alt="popular"></a>
                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                            </div>
                            <div class="auction-content">
                                <h6 class="title">
                                    <a href="./product-details.html">.6 Gram Pure Gold
                                        Nugget</a>
                                </h6>
                                <div class="bid-amount">
                                    <div class="icon">
                                        <i class="flaticon-auction"></i>
                                    </div>
                                    <div class="amount-content">
                                        <div class="current">Current Bid</div>
                                        <div class="amount">$876.00</div>
                                    </div>
                                </div>
                                <div class="bids-area">
                                    Total Bids : <span class="total-bids">130 Bids</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--============= How Section Starts Here =============-->
    <section class="how-section padding-top">
        <div class="container">
            <div class="how-wrapper section-bg">
                <div class="section-header text-lg-left">
                    <h2 class="title">How it works</h2>
                    <p>Easy 3 steps to win</p>
                </div>
                <div class="row justify-content-center mb--40">
                    <div class="col-md-6 col-lg-4">
                        <div class="how-item">
                            <div class="how-thumb">
                                <img src="./assets/images/how/how1.png" alt="how">
                            </div>
                            <div class="how-content">
                                <h4 class="title">Sign Up</h4>
                                <p>No Credit Card Required</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="how-item">
                            <div class="how-thumb">
                                <img src="./assets/images/how/how2.png" alt="how">
                            </div>
                            <div class="how-content">
                                <h4 class="title">Bid</h4>
                                <p>Bidding is free Only pay if you win</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="how-item">
                            <div class="how-thumb">
                                <img src="./assets/images/how/how3.png" alt="how">
                            </div>
                            <div class="how-content">
                                <h4 class="title">Win</h4>
                                <p>Fun - Excitement - Great deals</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= How Section Ends Here =============-->


    <!--============= Client Section Starts Here =============-->
    <section class="client-section padding-top padding-bottom">
        <div class="container">
            <div class="section-header">
                <h2 class="title">Don’t just take our word for it!</h2>
                <p>Our hard work is paying off. Great reviews from amazing customers.</p>
            </div>
            <div class="m--15">
                <div class="client-slider owl-theme owl-carousel">
                    <div class="client-item">
                        <div class="client-content">
                            <p>I can't stop bidding! It's a great way to spend some time and I want everything on Sbidu.</p>
                        </div>
                        <div class="client-author">
                            <div class="thumb">
                                <a href="#0">
                                    <img src="./assets/images/client/client01.png" alt="client">
                                </a>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="#0">Alexis Moore</a></h6>
                                <div class="ratings">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="client-item">
                        <div class="client-content">
                            <p>I came I saw I won. Love what I have won, and will try to win something else.</p>
                        </div>
                        <div class="client-author">
                            <div class="thumb">
                                <a href="#0">
                                    <img src="./assets/images/client/client02.png" alt="client">
                                </a>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="#0">Darin Griffin</a></h6>
                                <div class="ratings">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="client-item">
                        <div class="client-content">
                            <p>This was my first time, but it was exciting. I will try it again. Thank you so much.</p>
                        </div>
                        <div class="client-author">
                            <div class="thumb">
                                <a href="#0">
                                    <img src="./assets/images/client/client03.png" alt="client">
                                </a>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="#0">Tom Powell</a></h6>
                                <div class="ratings">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Client Section Ends Here =============-->


@endsection