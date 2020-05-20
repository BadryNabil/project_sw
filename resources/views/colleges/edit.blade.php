@extends('layouts.app')
@section('page-title')
   Edit College
@endsection
@section('content')

<!-- Main content -->
<section class="content">
  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Edit College</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
          <i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
      {!! Form::model($model , [
      'action' => ['CollegeController@update',$model->id],
      'files'=>   true,
      'method' =>'put'
      ])!!}

      @if ($errors->any())
    @include('partials.validation_errors')
     @endif

      @include('Colleges.form')
      {!!Form::close()!!}
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

</section>
<!-- /.content -->

@endsection
