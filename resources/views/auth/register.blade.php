@extends('layouts.master')

@section('content')
    
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
                    <span>Sign Up</span>
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
                <div class="left-side dash-bid-item dashboard-widget">
                    <div class="section-header">
                        <h2 class="title">SIGN UP</h2>
                        <p>We're happy you're here!</p>
                    </div>
                    <div class="mb-50">
                        <ul class="button-area nav nav-tabs">
                            <li>
                                <a href="#Individual" data-toggle="tab" class="custom-button active">For Individual</a>
                            </li>
                            <li>
                                <a href="#company" data-toggle="tab" class="custom-button">For Company</a>
                            </li>
                        </ul>
                    </div>
                    {{-- comment 
                    
                    <ul class="login-with">
                        <li>
                            <a href="#0">For Individual</a>
                        </li>
                        <li>
                            <a href="#0">For Company</a>
                        </li>
                    </ul>--}}
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="Individual">
                        <form class="login-form" method="POST" action="{{ route('register') }}" >
                            @csrf
                            <input type="hidden" name="type" value="normal_user">
                            <div class="form-group mb-30">
                                <label for="first_name"></label>
                                <input type="text" id="first_name" name="first_name" required placeholder="First Name">
                                @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="form-group mb-30">
                            <label for="last_name"></label>
                            <input type="text" id="first_name" name="last_name" required placeholder="Last Name">
                            @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            </div>
                            <div class="form-group mb-30">
                                <label for="login-email"><i class="far fa-envelope"></i></label>
                                <input type="email" id="login-email" required name="email" placeholder="Email Address">
                                @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="form-group mb-30">
                                <label for="login-pass"><i class="fas fa-lock"></i></label>
                                <input type="password" name="password" required id="login-pass" placeholder="Password">
                                <span class="pass-type"><i class="fas fa-eye"></i></span>
                                @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="form-group mb-30">
                                <label for="login-pass"><i class="fas fa-lock"></i></label>
                                <input type="password" name="password_confirmation" required id="login-pass2" placeholder="Confirm Password">
                                <span class="pass-type"><i class="fas fa-eye"></i></span>
                            </div>
                            <div class="form-group mb-30">
                                <label for="phone"><i class="fas fa-phone-square-alt"></i></label>
                                <input type="text" id="phone" name="phone" required placeholder="Phone Number">
                                @error('tel')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="form-group mb-30">
                                <label for="login-email"><i class="far fa-envelope"></i></label>
                                <input type="text" id="login-email" name="address" required placeholder="Address">
                                @error('Address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="form-group mb-30">
                                <label for="City"><i class="far fa-envelope"></i></label>
                                <input type="text" id="City" name="city" required placeholder="City">
                                @error('City')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="form-group mb-30">
                                <label for="Country"><i class="far fa-envelope"></i></label>
                                <input type="text" id="Country" name="country" required placeholder="Country">
                                @error('Country')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            {{-- 
                            
                            <div class="form-group checkgroup mb-30">
                                <input type="checkbox" name="terms" id="check"><label for="check">The Sbidu Terms of Use apply</label>
                            </div>
                            --}}
                            <div class="form-group mb-0">
                                <button type="submit" class="custom-button">Sign Up</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="company">
                        <form class="login-form" method="POST" action="{{ route('register') }}" >
                            @csrf
                            <input type="hidden" name="type" value="company">
                            <div class="form-group mb-30">
                                <label for="first_name"></label>
                                <input type="text" id="first_name" name="company_name" required placeholder="Company Name">
                                @error('company_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="form-group mb-30">
                                <label for="login-email"><i class="far fa-envelope"></i></label>
                                <input type="email" id="login-email" required name="email" placeholder="Business Email Address">
                                @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="form-group mb-30">
                                <label for="login-pass"><i class="fas fa-lock"></i></label>
                                <input type="password" name="password" required id="login-pass" placeholder="Password">
                                <span class="pass-type"><i class="fas fa-eye"></i></span>
                                @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="form-group mb-30">
                                <label for="login-pass"><i class="fas fa-lock"></i></label>
                                <input type="password" name="password_confirmation" required id="login-pass2" placeholder="Confirm Password">
                                <span class="pass-type"><i class="fas fa-eye"></i></span>
                            </div>
                            <div class="form-group mb-30">
                                <label for="phone"><i class="fas fa-phone-square-alt"></i></label>
                                <input type="text" id="phone" name="phone" required placeholder="Phone Number">
                                @error('tel')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="form-group mb-30">
                                <label for="login-email"><i class="far fa-envelope"></i></label>
                                <input type="text" id="login-email" name="address" required placeholder="Address">
                                @error('Address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="form-group mb-30">
                                <label for="City"><i class="far fa-envelope"></i></label>
                                <input type="text" id="City" name="city" required placeholder="City">
                                @error('City')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="form-group mb-30">
                                <label for="Country"><i class="far fa-envelope"></i></label>
                                <input type="text" id="Country" name="country" required placeholder="Country">
                                @error('Country')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            {{-- 
                            
                            <div class="form-group checkgroup mb-30">
                                <input type="checkbox" name="terms" id="check"><label for="check">The Sbidu Terms of Use apply</label>
                            </div>
                            --}}
                            <div class="form-group mb-0">
                                <button type="submit" class="custom-button">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
                   
                   
                </div>
                <div class="right-side cl-white">
                    <div class="section-header mb-0">
                        <h3 class="title mt-0">ALREADY HAVE AN ACCOUNT?</h3>
                        <p>Log in and go to your Dashboard.</p>
                        <a href="/login" class="custom-button transparent">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Account Section Ends Here =============-->


@endsection
