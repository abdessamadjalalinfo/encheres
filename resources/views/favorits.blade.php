

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
                    <span>My Favorites</span>
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
                @include("layouts.sidebarDashboard",['favoris'=>'active'])
                <div class="col-lg-8">
                    <div class="dash-bid-item dashboard-widget mb-40-60">
                        <div class="header">
                            <h4 class="title">My Favorites</h4>
                        </div>
                        <div class="button-area justify-content-between">
                            <form class="product-search">
                                <input type="text" placeholder="Item Name">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                            <div class="sort-winning-bid">
                                <div class="item">Trier par: </div>
                                <select name="sort-by" class="select-bar">
                                    <option value="all">All</option>
                                    <option value="name">Name</option>
                                    <option value="date">Date</option>
                                    <option value="type">Type</option>
                                    <option value="car">Car</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <style>
                        .img-h{
    float: left;
    width:  200px;
    height: 200px;
    object-fit: cover;
}
                    </style>

                
                    <div class="row mb-20-none justify-content">
                     
                      @foreach ($user->favorits()->get() as $favorit) 
            
       
                         <?php
               

                        $product=App\Models\Product::find($favorit->produit_id);
                        $dernier_enchere = App\Models\Enchere::all()->where('produit_id',  $product->id)->SortBy('price')->last();
                        if ($dernier_enchere) {
                            $date_expires ="Expire le :".(Carbon\Carbon::parse($dernier_enchere->created_at)->addHours($product->duree));
                         } else {
                          $date_expires = "aucun enchère";
                         }
                         $min = \App\Models\Enchere::all()->where('produit_id', $product->id)->max('price');
                         
                         
                        ?>
                        <div class="col-sm-10 col-md-5">
                            <div class="auction-item-2">
                                <div class="auction-thumb">
                                    <a href="{{route('showProduct',$product->id)}}"><img class="img-h" src="{{$product->images()->first()->path_logo ?? ""}}" alt="car"></a>
                                    <a href="{{route('showProduct',$product->id)}}" class="rating"><i class="far fa-star"></i></a>
                                    <a href="{{route('showProduct',$product->id)}}" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="{{route('showProduct',$product->id)}}"> {{$product->titre}}</a>
                                    </h6>
                                    <div class="bid-area">
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-auction"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Dernier Prix</div>
                                                <div class="amount">{{$min ?? $product->premier_prix}} MAD</div>
                                            </div>
                                        </div>
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-money"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Prix de départ</div>
                                                <div class="amount"> {{$product->premier_prix}} MAD</div>
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
            </div>
        </div>
    </section>
    <!--============= Dashboard Section Ends Here =============-->


    <!--============= Footer Section Starts Here =============-->
    @endsection