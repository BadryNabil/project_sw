 @extends('front.master')
@section('content')
<section id="navigator">
        <div class="container">
            <div class="path">
                <div class="path-main" style="color: darkred; display:inline-block;">Home</div>
                <div class="path-directio" style="color: grey; display:inline-block;"> / Login</div>
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
                        <form action="{{url('/login')}}" method="post">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" class="form-control" placeholder="البريد الالكتروني" required="" name="email">
                @if ($errors->has('email'))
                    <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control" placeholder="كلمة المرور" required="" name="password">
                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </div>
            <button type="submit" style="margin-left: 445px" class="btn btn-primary btn-block btn-flat">تسجيل الدخول</button>

        </form>
                
            </div>
            </div>
        </div>
    </section>
    @endsection








   