@extends('front.master')
@section('content')

<!-- Navigator Start -->
<section id="navigator">
    <div class="container">
        <div class="path">
            <a class="path-main" href="{{url('/')}}" style="color: darkred;text-decoration: none; display:inline-block;">Home</a>
            <div class="path-directio" style="color: grey; display:inline-block;"> / Predict Your College</div>
        </div>

    </div>
</section>
<!-- Navigator End -->
<!-- Requests Start -->
    <section id="requests">
        <div class="title">
            <h2>Predict Your College</h2>
            <hr class="line">
                <form style="padding-left: 600px" class="form-inline mr-auto" action="search" method="POST">
                    @csrf
                     <input class="form-control" type="text" name="input" id="input" placeholder="Enter Your Grade" aria-label="Search">
                     <button class="btn blue-gradient btn-primary" type="submit">Predict</button>
                  </form>
            
        </div>
        <div class="container">

            

           @foreach($colleges as $college)
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3" style="padding-top: 15px;padding-bottom: 5px;">
                            
                            <div class="type">
                                <h2 style="  width: 100px; height: 100px;padding-top: 30px">
                                {{$college->grade}}</h2>
                            </div>
                        </div>
                        <div class="data col-lg-6" style="padding-right: 20px">
                            <h4>Name: {{$college->name}}</h4>
                            <h4>Department: {{$college->department}}</h4>
                            
                        </div>
                        
                        <div class="col-lg-3 btn-group" style="padding-top: 0px;padding-bottom: -5px; padding-left: 60px ;">
                           <a href="{{url('/college/'.$college->id)}}"><button style="padding: 20px 20px 20px 20px; ">Details</button>  </a>
                           <br> 
                           
                       </div>

                    </div>
                </div>
            </div>
        @endforeach
    

      
        
    




        </div>

        <br>

        
    </section>
    <!-- Requests End -->

    @endsection
