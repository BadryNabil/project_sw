@extends('layouts.app')
@inject('student','App\Student')
@inject('college','App\College')
@inject('feedback','App\Contact')


@section('page_title')
    College Admission Predictor
@endsection
@section('small_title')
  Statistics
@endsection
@section('content')
    <!-- Main content -->
   
        
            <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div>
                <div class="panel-body">
                        <div class="row">
                                <div class="col-lg-4 col-xs-6">
                                  <!-- small box -->
                                  <div class="small-box bg-aqua">
                                    <div class="inner">
                                        <h3>Students</h3>
                                        <p>{{$student->count()}}</p>
                                    </div>
                                    <div class="icon">
                                      <i class="fa fa-users"></i>
                                    </div>
                                  </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-4 col-xs-6">
                                  <!-- small box -->
                                  <div class="small-box bg-green">
                                    <div class="inner">
                                        <h3>Colleges</h3>
                                        <p>{{$college->count()}}</p>
                                    </div>
                                    <div class="icon">
                                      <i class="fa fa-university"></i>
                                    </div>
                                  </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-4 col-xs-6">
                                  <!-- small box -->
                                  <div class="small-box bg-red">
                                    <div class="inner">
                                        <h3>FeedBack</h3>
                                        <p>{{$feedback->count()}}</p>
                                    </div>
                                    <div class="icon">
                                      <i class="fa fa-envelope"></i>
                                    </div>
                                  </div>
                                </div>

                                
                               
                              </div>
                </div>
            </div>
        </div>
    </div>
</div>

        




  
    <!-- /.content -->
@endsection
