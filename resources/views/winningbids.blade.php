  @extends('layouts.master')
    @section('content')
    <div class="hero-section style-2">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="./index.html">Home</a>
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
                                <h5 class="title"><a href="#0">{{$user->nom}} {{$user->prenom}}</a></h5>
                                <span class="username">{{$user->email}}</span>
                            </div>
                        </div>
                        <ul class="dashboard-menu">
                            <li>
                                <a href="{{route('dashboard')}}"><i class="flaticon-dashboard"></i>Dashboard</a>
                            </li>
                            <li>
                                <a href="{{route('profile')}}"><i class="flaticon-settings"></i>Profile</a>
                            </li>
                            <li>
                                <a href="{{route('auctions')}}"><i class="flaticon-auction"></i>Mes Enchères</a>
                            </li>
                            <li>
                                <a href="{{route('winningbids')}}" class="active"><i class="flaticon-best-seller"></i>Enchères gagnantes</a>
                            </li>
                           
                            <li>
                                <a href="{{route('favorits')}}"><i class="flaticon-star"></i>Favoris</a>
                            </li>
                           
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="dash-bid-item dashboard-widget mb-40-60">
                        <div class="header">
                            <h4 class="title">Enchères gagnantes</h4>
                        </div>
                        <div class="button-area justify-content-between">
                            <form class="product-search">
                                <input type="text" placeholder="Item Name">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                            <div class="sort-winning-bid">
                                <div class="item">Sort By : </div>
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

                    @foreach ($user->wins()->get('enchere_id') as $EnchereId)
                    @php  $product=App\Models\Product::find(App\Models\Enchere::find($EnchereId->enchere_id)->produit_id); @endphp
                    <div class="row mb-30-none justify-content">
                        <div class="col-sm-10 col-md-6">
                            <div class="auction-item-2">
                                <div class="auction-thumb">
                                    <a href="./product-details.html"><img src="{{asset($product->images()->first()->path_logo)}}" alt="car"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
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
                                                <div class="current">Dernier Prix</div>
                                                <div class="amount">$876.00</div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                   
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--============= Dashboard Section Ends Here =============-->


@endsection