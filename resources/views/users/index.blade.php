@extends('layouts.app')
@section('page-title')
  Admin
@endsection
@section('content')
<!-- Content Header (Page header) -->




<!-- Main content -->
<section class="content">
  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Profile</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
          <i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
     <!-- <a href="{{url(route('users.create'))}}" class="btn btn-primary"><i class="fa fa-plus"></i> New User</a>-->
     
      @if(count($users))
        <div class="table-resposive">
          <table class="table table-border">
            <thead>
                        <th>#</th>
                        
                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Phone</th>
                        <th class="text-center">Edit</th>
                        </thead>
          <tbody>
            @foreach ($users as $user )
              <tr>
                <td>{{$loop->iteration}}</td>
                <td class="text-center">{{$user->name}}</td>
                <td class="text-center">{{$user->email}}</td>
                <td class="text-center">{{$user->phone}}</td>
                
                <td class="text-center">
                  <a href="{{url(route('users.edit',$user->id))}}" class="btn btn-success" ><i class="fa fa-edit"></i></a>
                </td>
                
              </tr>
             @endforeach
          </tbody>
        </table>
        </div>
       @else
       <div class="alert alert-danger" User="alert">
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
