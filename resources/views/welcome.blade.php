@extends('layouts.master')

@section('content')
  <style>
      .img-h {
   float: left;
    width:  100%;
    height: 150px;    object-fit: cover;
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






  


   

    <div class="browse-section ash-bg" >
       
        <!--============= Hightlight Slider Section Starts Here =============-->
        <div class="browse-slider-section " style="top: 166px; margin-bottom: 88px;">
            <div class="container">
                <div class="row">
                    
                  

                              <img  class="col" style="margin-bottom: 24px;" src="https://www.auksjonen.no/api/banner/Topp%20rd%20desktop%20-%20selge%20bil%20-%2008122020.jpg" alt="">
          
                   
                </div>
            </div>
            <div class="container">
                 
                <div class="section-header-2 cl-white mb-4">
                    <div class="left">
                        <h6 style="color:black" class="title pl-0 w-100">Nos Catégories</h6>
                    </div>
                    <div class="slider-nav">
                        <a href="#0" class="bro-prev active"><i class="flaticon-left-arrow"></i></a>
                        <a href="#0" class="bro-next active"><i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
                <div class="m--15">
                    <div class="browse-slider owl-theme owl-carousel">
                        @foreach($categories as $categorie)
                        <a href="{{route('showProductCategories',['id'=>$categorie->id])}}" class="browse-item">
                            <img src="{{asset($categorie->path_logo)}}" alt="auction">
                            <span class="info">{{ $categorie->nom}}</span>
                        </a>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
        <!--============= Hightlight Slider Section Ends Here =============-->
        
        <section style="padding-bottom: 0px;" class="car-auction-section padding-bottom padding-top pos-rel oh">
            <div class="car-bg"></div>
            <div class="container">
                <div class="section-header-3">
                    <div class="left">
                        <div class="thumb">
                            <img src="{{asset('/assets/images/header-icons/car-1.png')}}" alt="header-icons">
                        </div>
                        <div class="title-area">
                            <h2 class="title">Les dernières annonces</h2>
                        </div>
                    </div>
                </div>
                
                <div class="row justify-content mb-55-none">
                    @foreach(App\Models\Product::all()->take(8) as $product)
                    <div style="margin-top: 7px;border-radius: 30px;" class="col-sm-10 col-md-3 col-lg-3">
                         <div class="card">
<a href="{{route('showProduct',$product->id)}}"><img style="float: left;
    width:  100%;
    height: 150px;    object-fit: cover;" src="{{$product->images()->first()->path_logo ?? ""}}" alt="car"></a>
                      <div class="card-body" style="height: 80px">
                        <a href="{{route('showProduct',$product->id)}}"><h6>
                              {{substr($product->titre,0, 20)}}
                       
                            
                         </h6></a> 
                        </div >
                          <p style="display: inline-block;;color:#cf031c;margin-bottom: 11px">{{$product->premier_prix}}MAD</p>
                          <p style="display: inline-block;">{{App\Models\User::find($product->owner_id)->ville}}</p>
                          
</div>
                    </div>
                    @endforeach
                    
                </div>
                
            </div>
        </section>  <!--============= Car Auction Section Starts Here =============-->
      
        <section class="car-auction-section padding-bottom padding-top pos-rel oh">
            <div class="car-bg"></div>
            <div class="container">
                <div class="section-header-3">
                    <div class="left">
                        <div class="thumb">
                            <img src="{{asset('/assets/images/header-icons/car-1.png')}}" alt="header-icons">
                        </div>
                        <div class="title-area">
                            <h2 class="title">{{$categories[0]->nom}}({{$categories[0]->products()->where('etat','normal')->count()}})</h2>
                            <p>Nous offrons des véhicules abordables</p>
                        </div>
                    </div>
                    <a href="{{route('showProductCategories',['id'=>$categories[0]->id])}}" class="normal-button"> Voir plus</a>
                </div>
                
                <div class="row justify-content mb-55-none">
                    @foreach($categories[0]->products->where('etat','normal')->take(4) as $product)
                    <div class="col-sm-10 col-md-4 col-lg-4">
                        <div class="auction-item-2 card h-80">
                            
                           
                            <div class="auction-thumb">
                                <a href="{{route('showProduct',$product->id)}}"><img class="img-h" src="{{$product->images()->first()->path_logo ?? ""}}" alt="car"></a>
                                <a href="{{route('showProduct',$product->id)}}" class="rating"><i class="far fa-star"></i></a>
                                <a href="{{route('showProduct',$product->id)}}" class="bid"><i class="flaticon-auction"></i></a>
                            </div>
                            <div class="auction-content">
                                <h6 class="title">
                                    <a href="{{route('showProduct',$product->id)}}">  {{substr($product->titre,0, 30)}}</a>
                                </h6>
                                <div class="bid-area">
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">prix courant</div>
                                            <div class="amount"style="font-size: 13px;">{{\App\Models\Enchere::all()->where('produit_id', $product->id)->max('price') ?? $product->premier_prix}}</div>
                                        </div>
                                    </div>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-money"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">premier prix</div>
                                            <div class="amount" style="font-size: 13px;">{{$product->premier_prix}}MAD</div>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="text-center">
                                    <a href="{{route('showProduct',$product->id)}}" class="custom-button">Proposer</a>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    @endforeach
                    
                </div>
                
            </div>
        </section>
    </div>
    <style>
        .auction{
             color: #cf031c;
    font-size: 3pc;
    font-weight: 700;
    height: 4pc;

        }
    </style>

    <section>
<div class="container">
    <div class="row">
        <div class="col-sm-10 col-md-3 col-lg-3 card card-body"> <h3 class="auction">1526</h3>
                           <h6> <b>AUCTIONS IN PROGRESS</b></h6>
        </div> 
        <div class="col-sm-10 col-md-3 col-lg-3 card card-body"> <h3 class="auction">1526</h3>
                           <h6> <b>AUCTIONS CAR</b></h6>
        </div> 
    
   
        <div class="col-sm-10 col-md-3 col-lg-3 card card-body"> <h3 class="auction">1526</h3>
                           <h6> <b>AUCTIONS BUILDINGS AND FACILITIES</b></h6>
        </div> 
    
   
        <div class="col-sm-10 col-md-3 col-lg-3 card card-body"> <h3 class="auction">1526</h3>
                           <h6> <b>AUCTIONS SQUARE</b></h6>
        </div> 
    </div>
   
        
    
</div>

    </section>
    


    <!--============= Jewelry Auction Section Starts Here =============-->
    <section class="jewelry-auction-section padding-bottom padding-top pos-rel">
        <div class="jewelry-bg d-none d-xl-block"><img src="./assets/images/auction/jewelry/jwelry-bg.png" alt="jewelry"></div>
        <div class="container">
            <div class="section-header-3">
                <div class="left">
                    <div class="thumb">
                        <img src="{{asset($categories[4]->path_logo)}}" alt="header-icons">
                    </div>
                    <div class="title-area">
                        <h2 class="title">{{$categories[4]->nom}} ({{$categories[4]->products()->count()}})</h2>
                        <p>Ventes aux enchères de bijoux en ligne où vous pouvez enchérir maintenant et économiser de l'argent</p>
                    </div>
                </div>
                <a href="{{route('showProductCategories',['id'=>$categories[4]->id])}}" class="normal-button">Voir plus</a>
            </div>
            <div class="row justify-content mb-30-none">
               
                    @foreach($categories[4]->products->where('etat','normal')->take(4) as $product)
                     <div class="col-sm-10 col-md-4 col-lg-4 ">
                    <div class="auction-item-2 card h-80">
                        <div class="auction-thumb">
                            <a href="{{route('showProduct',$product->id)}}"><img class="img-h" src="{{$product->images[0]->path_logo}}" alt="jewelry"></a>
                            <a href="{{route('showProduct',$product->id)}}" class="rating"><i class="far fa-star"></i></a>
                            <a href="{{route('showProduct',$product->id)}}" class="bid"><i class="flaticon-auction"></i></a>
                        </div>
                        <div class="auction-content">
                                <h6 class="title">
                                    <a href="{{route('showProduct',$product->id)}}">{{$product->titre}}</a>
                                </h6>
                                <div class="bid-area">
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div style="font-size: 13px;" class="current">prix courant</div>
                                            <div style="font-size: 13px;" class="amount">$876.00</div>
                                        </div>
                                    </div>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-money"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div style="font-size: 13px;" class="current">premier prix</div>
                                            <div style="font-size: 13px;" class="amount">{{$product->premier_prix}}MAD</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="text-center">
                                    <a href="{{route('showProduct',$product->id)}}" class="custom-button">Proposer</a>
                                </div>
                            </div>
                    </div>
                     </div>
                    @endforeach
               
                
                
            </div>
        </div>
    </section>
    <!--============= Jewelry Auction Section Ends Here =============-->


    <!--============= Call In Section Starts Here =============-->
    <!--section class="call-in-section padding-top pt-max-xl-0">
        <div class="container">
            <div class="call-wrapper cl-white bg_img" data-background="./assets/images/call-in/call-bg.png">
                <div class="section-header">
                    <h3 class="title">Inscrivez-vous gratuitement et commencez à enchérir maintenant !</h3>
                   
                </div>
                <a href="sign-up.html" class="custom-button white">S'inscrire</a>
            </div>
        </div>
    </!--section-->
    <!--============= Call In Section Ends Here =============-->




    <!--============= How Section Starts Here =============-->
    <section class="how-section padding-top">
        <div class="container">
            <div class="how-wrapper section-bg">
                <div class="section-header text-lg-left">
                    <h2 class="title">Comment ça fonctionne ?</h2>
                    <p>3 étapes faciles pour gagner</p>
                </div>
                <div class="row justify-content-center mb--40">
                    <div class="col-md-6 col-lg-4">
                        <div class="how-item">
                            <div class="how-thumb">
                                <img src="./assets/images/how/how1.png" alt="how">
                            </div>
                            <div class="how-content">
                                <h4 class="title">S'inscrire</h4>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="how-item">
                            <div class="how-thumb">
                                <img src="./assets/images/how/how2.png" alt="how">
                            </div>
                            <div class="how-content">
                                <h4 class="title">Proposer </h4>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="how-item">
                            <div class="how-thumb">
                                <img src="./assets/images/how/how3.png" alt="how">
                            </div>
                            <div class="how-content">
                                <h4 class="title">Gagne</h4>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= How Section Ends Here =============-->


    <!--============= Client Section Starts Here =============-->
    <!--section class="client-section padding-top padding-bottom">
        <div class="container">
            <div class="section-header">
                <h2 class="title">Ne vous contentez pas de nous croire sur parole !!</h2>
                <p>Notre travail acharné porte ses fruits. Excellentes critiques de clients incroyables.</p>
            </div>
            <div class="m--15">
                <div class="client-slider owl-theme owl-carousel">
                    <div class="client-item">
                        <div class="client-content">
                            <p>I can't stop bidding! It's a great way to spend some time and I want everything on Auction.</p>
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
    </!--section-->
    <!--============= Client Section Ends Here =============-->


@endsection

   