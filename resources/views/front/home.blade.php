@extends('front.master')
@section('content')


<!-- Sub Header Start -->
    <section id="sub-header">
        <div class="container">
            
        </div>
    </section>
    <!-- Sub Header End -->

    <!-- Articles Start -->
    <section id="articles">
        <div class="container">
            <h2 style="display: inline-block;">Colleges</h2>

            <!--  <form class="form-inline mr-auto" action="search" method="POST">
                    @csrf
                     <input class="form-control" type="text" name="input" id="input" placeholder="Search" aria-label="Search">
                     <button class="btn blue-gradient btn-primary" type="submit">Search</button>
                  </form>-->
            <div class="swiper-container">
            <div class="button-area" style="display: inline-block; margin-left: 850px;">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </button>
            </div>
                <div class="swiper-wrapper">
                    @foreach($colleges as $college)
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-img-top" style="position: relative;">
                                <img src="{{asset($college->image)}} " alt="Card image">
                             </div>
                            <div class="card-body">
                                <h4 class="card-title">{{$college->name}}</h4>
                                <p class="card-text">{{$college->body}}</p>
                                @if(Auth::check())
                                <div class="btn-cont">
                                   <a href="{{url('/college/'.$college->id)}}">  <button class="card-btn" >Details</button></a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                  @endforeach
                 
                    <div class="swiper-slide">

                    </div>
                    <div class="swiper-slide">

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Articles End -->

    
    
    

    <!-- Call us Start -->
    <section id="call-us">
        <div class="layer">
            <div class="container">
                <h1>Call Us</h1>
                <h4>You can call us for your inquiries about any information.</h4>
                <div class="whats">
                    <img  src="{{asset('front/imgs/whats.png')}}" alt="">
                     @foreach($settings as $settings)

                    <h3>{{$settings->phone}}</h3>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Call us End -->

    <!-- App Start -->
    <section id="app">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="info">
                        <h1>College Admission Predictor</h1>
                        <p>{{ $settings->about_app }}</p>
                        <h4>Available On</h4>
                       <a href="{{$settings->app_store_link}}"> <img src="{{asset('front/imgs/ios.png')}} " alt=""></a>
                        <a href="{{$settings->play_store_link}}"><img src="{{asset('front/imgs/google.png')}} " alt=""></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img style=" 
                    padding-top: 50px;
                    height: 450px;
                  padding-left: 102px;
                  "
                  src="{{asset('front/imgs/App.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- App End -->
  @endsection
