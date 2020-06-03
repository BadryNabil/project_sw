
@extends('front.master')
@section('content')
<section id="navigator">
        <div class="container">
            <div class="path">
                <div class="path-main" style="color: darkred; display:inline-block;">Home</div>
                <div class="path-main" style="color: darkred; display:inline-block;">/ About App</div>
               
            </div>

        </div>
    </section>
    <!-- Who Start -->
    <section id="who">
        <div class="container">
                <img src="{{asset('front/imgs/logo.png')}}" alt="">
                <p>{{$settings->about_app}}</p>
        </div>
    </section>
    <!-- Who End -->
    @endsection