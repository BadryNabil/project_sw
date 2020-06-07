<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />


    <!-- website font  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{asset('front/css/swiper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/animate.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/style.css')}} " />

    <title>College Admission Predictor</title>
</head>

<body>

    <!-- Navbar 1 Start -->
    <section id="Nav1">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <i class="fas fa-phone-volume" style="border-right: 1px solid gray;"> {{$settings->phone}}
                                &nbsp; &nbsp; </i>
                        </li>
                        <li class="nav-item">
                            <i class="far fa-envelope" style="padding-left: 15px;"> {{$settings->email}}</i>
                        </li>
                    </ul>
                </div>
                <div class="mx-auto order-0 navbar-brand mx-auto">
                    <a href="https://www.facebook.com/badry.nabil.9"><i
                            class="fab fa-instagram github">&nbsp;&nbsp;</i></a>
                    <a href="https://www.facebook.com/badry.nabil.9"><i
                            class="fab fa-facebook-f facebook">&nbsp;&nbsp;</i></a>
                    <a href="https://www.facebook.com/badry.nabil.9"><i class="fab fa-twitter twitter">&nbsp;&nbsp;</i></a>
                    <a href="https://api.whatsapp.com/send?phone=+201153328857"><i
                            class="fab fa-whatsapp whats">&nbsp;&nbsp;</i></a>
                </div>
                <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                 
                </div>
            </div>
        </nav>
    </section>
    <!-- Navbar 1 End -->

    <!-- Navbar 2 Start -->
    <section id="Nav2">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <img src="{{asset('front/imgs/logo.png')}}" width="18%"></img>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                    
            </ul>

            <a href="{{url('signin')}}">  <button class="btn login"  >NEW ACCOUNT</button></a>
            <a href="{{url('/home')}}">  <button class="btn login"  >LOGIN AS ADMIN</button></a>

            </div>
        </nav>
    </section>
    <!-- Content Start -->
    @if (Session::has('error'))
        <li class="alert alert-danger error" role="alert" style="text-align: center;list-style: none;width:auto;margin-bottom:5px" >{{Session::get('error')}}</li>
    @endif
<section id="navigator">
        <div class="container">
            <div class="path">
                <div class="path-directio" style="color: grey; display:inline-block;">  Login</div>
            </div>

        </div>
    </section>
    <!-- Navigator End -->

    <!-- Login Start -->

     <section id="login">
        <div class="container">
            <img src="{{asset('front/imgs/logo.png')}}" alt="">
                  <div class="col-md-12 info">
                    <div class="box-body">
                {!! Form::open([
                'action' => 'AuthControllers@login',
                'files'  => true,
                'method' =>'post'
                ]) !!}
                @include('partials.validation_errors')

                  <div class="form-group">
                   
                  
                {!! Form::text('email',null,[
                  'class' => 'form-control',
                  'placeholder'=>'Email'
                  ]) !!}
                  <br>

                  {!! Form::text('password',null, [
                    'class'=>'form-control',
                    'placeholder'=>'Password'
                    ]) !!}
                  
                  </div>
                  <div class="reg-group">
                        <button style="background-color: darkred;">Login</button>
                       
                    </div>
                  {!! Form::close () !!}
            </div>
            </div>
        </div>
    </section>
    <!-- Footer Start -->
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="foot-info">
                        <img src="{{asset('front/imgs/logo.png')}}" alt="">
                        <h1>Welcome For All</h1>
                        <h3>We Wish You More Success!</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    
                </div>
                <div class="col-md-4">
                    <ul class="options">
                        <li>
                            <h5>Available On</h5>
                        </li>
                        <li> <a  href="{{$settings->app_store_link}}"><img src="{{asset('front/imgs/ios1.png')}}" alt=""></li>
                        <li><img src="{{asset('front/imgs/google1.png')}}" alt=""></li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer End -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script type="text/javascript" src="{{asset('front/js/swiper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/js/wow.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/js/main.js')}}"></script>
    <script type="text/javascript"> 
          setTimeout(function() {
          $('.error').hide()
        }, 4000);
      </script>
    @yield('js')
</body>

</html>