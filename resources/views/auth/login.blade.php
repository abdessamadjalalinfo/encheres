@extends('layouts.master')

@section('content')
<style>
        .account-wrapper .right-side {
    
    background: -webkit-linear-gradient(
90deg, #9b9b9b 0%, #8a8c9e 56%, #9b9b9b 100%);
    background: -ms-linear-gradient(90deg, #5140fe 0%, #7757f7 56%, #9d6ef0 100%);
    justify-content: center;
    align-items: center;
    width: 350px;
    padding: 60px 30px;
    -webkit-border-radius: 0 10px 10px 0;
    -moz-border-radius: 0 10px 10px 0;
    border-radius: 0 10px 10px 0;
}
    </style>
    <!--============= Hero Section Starts Here =============-->
    <div class="hero-section">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="./index.html">Home</a>
                </li>
                <li>
                    <a href="#0">Pages</a>
                </li>
                <li>
                    <span>Sign In</span>
                </li>
            </ul>
        </div>
        <div class="bg_img hero-bg bottom_center" data-background="./assets/images/banner/hero-bg.png"></div>
    </div>
    <!--============= Hero Section Ends Here =============-->
    <!--============= Account Section Starts Here =============-->
    <section class="account-section padding-bottom">
        <div class="container">
            <div class="account-wrapper mt--100 mt-lg--440">
                <div class="left-side">
                    <div class="section-header">
                        <h2 class="title">HI, THERE</h2>
                        <p>You can log in to your Sbidu account here.</p>
                    </div>
                    <form class="login-form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group mb-30">
                            <label for="login-email"><i class="far fa-envelope"></i></label>
                            <input type="email" id="login-email" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus required placeholder="Email Address">
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="login-pass"><i class="fas fa-lock"></i></label>
                            <input type="password" id="login-pass" required name="password" placeholder="Password">
                            <span class="pass-type"><i class="fas fa-eye"></i></span>
                        </div>
                        <div class="form-group">
                            <a href="#0">Forgot Password?</a>
                        </div>
                        <div class="form-group mb-0">
                            <button type="submit" class="custom-button">LOG IN</button>
                        </div>
                    </form>
                </div>
                <div class="right-side cl-white">
                    <div class="section-header mb-0">
                        <h3 class="title mt-0">NEW HERE?</h3>
                        <p>Sign up and create your Account</p>
                        <a href="{{route('register')}}" class="custom-button transparent">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="container">
     <h2 style="text-align: center; margin-bottom: 10px;">We help your company with sales!</h2>
        <div class="row">
            
            <div class="col-4 card card-body">
                <img width="100px" height="100px" src="https://www.auksjonen.no/img/round_thumb_up_black_48dp_442aec.png" alt="">
                <h3>NO RISK</h3>
            <h6>No sales</h6>
            <h6>No Cost</h6>
            </div>
             <div class="col-4 card card-body">
                <img width="100px" height="100px" src="https://www.auksjonen.no/img/round_public_black_48dp_c89480.png" alt="">
                <h4>WIDE ANNOUNCEMENT</h4>
            <h6>Advertising on</h6>
            <h6>Auction.Ma</h6></div>
             <div class="col-4 card card-body">
                <img width="100px" height="100px" src="https://www.auksjonen.no/img/round_payment_black_48dp_fc4ec8.png" alt="">
                <h3>SAFE SETTLEMENT</h3>
            <h6>We handle the</h6>
            <h6>money for you!</h6></div>
               
            
         
        </div>
    </section>

    <section class="container">
        <div class="row">
            <div class="col-12" style="text-align: center">
                <h3 style="margin-top: 30px;"> Want to know more about how it works? Press here</h3>  
               

            </div>
        </div>

    </section>
     <section class="container">
        <div class="row">
            <div style="margin-top: 30px">
                <div class="card">
                <div class="card-body">
                     <div class="row">
                  <div class="col-2">
                    <img  width="100px" height="100px"  src="https://www.auksjonen.no/img/otto_winterstad_2d0fbf.jpg" alt="">  
                  </div>
                  <div class="col-10">
                      <h6 style="margin-bottom: 7px;">Auksjonen.no has our clear recommendation</h6>
                    <p>Auksjonen.no, with very good help from our permanent contact person, strongly contributes to facilitating our work with the sale of used equipment. We save a lot of time by having them line up with us and take care of all the practicalities before, during and after all sales. For us, this is the only real opportunity to dispose of our used equipment. Auksjonen.no has our clear recommendation!
Otto Winterstad, Dalig leader Edh Utleie</p>
                  </div> 
                     </div>  
                </div>    
                </div>               

            </div>
        </div>

    </section>
    <!--============= Account Section Ends Here =============-->
@endsection