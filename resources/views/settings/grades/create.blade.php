@extends('layout.master')
@section('PageTitle', 'Grading Scheme')
@section('content')


<div id="content-page" class="content-page">
    <div class="container-fluid">
       <div class="row">
          <div class="col-sm-12">
                <div class="iq-card">
                      <div class="iq-card-header d-flex justify-content-between">
                         <div class="iq-header-title">
                            <h4 class="card-title"> @if(isset($editData))
                                Edit Grade Point
                                @else
                                Add Grade Point
                                @endif
                            </h4>

                         </div>
                         <a class="btn btn-success float-right" href="{{route('grades.index')}}"><i class="fa fa-list"></i>  Grade Point List</a>                      </div>
                      <hr>
                      <div class="iq-card-body">
                        <form class="form-horizontal" id="quickForm" method="POST" action="{{(@$editData?route('grades.update',$editData->id):route('grades.store'))}}">
                            @csrf

                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label>Grade Name</label>
                                    <input type="text" value="{{@$editData->letter_grade}}" class="form-control form-control-sm" name="letter_grade" required>
                                </div>

                                <div class="form-group col-md-3">
                                    <label>Start mark</label>
                                    <input type="number" value="{{@$editData->start_mark}}" class="form-control form-control-sm" name="start_mark" required>
                                </div>

                                <div class="form-group col-md-3">
                                    <label>End Mark</label>
                                    <input type="number" value="{{@$editData->end_mark}}" class="form-control form-control-sm" name="end_mark" required>
                                </div>

                                <div class="form-group col-md-3">
                                    <label>Remarks</label>
                                    <input type="text" value="{{@$editData->remarks}}" class="form-control form-control-sm" name="remarks" required>
                                </div>
                                <div class="form-group col-md-4 mt-4">
                                    <button type="submit" class="btn btn-info">{{(@$editData)?'Update':'Submit'}}</button>
                                    <span style="color: red">{{($errors->has('name'))?($errors->first('name')):''}}</span>
                                </div>

                      </form>
                         </div>
                      </div>
                   </div>
          </div>
       </div>

    </div>
 </div>
 </div>
 @endsection
