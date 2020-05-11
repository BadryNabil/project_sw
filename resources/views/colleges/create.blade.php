@extends('layouts.app')
@inject('model','App\College')
@section('page_title')
   ِAdd Post
@endsection

@section('content')


    <section class="content">

        <div class="box">

            <div class="box-header with-border">
              <h3 class="box-title">Add College</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                {!! Form::open([
                'action' => 'CollegeController@store',
                'files'  => true,
                'method' =>'post'

                ]) !!}
                @include('partials.validation_errors')

                  <div class="form-group">
                   <label for="name">Name</label>
                  {!! Form::text('name',null,[
                  'class' => 'form-control'
                  ]) !!}
                  <label for="grade">grade</label>
                  {!! Form::text('grade',null,[
                  'class' => 'form-control'
                  ]) !!}
                   <label for="grade">Department</label>
                  {!! Form::text('department',null,[
                  'class' => 'form-control'
                  ]) !!}

                   <label for="image">Image</label>
                    {!! Form::file('image', [
                    'class'=>'form-control'
                    ]) !!}

                  <label for="body">Information</label>
                    {!! Form::text('body',null, [
                    'class'=>'form-control'
                    ]) !!}

                  <label for="university">University</label>
                  {!! Form::text('university',null,[
                  'class' => 'form-control'
                  ]) !!}
                  </div>
                  <div class="form-group">
                   <button class="btn btn-primary" type="submit">Add </button>
                  </div>




                {!! Form::close () !!}
            </div>

        </div>
    </section>
@endsection
