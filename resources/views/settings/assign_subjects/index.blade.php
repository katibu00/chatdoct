@extends('layout.master')
@section('PageTitle', 'Assign Subjects')
@section('content')


<div id="content-page" class="content-page">
    <div class="container-fluid">
       <div class="row">
          <div class="col-sm-12">
                <div class="iq-card">
                      <div class="iq-card-header d-flex justify-content-between">
                         <div class="iq-header-title">
                            <h4 class="card-title">Subjects Assignment</h4>

                         </div>
                         <a class="btn btn-success float-right btn-sm" href="{{route('assign.subjects.create')}}"><i class="fa fa-plus-circle"></i>  Assign Subjects </a>
                      </div>
                      <hr>
                      <div class="iq-card-body">
                         <div class="table-responsive">
                            <table id="example1" class="table table-striped table-bordered table-hover" >
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Class Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach ($allData as $key=>$value)
                                    <tr>
                                    <td>{{$key+1}}</td>
                                        <td>{{$value['class']['name']}} {{$value['class_section']['name']}}</td>
                                        <td>
                                            <a title="Edit" class="btn btn-sm btn-primary" href="{{route('assign.subjects.details', $value->class_id)}}"><i class="fa fa-eye"></i></a>
                                            <a title="Edit" class="btn btn-sm btn-primary" href="{{route('assign.subjects.edit',$value->class_id)}}"><i class="fa fa-edit"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                 </table>
                         </div>
                      </div>
                   </div>
          </div>
       </div>

    </div>
 </div>
 </div>
 @endsection
