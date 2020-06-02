@extends('front.master')
@section('content')


<section id="navigator">
        <div class="container">
            <div class="path">
                <div class="path-main" style="color: darkred; display:inline-block;">Home</div>
                <div class="path-main" style="color: darkred; display:inline-block;">/ Colleges</div>
                
            </div>

        </div>
    </section>
<section id="article">
       <div class="container">
                      <img class="head-img" src="{{asset($college->image)}}" alt="">
 <section id="donator">
                            <div class="container">
                                   <div class="row">
                                       <div class="col-md-12">
                                           <table class="table table-bordered">
                                               <tr>
                                                   <th>Name:</th>
                                                   <td>{{$college->name}}</td>
                                               </tr>
                                               <tr>
                                                   <th>Grade:</th>
                                                   <td>{{$college->grade}}</td>
                                               </tr>
                                               <tr>
                                                   <th>Department</th>
                                                   <td>{{$college->department}}</td>
                                               </tr>
                                               <tr>
                                                   <th>University</th>
                                                   <td>{{$college->university}}</td>
                                               </tr>
                                               <tr>
                                                   <th>Description</th>
                                                   <td>{{$college->body}}</td>
                                               </tr>

                                           </table>
                                       </div>
                                     </div>
                                  </div>
                                </section>
           
           <!-- Articles Start -->
           <section id="articles">
               <div class="container">
                   <h2 style="display: inline-block;">Colleges</h2>
                   <div class="swiper-container">
                     <div class="button-area" style="display: inline-block; margin-left: 850px;">
                         <div class="swiper-button-next"></div>
                         <div class="swiper-button-prev"></div>
                     </div>
                       <div class="swiper-wrapper">
                           @foreach($colleges as $college)
                            <ul class="swiper-slide ">
                             <div class="card">
                                   <div class="card-img-top" style="position: relative;">
                                       <img src="{{asset($college->image)}} " alt="Card image">
                                       
                                   </div>
                                   <div class="card-body">
                                       <h4 class="card-title">{{$college->name}}</h4>
                                       <p class="card-text">{{$college->body}}</p>
                                       <div class="btn-cont">
                                         <a href="{{url('/college/'.$college->id)}}">  <button class="card-btn" >Details</button></a>
                                       </div>
                                   </div>
                               </div>

                           </ul>
                           @endforeach
                           <div class="swiper-slide"></div>
                           <div class="swiper-slide"></div>
                         </div>
                   </div>
               </div>
           </section>
           <!-- Articles End -->

       </div>
   </section>
@endsection
