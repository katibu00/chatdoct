@extends('layout.master')
@section('PageTitle', 'End of Term Report (comment-Based)')
@section('content')


    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">

                <div class="col-sm-7">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h6 class="card-title">Comment-Based</h6>
                            </div>
                            <button type="button" class="btn " style="background: green; color: white;" data-toggle="modal" data-target=".bd-example-modal-xl"><span><i class="fas fa-plus"></i></span> Add Comments</button>

                            <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog"   aria-hidden="true">
                                <div class="modal-dialog modal-xl modal-dialog-scrollable">
                                   <div class="modal-content">
                                      <div class="modal-header">
                                         <h5 class="modal-title">Add Comments</h5>
                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                         <span aria-hidden="true">&times;</span>
                                         </button>
                                      </div>
                                      <div class="modal-body">

                                        <form method="POST" action="{{ route('comments.store') }}">
                                            @csrf
                                            <div class="form-row">

                                                <div class="form-group col-md-2">
                                                    <label>Class: *</label>
                                                    <select id="class_id" name="class_id" class="form-control form-control-sm" required>
                                                        <option value=""></option>
                                                        @foreach ($classes as $class)
                                                            <option value="{{$class->class_id}}">{{ $class['class']['name'] }}</option>\
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-2">
                                                    <label>Class Section: *</label>
                                                    <select id="class_section_id" name="class_section_id" class="form-control form-control-sm" required>
                                                        <option value=""></option>
                                                        @foreach ($class_section as $section)
                                                            <option value="{{ $section->class_section_id }}">
                                                                {{ $section['class_section']['name'] }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-2">
                                                    <label>Acting As: *</label>
                                                    <select name="role" class="form-control form-control-sm" required>
                                                        <option value=""></option>
                                                        <option value="principal">Principal</option>
                                                        <option value="form_master">Form Master</option>

                                                    </select>
                                                </div>

                                                <div class="form_group col-md-2" style="padding-top: 32px;">
                                                    <a id="search_students" class="btn btn-primary btn-sm text-white">Search</a>
                                                </div>
                                            </div>



                                        <div class="row d-none" id="marks-generate">
                                            <div class="col-md-12">

                                                <table class="table table-bordered table-striped dt-responsive" style="width: 100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Registration Number</th>
                                                            <th>Student Name</th>
                                                            <th>Position</th>
                                                            <th>Total Marks</th>
                                                            <th>Comment</th>
                                                            <th>Additional Comment</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="marks-generate-tr">

                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>


                                      </div>
                                      <div class="modal-footer">
                                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                         <button type="submit" class="btn btn-primary">Save Comments</button>
                                      </div>
                                   </div>
                                </form>
                                </div>
                             </div>

                        </div>
                        <hr>
                        <div class="iq-card-body">

                            <form method="POST" action="{{ route('comment.report.generate') }}" target="_blank">
                                @csrf
                                <div class="form-row">


                                <div class="form-group col-md-3">
                                    <label>Session: *</label>
                                    <select name="session_id" class="form-control form-control-sm">
                                        <option value="">Select Level</option>
                                        @foreach ($sessions as $session)
                                            <option value="{{ $session->id }}"
                                                {{ $current == $session->id ? 'Selected' : '' }}>{{ $session->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-3">
                                    <label>Term: *</label>
                                    <select name="term" class="form-control form-control-sm" required>
                                        <option value=""></option>
                                        <option value="First" @if($term == 'First') selected @endif>First Term</option>
                                        <option value="Second"  @if($term == 'Second') selected @endif>Second Term</option>
                                        <option value="Third" @if($term == 'Third') selected @endif>Third Term</option>
                                    </select>
                                </div>

                                    <div class="form-group col-md-3">
                                        <label>Class: *</label>
                                        <select name="class_id" class="form-control form-control-sm" required>
                                            <option value=""></option>
                                            @foreach ($classes as $class)
                                                <option value="{{$class->class_id}}">{{ $class['class']['name'] }}</option>\
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label>Class Section: *</label>
                                        <select name="class_section_id" class="form-control form-control-sm" required>
                                            <option value=""></option>
                                            @foreach ($class_section as $section)
                                                <option value="{{ $section->class_section_id }}">
                                                    {{ $section['class_section']['name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form_group col-md-12" style="padding-top: 10px;">
                                        <button type="submit" class="btn btn-primary btn-sm text-white btn-block">Generate</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>



                <div class="col-sm-12 col-lg-5">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h6 class="card-title">Comment Entries</h6>
                            </div>

                            <button type="button" class="btn " style="background: #444444; color: white;" data-toggle="modal" data-target="#exampleModalScrollable"><span><i class="fas fa-eye"></i></span> View Comments</button>

                        </div>


                        <div class="iq-card-body">

                            <table class="table">
                                <thead>
                                   <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Class</th>
                                      <th scope="col">Form Master</th>
                                      <th scope="col">Principal</th>
                                   </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rows as $key => $row)

                                   <tr>
                                      <th scope="row">{{$key+1}}</th>
                                      <td>{{$row['class']['name']}} {{$row['class_section']['name']}}</td>
                                      @php
                                          $principal = App\Models\PComment::where('school_id',Auth::user()->school_id)->where('session_id',$current)->where('term',$term)->where('class_id',$row['class']['id'])->where('class_section_id',$row['class_section']['id'])->get()->count();
                                          $master = App\Models\FComment::where('school_id',Auth::user()->school_id)->where('session_id',$current)->where('term',$term)->where('class_id',$row['class']['id'])->where('class_section_id',$row['class_section']['id'])->get()->count();
                                      @endphp

                                      <td>
                                        @if(@$master > 1)
                                        <i style="font-size: 20px; color: green;"  class="las la-check-square"></i>
                                          @else
                                          <i style="font-size: 20px; color: red;" class="lar la-window-close"></i>
                                         @endif
                                      </td>

                                      <td>

                                        @if(@$principal > 1)
                                        <i style="font-size: 20px; color: green;"  class="las la-check-square"></i>
                                          @else
                                          <i style="font-size: 20px; color: red;" class="lar la-window-close"></i>
                                         @endif

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



        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalScrollableTitle">View Comments</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">

                    <form action="#" method="GET">
                        <div class="form-row">

                            <div class="form-group col-md-3">
                                <label>Class:</label>
                                <select id="classc_id" class="form-control form-control-sm" required>
                                    <option value="">Select Class</option>
                                    @foreach ($classes as $class)
                                        <option value="{{$class->class_id}}">{{ $class['class']['name'] }}</option>\
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-3">
                                <label>Class Section:</label>
                                <select id="classc_section_id" class="form-control form-control-sm" required>
                                    <option value="">Select Section</option>
                                    @foreach ($class_section as $section)
                                        <option value="{{ $section->class_section_id }}">
                                            {{ $section['class_section']['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-3">
                                <label>Officer:</label>
                                <select id="role" class="form-control form-control-sm" required>
                                    <option value="">Select item</option>
                                    <option value="principal">Principal</option>
                                    <option value="form_master">Form Master</option>

                                </select>
                            </div>

                            <div class="form-group col-md-3" style="padding-top: 32px;">
                                <a id="search_comments" class="btn btn-primary btn-sm text-white">Search Students</a>
                            </div>
                        </div>
                    </form>


                    <div class="row d-none" id="comments-generate">
                        <div class="col-md-12">

                            <table class="table table-bordered table-striped dt-responsive" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Registration Number</th>
                                        <th>Student Name</th>
                                        <th>Comment</th>

                                    </tr>
                                </thead>
                                <tbody id="comments-generate-tr">

                                </tbody>
                            </table>

                        </div>
                    </div>

                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
                     {{-- <button type="button" class="btn btn-primary"></button> --}}
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

    @endsection
    @section('js')
    <script type="text/javascript">
       $(function(){
           $(document).on('click','#search_students',function(){


                  var class_id = $('#class_id').val();
                  var class_section_id = $('#class_section_id').val();

                  if(class_id == '' || class_section_id == ''){
                   alert("All Fields are required");
                   return;
               }



          $.ajax({
              type: 'GET',
              url : '{{route('get-student-list')}}',
              data: {'class_id':class_id,'class_section_id':class_section_id},
              success: function(data){

                if(!$.trim(data)){alert("Generate End of Term Report First for the Selected Class"); return;}

                $('#marks-generate').removeClass('d-none');

                var html = '';
                $.each( data, function(key, v){

                    html +=
                    '<tr>'+

                    '<td>'+v.user.roll_number+'<input type="hidden" name="user_id[]" value="'+v.user.id+'"><input type="hidden" name="classss_id[]" value="'+v.user.class_id+'"><input type="hidden" name="classss_section_id[]" value="'+v.user.class_section_id+'"></td>'+
                    '<td>'+v.user.first_name+' '+v.user.middle_name+' '+v.user.last_name+'</td>'+
                    '<td>'+(key+1)+'</td>'+
                    '<td>'+v.total+'</td>'+
                    '<td> <select name="comment[]" class="form-control form-control-sm bg-whit" required>' +
                                '<option value=""></option> <option value="Excellent Result, Keep it up.">Excellent Result, keep it up.</option>' +
                                '<option value="Very Good Result, keep it up.">Very Good Result, keep it up.</option>' +
                                '<option value="Good Result, keep it up.">Good Result, keep it up.</option>' +
                                '<option value="Fair Result, you can do better next term.">Fair Result, you can do better next term.</option>' +
                                '<option value="Best Result, keep it up.">Best Result, keep it up.</option></select></td>' +
                    '<td><input type="text" class="form-control" style="height: calc(1.5em + .5rem + 2px); padding: .25rem .5rem;  font-size: .875rem; line-height: 1.5; border-radius: .2rem" name="additional[]" value=""></td>'+
                    '</tr>';
                });
                html = $('#marks-generate-tr').html(html);
              }
          });

       });

       });
       </script>


<script type="text/javascript">
    $(function(){
        $(document).on('click','#search_comments',function(){


               var class_id = $('#classc_id').val();
               var class_section_id = $('#classc_section_id').val();
               var role = $('#role').val();

               if(class_id == '' || class_section_id == '' || role == ''){
                   alert("All Fields are required");
                   return;
               }



       $.ajax({
           type: 'GET',
           url : '{{route('get-comments')}}',
           data: {'class_id':class_id,'class_section_id':class_section_id,'role':role},
           success: function(data){

             if(!$.trim(data)){alert("No Comment has been Entered for the Selected Class"); return;}

             $('#comments-generate').removeClass('d-none');

             var html = '';
             $.each( data, function(key, v){

                 html +=
                 '<tr>'+
                    '<td>'+(key+1)+'</td>'+
                 '<td>'+v.user.roll_number+'<input type="hidden" name="user_id[]" value="'+v.user.id+'"><input type="hidden" name="classss_id[]" value="'+v.user.class_id+'"><input type="hidden" name="classss_section_id[]" value="'+v.user.class_section_id+'"></td>'+
                 '<td>'+v.user.first_name+' '+v.user.middle_name+' '+v.user.last_name+'</td>'+

                 '<td>'+v.comment+' '+v.additional+'</td>'+
                 '</tr>';
             });
             html = $('#comments-generate-tr').html(html);
           }
       });

    });

    });
    </script>
 @endsection
