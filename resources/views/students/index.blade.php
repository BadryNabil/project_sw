@extends('layouts.app')
@section('page-title')
Student
@endsection
@section('content')
<!-- Content Header (Page header) -->

@if (Session::has('sucssed'))
        <li class="alert alert-info sucssed" role="alert" style="text-align: center;list-style: none;width:auto;margin-bottom:5px" >{{Session::get('sucssed')}}</li>
@endif


<!-- Main content -->
<section class="content">
  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">List Of Student</h3>


<div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
          <i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
      @if(count($studentFilter))
        <div class="table-resposive">
          <table class="table table-border">
            <thead>
              <tr>
                <th class="text-center">id</th>
                <th class="text-center">Name</th>
                <th class="text-center">Email</th>
                <th class="text-center">Phone</th>
                <th class="text-center">City</th>
                <th class="text-center">Delete</th>
              </tr>
          </thead>
          <tbody>
            @foreach($studentFilter as $record)
              <tr>
                <td class="text-center">{{$record->id}}</td>
                <td class="text-center">{{$record->username}}</td>
                <td class="text-center">{{$record->email}}</td>
                <td class="text-center">{{$record->phone}}</td>
                <td class="text-center">{{$record->city}}</td>
                <td class="text-center">
                   {!!Form::open([
                     'action' => ['StudentController@destroy',$record->id],
                     'method' =>'delete'
                     ]) !!}
                   <button type="submit" class="btn btn-danger" ><i class="fa fa-trash"></i></button>
                   {!!Form::close() !!}
                 </td>

            </tr>
          @endforeach
        </tbody>
        </table>
        </div>
       @else
       <div class="alert alert-danger" role="alert">
           No Data
       </div>
      @endif
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

</section>
<!-- /.content -->


@endsection
@section('js')
  <script type="text/javascript">
  setTimeout(function() {
  $('.sucssed').hide()
}, 4000);
</script>
@endsection
