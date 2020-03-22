@extends('layouts.app')
@section('page-title')
   Reset Password
@endsection
@section('content')

<!-- Main content -->
<section class="content">
  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Reset Password</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
          <i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
      
      @include('partials.validation_errors')
      {!! Form::open([
      'action'=>'UserController@resetPasswordSave',
      'method'=>'POST'
      ])!!}

      <!--<div class="form-group">
          <label for="password">Phone</label>
          {!! Form::text('phone',null,[
          'class' => 'form-control'
       ]) !!}
     </div>-->

      <div class="form-group">
          <label for="password">Old Password</label>
          {!! Form::password('old-password',[
          'class' => 'form-control'
       ]) !!}
      </div>

      <div class="form-group">
          <label for="password">Password</label>
          {!! Form::password('password',[
          'class' => 'form-control'
       ]) !!}
      </div>
      <div class="form-group">
          <label for="password_confirmation">Password Confirm</label>
          {!! Form::password('password_confirmation',[
          'class' => 'form-control'
       ]) !!}
      </div>
      <div class="box-footer">
              <button type="submit" class="btn btn-primary">Save</button>
          </div>
      {!!Form::close()!!}
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

</section>
<!-- /.content -->

@endsection
