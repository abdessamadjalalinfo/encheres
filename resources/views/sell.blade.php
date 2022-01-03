@extends('layouts.master')

@section('stylesheets')
{{-- comment 
<link rel="stylesheet" href="{{asset('assets/css/auksjonen.css')}}"--}}
@endsection



@section('content')
<section class="container" style="margin-top: 167px;">
    <div class=""> 
        <h4 style="text-align: center;margin-bottom:18px">SELL AT NORWAY'S LARGEST ONLINE AUCTION</h4>
        <img src="{{asset('img/landingpagesalestopred_529d65.jpeg')}}" alt="">
    </div>
    <div style="margin-top: 40px;">
        <h5 style="text-align: center;margin-bottom:18px"><a href="{{route("register")}}"><u>PRESS TO SELL AS A PRIVATE PERSON</u></a></h5>
        <img src="{{asset('img/landingpagesalestopblack_0c5b70.jpeg')}}" alt="">
    </div>
    <div style="margin-top: 40px;">
        <h5 style="text-align: center;margin-bottom:18px"><a href="href="{{route("register")}}""><u>PRESS TO SELL AS A COMPANY</a></u></h5>
    </div>
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
@endsection