@extends('layout.master')
@section('PageTitle', 'Marks Submissions')
@section('content')


    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Marks Submissions</h4>

                            </div>
                        </div>
                        <hr>
                        <div class="iq-card-body">

                            <form method="POST" id="myForm" action="{{ route('marks.submission.search') }}">
                                @csrf
                                <div class="form-row">


                                    <div class="form-group col-md-2">
                                        <label>Class</label>
                                        <select name="class_id" class="form-control form-control-sm mb-2" required>
                                            <option value="">Select Class</option>
                                            @foreach ($classes as $class)
                                                <option value="{{ $class['class']['id'] }}" @if($class['class']['id'] == @$class_id) selected @endif>
                                                    {{ $class['class']['name'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label>Class Section</label>
                                        <select name="class_section_id" class="form-control form-control-sm" required>
                                            <option value="">Select Section</option>
                                            @foreach ($sections as $section)
                                                <option value="{{ $section['class_section']['id'] }}" @if($section['class_section']['id'] == @$class_section) selected @endif>
                                                    {{ $section['class_section']['name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="form_group col-md-4" style="padding-top: 30px;">
                                        <button type="submit" class="btn btn-primary btn-sm text-white"
                                            name="submissions">Search
                                            Records</button>

                                    </div>
                                </div>
                                <br />
                                <div class="row   @if (!isset($allData)) d-none @endif">
                                    <div class="col-md-12">

                                        @foreach ($children as $child)
                                        <table class="table table-sm table-hover">

                                            <thead>
                                               <caption>{{$child->first_name}} {{$child->middle_name}} {{$child->last_name}}</caption>
                                               <tr>
                                                  <th scope="col">S/N</th>
                                                  <th scope="col">Subject</th>
                                                  @php
                                                     $cas = App\Models\CA::where('school_id',$school->id)->get();
                                                  @endphp
                                                  @foreach ($cas as $ca)
                                                   <th scope="col">{{$ca->code}}/{{$ca->max}}</th>
                                                  @endforeach
                                                  <th scope="col">Exams</th>
                                                  <th scope="col">Total</th>

                                               </tr>
                                            </thead>
                                            <tbody>
                                               @php
                                                  $score1 = 0;
                                                  $subjects = App\Models\AssignSubjects::where('school_id',$school->id)->where('class_id',$child->class_id)->where('class_section_id',$child->class_section_id)->get();
                                               @endphp
                                               @foreach ($subjects as $key => $subject)
                                               <tr>
                                                  <td scope="row">{{$key +1}}</td>
                                                  <td>{{$subject['subject']['name']}}</td>

                                                  @foreach ($cas as $ca)
                                                  @php

                                                     $score = App\Models\Marks::where('school_id',$school->id)->where('session_id',$school->session_id)->where('term',$school->term)->where('type','ca')->where('ca_id',$ca->id)->where('user_id',$child->id)->where('class_id',$child->class_id)->whereHas('assign_subject', function ($query) use($subject) {
                                                        $query->where('subject_id', $subject->subject_id);
                                                    })->first();
                                                  @endphp
                                                  <td>{{@$score->marks}}</td>

                                                 @endforeach


                                                 @php
                                                   $exam = App\Models\Marks::where('school_id',$school->id)->where('session_id',$school->session_id)->where('term',$school->term)->where('type','exam')->where('user_id',$child->id)->where('class_id',$child->class_id)->whereHas('assign_subject', function ($query) use($subject) {
                                                   $query->where('subject_id', $subject->subject_id);
                                                    })->first();
                                                @endphp

                                                 <td>{{@$exam->marks}}</td>


                                                 @php
                                                   $total = App\Models\Marks::where('school_id',$school->id)->where('session_id',$school->session_id)->where('term',$school->term)->where('user_id',$child->id)->where('class_id',$child->class_id)->whereHas('assign_subject', function ($query) use($subject) {
                                                   $query->where('subject_id', $subject->subject_id);
                                                    })->sum('marks');
                                                @endphp

                                                 <td>@if(@$total == 0) @else {{@$total}} @endif</td>

                                               </tr>
                                               @endforeach
                                            </tbody>
                                         </table>
                                         @endforeach

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
