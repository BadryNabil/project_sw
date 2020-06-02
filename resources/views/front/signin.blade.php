 @extends('front.master')
@section('content')
<section id="navigator">
        <div class="container">
            <div class="path">
                <div class="path-main" style="color: darkred; display:inline-block;">Home</div>
                <div class="path-directio" style="color: grey; display:inline-block;"> / Sign up</div>
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
    @endsection
   