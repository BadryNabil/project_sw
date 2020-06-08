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
                    @foreach($settings as $settings)
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <i class="fas fa-phone-volume" style="border-right: 1px solid gray;"> {{$settings->phone}}
                                &nbsp; &nbsp; </i>
                        </li>
                        <li class="nav-item">
                            <i class="far fa-envelope" style="padding-left: 15px;"> {{$settings->email}}</i>
                        </li>
                    </ul>
                    @endforeach
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
            <a href="{{url('/')}}">  <button class="btn login"  >LOGIN AS STUDENT</button></a>
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
                <div class="path-directio" style="color: grey; display:inline-block;"> Sign up</div>
            </div>

        </div>
    </section>

    <!-- Sign Up Start -->
    <section id="sign-up">
      


        <div class="container">
            <img src="{{asset('front/imgs/logo.png')}}" alt="">
                  <div class="col-md-12 info">
                    <div class="box-body">
                {!! Form::open([
                'action' => 'AuthControllers@register',
                'files'  => true,
                'method' =>'post'

                ]) !!}
                @include('partials.validation_errors')

                  <div class="form-group">
                   
                  {!! Form::text('username',null,[
                  'class' => 'form-control',
                  'placeholder'=>'Name'
                  ]) !!}

                  {!! Form::text('password',null, [
                    'class'=>'form-control',
                    'placeholder'=>'Password'
                    ]) !!}
                  
                    {!! Form::text('email',null, [
                    'class'=>'form-control',
                    'placeholder'=>'Email'
                    ]) !!}
                  
                  {!! Form::text('phone',null,[
                  'class' => 'form-control',
                  'placeholder'=>'Phone'
                  ]) !!}

                  {!! Form::text('city',null,[
                  'class' => 'form-control',
                  'placeholder'=>'City'
                  ]) !!}
                   
                  </div>
                  <div class="reg-group">
                   <button class="btn btn-primary" type="submit">Add </button>
                  </div>
                  {!! Form::close () !!}
            </div>
            </div>
        </div>
    </section>
    <!-- Sign Up End -->
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
                        <li> <a  href="https://www.apple.com/ios/app-store/"><img src="{{asset('front/imgs/ios1.png')}}" alt=""></li>
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

   