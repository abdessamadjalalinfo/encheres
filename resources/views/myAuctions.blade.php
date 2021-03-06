


  @extends('layouts.master')
    @section('content')
    <style>
      .img-h {
    float: left;
    width:  100px;
    height: 100px;
    object-fit: cover;
}
.slider-nav a.active, .slider-nav a:hover {
    color: #ffffff;
    background: -moz-linear-gradient(45deg, #000000 0%, #c5c5c5 100%);
    background: -webkit-linear-gradient(
45deg, #000000 0%, #ffffff 100%);
    background: -ms-linear-gradient(45deg,#000000 0%, #949494 100%);
    box-shadow: 0.731px 5.955px 13px 0px rgb(40 58 140 / 25%);
}
</style>  

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
                    <span>Mes enchères</span>
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
                @include("layouts.sidebarDashboard",['bids'=>'active'])
                <div class="col-lg-8">
                    <div class="dash-bid-item dashboard-widget mb-40-60">
                        <div class="header">
                            <h4 class="title">Mes enchères</h4>
                
                        </div>
                       
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
                                            <a href="{{route('showProduct',['id'=>$enchere->produit_id])}}"><img  class="img-h"src="{{$product->images()->first()->path_logo ?? ""}}" alt="car"></a>
                                            <a href="{{route('showProduct',['id'=>$enchere->produit_id])}}" class="rating"><i class="far fa-star"></i></a>
                                            <a href="{{route('showProduct',['id'=>$enchere->produit_id])}}" class="bid"><i class="flaticon-auction"></i></a>
                                        </div>
                                        <div class="auction-content">
                                            <h6 class="title">
                                                <a href="{{route('showProduct',['id'=>$enchere->produit_id])}}">{{$product->titre}}</a>
                                            </h6>
                                            <div class="bid-area">
                                                <div class="bid-amount">
                                                    <div class="icon">
                                                        <i class="flaticon-auction"></i>
                                                    </div>
                                                    <div class="amount-content">
                                                        <div class="current">Prix Courant</div>
                                                        <div class="amount">{{$enchere->currentBid}}DH</div>
                                                    </div>
                                                </div>
                                                <div class="bid-amount">
                                                    <div class="icon">
                                                        <i class="flaticon-money"></i>
                                                    </div>
                                                    <div class="amount-content">
                                                        <div class="current">Votre enchère</div>
                                                        <div class="amount">{{$enchere->price}}DH</div>
                                                    </div>
                                                </div>
                                            </div>
                                                 <?php
               

                        
                        $dernier_enchere = App\Models\Enchere::all()->where('produit_id',  $product->id)->SortBy('price')->last();
                        if ($dernier_enchere) {
                            $date_expires ="Expire le :".(Carbon\Carbon::parse($dernier_enchere->created_at)->addHours($product->duree));
                         } else {
                          $date_expires = "aucun enchère";
                         }
                         $min = \App\Models\Enchere::all()->where('produit_id', $product->id)->max('price');
                         
                         
                        ?>
                                            <div class="countdown-area">
                                                <div class="countdown">
                                                    {{ $date_expires}}
                                                </div>
                                                <span class="total-bids">{{$enchere->allBidsCount}} Enc.</span>
                                            </div>
                                       
                                            <div class="text-center">
                                                @if($product->etat=="expiré")
                                                 <a href="{{route('showProduct',$product->id)}}" class="btn btn-danger">Expiré</a>
                                                 @else
                                                <a href="{{route('showProduct',$product->id)}}" class="custom-button">Proposer</a>
                                                @endif
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