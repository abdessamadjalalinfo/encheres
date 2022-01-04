@extends('layouts.master')

@section('stylesheets')
{{-- comment 
<link rel="stylesheet" href="{{asset('assets/css/auksjonen.css')}}"--}}
@endsection



@section('content')
<section class="container" style="margin-top: 167px;">
    <div class="">        
        <img src="{{asset('img/topp-banner-desktop_b15a52.jpeg')}}" alt="">
    </div>
    <div style="margin-top: 40px;">
        <h5 style="text-align: center;margin-bottom:18px">SELL FREE WITH US - EXPERIENCE THE EXCITEMENT TOO!</h5>
        <h6 style="text-align: center;"">As a seller, you pay nothing. We charge an auction fee from the buyer upon completed sale.See our prices here!        </h6>
    </div>
    <div style="margin-top:18px">
        <img style="width: 1069px" src="{{asset('img/screen.png')}}" alt="">
    </div>
    <div>
        <h5 style="text-align: center;margin-top:18px">
            WHAT DO SOME OF OUR PRIVATE CUSTOMERS SAY?
        </h5>
        <p style="text-align: center;margin-top:18px">
            "Very good way to sell things. The auction system is easy to understand and is safe for both buyer and seller. The advisers work hard and at all hours of the day to assist. I am very impressed with the work they did to sell for me and will use them next time "
        </p>
        <h6 style="text-align: center;margin-top:18px">Trond Nesse</h6>
        <p style="text-align: center;margin-top:18px">
            "Very happy with the process and all follow-up around this. Neatly done in a clear and good way. No problems recommending this to others"
        </p>
        <h6 style="text-align: center;margin-top:18px">Andreas Johnson
        </h6>

        <p style="text-align: center;margin-top:18px">
            "Have not auctioned before, but this can be recommended. Very simple and clear process from start to finish. There was also very good service and good information all the way"
        </p>
        <h6 style="text-align: center;margin-top:18px">Jørgen Skaare
        </h6>
        <h5 style="text-align: center;margin-top:18px">
            GET STARTED FAST - REGISTER YOUR USER NOW
        </h5>
        <div style="margin-left: 500px;margin-top: 44px;">
            <a href="{{route('register')}}" class="custom-button">Register</a>
        </div>
        <div style="margin-top: 44px;">
            <img style="width: 1069px" src="{{asset('img/screen2.png')}}"  alt="">
        </div>
    </div>
</section>
@endsection