@extends('layouts.app')
@inject('student','App\Student')


@section('page_title')
    College Admission Predictor
@endsection
@section('small_title')
  Statistics
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Students</span>
                        <span class="info-box-number">{{$student->count()}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>

        </div>




    </section>
    <!-- /.content -->
@endsection
