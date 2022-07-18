@extends('layout.master')
@section('PageTitle', 'Continous Assessment Score')
@section('content')


    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Continous Assessment Live Score</h4>

                            </div>
                        </div>
                        <hr>
                        <div class="iq-card-body">

                            @foreach ($children as $child)
                            <table class="table">

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


                                   </tr>
                                </thead>
                                <tbody>
                                   @php
                                      $subjects = App\Models\AssignSubjects::where('school_id',$school->id)->where('class_id',$child->class_id)->where('class_section_id',$child->class_section_id)->get();
                                   @endphp
                                   @foreach ($subjects as $key => $subject)
                                   <tr>
                                      <th scope="row">{{$key +1}}</th>
                                      <td>{{$subject['subject']['name']}}</td>

                                      @foreach ($cas as $ca)
                                      @php
                                                // dd($subject);
                                         $score = App\Models\Marks::where('school_id',$school->id)->where('session_id',$school->session_id)->where('term',$school->term)->where('type','ca')->where('ca_id',$ca->id)->where('user_id',$child->id)->where('class_id',$child->class_id)->whereHas('assign_subject', function ($query) use($subject) {
                                            $query->where('subject_id', $subject->subject_id);
                                        })->first();
                                      @endphp
                                      <td>{{@$score->marks}}</td>
                                     @endforeach


                                   </tr>
                                   @endforeach
                                </tbody>
                             </table>
                             @endforeach

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection

