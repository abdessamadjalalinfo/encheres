<div class="col-sm-10 col-md-7 col-lg-4">
    <div class="dashboard-widget mb-30 mb-lg-0">
        <div class="user">
            <div class="thumb-area">
                <div class="thumb">
                    <img src="./assets/images/dashboard/user.png" alt="user">
                </div>
                <label for="profile-pic" class="profile-pic-edit"><i class="flaticon-pencil"></i></label>
                <input type="file" id="profile-pic" class="d-none">
            </div>
            <div class="content">  
                <h5 class="title"><a href="#0">{{Auth::user()->nom}} {{Auth::user()->prenom}}</a></h5>
                <span class="username">{{Auth::user()->email}}</span>
            </div>
        </div>
        <ul class="dashboard-menu">
             <li>
                <a href="{{route('dashboard')}}" class="{{$dashboard ?? ''}}" class=""><i class="flaticon-dashboard"></i>Dashboard</a>
            </li>
            <li>
                <a href="{{route('profile')}}" class="{{$profile ?? ''}}"><i class="flaticon-settings"></i>Profile</a>
            </li>
            <li>
                <a href="{{route('auctions')}}" class="{{$bids ?? ''}}"><i class="flaticon-auction"></i>Mes Enchères</a>
            </li>
            <li>
                <a href="{{route('winningbids')}}" class="{{$wins ?? ''}}" ><i class="flaticon-best-seller"></i>Enchères gagnantes</a>
            </li>
           
            <li>
                <a href="{{route('favorits')}}" class="{{$favoris ?? ''}}"><i class="flaticon-star"></i>Favoris</a>
            </li>
            <li>
                <a href="{{route('addProduct')}}" class="{{$ajouterAnnonce ?? ''}}"> <b>+</b><i class="flaticon-like"></i></i>Ajouter un produit</a>
            </li>
            <li>
                <a href="{{route('myProducts')}}" class="{{$mesAnnonces ?? ''}}"> <b>+</b><i class="flaticon-like "></i></i>Mes Produits</a>
            </li>
        </ul>
    </div>
</div>