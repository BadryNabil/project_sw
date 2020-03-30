@extends('layouts.app')
@section('page_title')
    FeedBack
@endsection

@section('content')


    <section class="content">

        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">All FeedBack</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
           
                @if(count($records))
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Phone</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">FeedBack</th>
                                <th class="text-center">Deleted</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($records as $record)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    
                                    <td class="text-center">{{$record->name}}</td>
                                    <td class="text-center">{{$record->phone}}</td>
                                    <td class="text-center">{{$record->email}}</td>
                                    <td class="text-center">{{$record->message}}</td>
                                    <td class="text-center">
                                       {!!Form::open([
                                         'action' => ['feedbackController@destroy',$record->id],
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

        </div>


    </section>
@endsection
