  @extends('layouts.master')
    @section('content')
    <style>
              .img-h {
   float: left;
    width:  100%;
    height: 150px;    object-fit: cover;
}
    </style>
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
                    <span>Enchères gagnantes</span>
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
                @include("layouts.sidebarDashboard",['wins'=>'active'])
                <div class="col-lg-8">
                    <div class="dash-bid-item dashboard-widget mb-40-60">
                        <div class="header">
                            <h4 class="title">Enchères gagnantes</h4>
                        </div>
                              <p><b>Contacter l'admin sur: <b>admin@auction.ma</b> pour voir les informations de l'annonceur veuillez mentionnez le nom de l'annonce.</b> </p>
                      
                        
                    </div>

   <div class="row mb-30-none justify-content">
                         @foreach ($user->wins()->get('enchere_id') as $EnchereId)
                    @php  $product=App\Models\Product::find(App\Models\Enchere::find($EnchereId->enchere_id)->produit_id); @endphp
                   
                        <div class="col-sm-10 col-md-6">
                            <div class="auction-item-2">
                                <div class="auction-thumb">
                                    <a href="{{route('showProduct',$product->id)}}"><img class="img-h" src="{{asset($product->images()->first()->path_logo ?? "")}}" alt="car"></a>
                                    <a href="{{route('showProduct',$product->id)}}" class="rating"><i class="far fa-star"></i></a>
                                    <a href="{{route('showProduct',$product->id)}}" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="{{route('showProduct',$product->id)}}">{{$product->titre}}</a>
                                    </h6>
                                    
                                   
                                    
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


@endsection