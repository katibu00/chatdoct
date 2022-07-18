@extends('layouts.master')
@section('PageTitle', ' Scratch Cards')
@section('content')


<div id="content-page" class="content-page">
    <div class="container-fluid">
       <div class="row">
          <div class="col-sm-12">
                <div class="iq-card">
                      <div class="iq-card-header d-flex justify-content-between">
                         <div class="iq-header-title">
                            <h4 class="card-title">
                          Scratch Cards
                         </div>

                      </div>
                      <hr>
                      <div class="iq-card-body col-md-10 mx-auto">
                        <table id="example3" class="table table-striped table-bordered table-hover" >
                            <thead>
                                <tr>
                                   <th>S/N</th>
                                   <th>Session</th>
                                   <th>Number Generated</th>
                                   <th>Number Sold</th>
                                   <th>Number Used</th>
                                   <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach ($cards as $key=>$value)
                               <tr>
                               <td>{{$key+1}}</td>

                                   <td>{{$value['session']['name']}}</td>

                                   <td>
                                    @php
                                    $cards = DB::table('cards')->select('session_id')->where('session_id',$value->session_id)->distinct()->count();
                                    @endphp
                                     {{$cards}}
                                   </td>

                                   <td>
                                    @php
                                    $cards= DB::table('cards')->select('session_id')->where('sold',1)->where('session_id',$value->session_id)->distinct()->count();
                                    @endphp
                                     {{$cards}}
                                   </td>

                                   <td>
                                    @php
                                    $cards= DB::table('cards')->select('session_id')->where('sold',1)->where('used',1)->where('session_id',$value->session_id)->distinct()->count();
                                    @endphp
                                     {{$cards}}
                                   </td>

                                   <td>
                                       <a title="Delete" id="delete" class="btn btn-sm btn-danger" href="{{route('cards.delete',$value->session_id)}}"><i class="fa fa-trash"></i></a>
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
 @endsection



