@extends('layouts.master')

@section('stylesheets')
{{-- comment 
<link rel="stylesheet" href="{{asset('assets/css/auksjonen.css')}}"--}}
@endsection

    <div class="browse-section ash-bg" >
       
        <!--============= Hightlight Slider Section Starts Here =============-->
        <div class="browse-slider-section " style="top: 166px; margin-bottom: 88px;">
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
                   <h6 style="text-align:center;margin-top: 9px;">Create user now to get access to sell with us!
</h6>        
<div style="margin-left: 500px;margin-top: 44px;">
            <a href="http://127.0.0.1:8000/register" class="custom-button">Register</a>
        </div>

            </div>
                    
            
        </div>

    </section>
        
        </div>
    </div>


@section('content')

@endsection


