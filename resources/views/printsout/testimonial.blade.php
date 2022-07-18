@extends('layout.master')
@section('PageTitle', 'Generate Testimonial')
@section('content')


<div id="content-page" class="content-page">
    <div class="container-fluid">
       <div class="row">
          <div class="col-sm-12">
                <div class="iq-card">
                      <div class="iq-card-header d-flex justify-content-between">
                         <div class="iq-header-title">
                            <h4 class="card-title">Generate Testimonial</h4>

                         </div>
                      </div>
                      <hr>
                      <div class="iq-card-body">

            <form method="POST" id="myForm" action="{{route('testimonial.generate')}}" target="_blank">
                @csrf
                 <div class="form-row">
                    <div class="form-group col-md-3">
                        <label>Subject</label>
                        <select name="subject_id"  class="form-control form-control-sm" required>
                            @foreach ($subjects as $subject)
                            <option value="{{$subject->id}}">{{$subject['subject']['name']}} - {{$subject['class']['name']}}  {{$subject['class_section']['name']}}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form_group col-md-2" style="padding-top: 30px;">
                     <button type="submit" class="btn btn-success btn-sm" > Generate</button>
                    </div>
                 </div>
             </form>

          </div>
       </div>
    </div>
 </div>
 </div>
 @endsection

