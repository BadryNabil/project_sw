@extends('layouts.app')
@section('page_title')
   Setting
@endsection

@section('content')
   <section class="content">
      <div class="box">
         <div class="box-header with-border">
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
              'action' => ['SettingController@update',$model->id],
              'method' =>'put'
              ])!!}

              @if ($errors->any())
            @include('partials.validation_errors')
             @endif

              @include('settings.form')
              {!!Form::close()!!}
            </div>

        </div>
    </section>
@endsection
