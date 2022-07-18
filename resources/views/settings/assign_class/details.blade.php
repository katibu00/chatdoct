
@extends('layout.master')
@section('PageTitle', 'Class Assignment')
@section('content')


<div id="content-page" class="content-page">
    <div class="container-fluid">
       <div class="row">
          <div class="col-sm-12">
                <div class="iq-card">
                      <div class="iq-card-header d-flex justify-content-between">
                         <div class="iq-header-title">
                            <h4><strong>School Section: </strong>{{$editData['0']['school_section']['name']}}</h4>

                            </h4>
                         </div>

                         <a class="btn btn-success float-right btn-sm" href="{{route('assign.class.index')}}"><i class="fa fa-list"></i>  Class Assignment List</a>
                       </div>
                      <hr>
                      <div class="iq-card-body">
                         <div class="table-responsive">
                            <table id="example1" class="table table-striped table-bordered table-hover" >
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Classes</th>

                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach ($editData as $key=>$value)
                                    <tr>
                                    <td>{{$key+1}}</td>
                                        <td>{{$value['class']['name']}}</td>

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
