@extends('front.master')
@section('content')


    <!-- Navigator Start -->
    <section id="navigator">
        <div class="container">
            <div class="path">
                <div class="path-main" style="color: darkred; display:inline-block;">Home</div>
                <div class="path-directio" style="color: grey; display:inline-block;"> / FeedBack</div>
            </div>

        </div>
    </section>
    <!-- Navigator End -->

    <!-- login Start -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6 call">
                  @foreach($settings as $settings)
                    <div class="title">INFO</div>
                    <img src="{{asset('front/imgs/logo.png')}}" alt="">
                    <hr>
                    <h4>Mobile: {{$settings->phone}}</h3>
                        <h4>Fax: +2 455 6646</h3>
                            <h4>Email: {{$settings->email}}</h3>
                                <hr>
                                <h3>Find Us On</h3>
                                <div class="icons">
                                    <a href="https://www.facebook.com/badry.nabil.9"><i class="fab fa-facebook-square fa-3x"></i></a>
                                    <a href="https://api.whatsapp.com/send?phone=+201153328857"><i class="fab fa-whatsapp-square fa-3x"></i></a>
                                    <a href="https://www.facebook.com/badry.nabil.9">   <i class="fab fa-google-plus-square fa-3x"></i></a>
                                  </div>
                    </div>
                    @endforeach
                
                <div class="col-md-6 info">
                    <div class="title">FeedBack</div>
                    <div class="box-body">
                {!! Form::open([
                'action' => 'feedbackController@store',
                'files'  => true,
                'method' =>'post'

                ]) !!}
                @include('partials.validation_errors')

                  <div class="form-group">
                   
                  {!! Form::text('name',null,[
                  'class' => 'form-control',
                  'placeholder'=>'Name'
                  ]) !!}
                  
                    {!! Form::text('email',null, [
                    'class'=>'form-control',
                    'placeholder'=>'Email'
                    ]) !!}
                  
                  {!! Form::text('phone',null,[
                  'class' => 'form-control',
                  'placeholder'=>'Phone'
                  ]) !!}

                   {!! Form::textarea('message',null, [
                    'class'=>'form-control',
                    'placeholder'=>'Message'
                    ]) !!}
                  </div>
                  <div class="reg-group">
                   <button class="btn btn-primary" type="submit">SEND </button>
                  </div>
                  {!! Form::close () !!}
            </div>
            </div>
                 

            </div>
        </div>
    </section>
    <!-- login End -->

    @endsection