


  @extends('layouts.master')
    @section('content')

    <div class="hero-section style-2">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="./index.html">Home</a>
                </li>
                <li>
                    <a href="#0">My Account</a>
                </li>
                <li>
                    <span>My Bids</span>
                </li>
            </ul>
        </div>
        <div class="bg_img hero-bg bottom_center" data-background="./assets/images/banner/hero-bg.png"></div>
    </div>
    <!--============= Hero Section Ends Here =============-->


    <!--============= Dashboard Section Starts Here =============-->
    <section class="dashboard-section padding-bottom mt--240 mt-lg--440 pos-rel">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-7 col-lg-4">
                    <div class="dashboard-widget mb-30 mb-lg-0 sticky-menu">
                        <div class="user">
                            <div class="thumb-area">
                                <div class="thumb">
                                    <img src="./assets/images/dashboard/user.png" alt="user">
                                </div>
                                <label for="profile-pic" class="profile-pic-edit"><i class="flaticon-pencil"></i></label>
                                <input type="file" id="profile-pic" class="d-none">
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="#0">{{$user->nom}}  {{$user->prenom}}</a></h5>
                                <span class="username">{{$user->email}}</span>
                            </div>
                        </div>
                        <ul class="dashboard-menu">
                              <li>
                                <a href="{{route('dashboard')}}"><i class="flaticon-dashboard"></i>Dashboard</a>
                            </li>
                            <li>
                                <a href="{{route('profile')}}" ><i class="flaticon-settings"></i>Profile</a>
                            </li>
                            <li>
                                <a href="{{route('auctions')}}" class="active"><i class="flaticon-auction"></i>Mes Enchères</a>
                            </li>
                            <li>
                                <a href="{{route('winningbids')}}" ><i class="flaticon-best-seller"></i>Enchères gagnantes</a>
                            </li>
                           
                            <li>
                                <a href="{{route('favorits')}}" ><i class="flaticon-star"></i>Favoris</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="dash-bid-item dashboard-widget mb-40-60">
                        <div class="header">
                            <h4 class="title">My Bids</h4>
                            <span class="notify"><i class="flaticon-alarm"></i> Manage Notifications</span>
                        </div>
                        <ul class="button-area nav nav-tabs">
                            <li>
                                <a href="#upcoming" data-toggle="tab" class="custom-button active">Upcoming</a>
                            </li>
                            <li>
                                <a href="#past" data-toggle="tab" class="custom-button">Past</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="upcoming">
                            <div class="row mb-30-none justify-content">
                                @foreach ($encheres as $enchere)
                                    @php
                                        $product = \App\Models\Product::find($enchere->produit_id);
                                    @endphp
                               
                                <div class="col-sm-10 col-md-6">
                                    <div class="auction-item-2">
                                        <div class="auction-thumb">
                                            <a href="./product-details.html"><img src="{{$product->images()->first()->path_logo ?? ""}}" alt="car"></a>
                                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                            <a href="{{route('showProduct',['id'=>$enchere->produit_id])}}" class="bid"><i class="flaticon-auction"></i></a>
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
                                                        <div class="current">Current Bid</div>
                                                        <div class="amount">{{$enchere->currentBid}}DH</div>
                                                    </div>
                                                </div>
                                                <div class="bid-amount">
                                                    <div class="icon">
                                                        <i class="flaticon-money"></i>
                                                    </div>
                                                    <div class="amount-content">
                                                        <div class="current">Your Bid</div>
                                                        <div class="amount">{{$enchere->price}}DH</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="countdown-area">
                                                <div class="countdown">
                                                    <div id="bid_counter26"></div>
                                                </div>
                                                <span class="total-bids">{{$enchere->allBidsCount}} Bids</span>
                                            </div>
                                            <div class="text-center">
                                                <a href="#0" class="custom-button">Submit a bid</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        {{-- comment 
                        
                        <div class="tab-pane fade" id="past">
                            <div class="row justify-content-center mb-30-none">
                                <div class="col-sm-10 col-md-6">
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
                                <div class="col-sm-10 col-md-6">
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
                                <div class="col-sm-10 col-md-6">
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
                                <div class="col-sm-10 col-md-6">
                                    <div class="auction-item-2">
                                        <div class="auction-thumb">
                                            <a href="./product-details.html"><img src="./assets/images/auction/product/04.png" alt="jewelry"></a>
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
                                                    <div id="bid_counter30"></div>
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
                        --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Dashboard Section Ends Here =============-->


    <!--============= Footer Section Starts Here =============-->
 @endsection