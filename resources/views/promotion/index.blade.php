@extends('layout.master')
@section('PageTitle', 'Students Promotion')
@section('content')


<div id="content-page" class="content-page">
    <div class="container-fluid">
       <div class="row">
          <div class="col-sm-12">
                <div class="iq-card">
                      <div class="iq-card-header d-flex justify-content-between">
                         <div class="iq-header-title">
                            <h4 class="card-title">Students Promotion</h4>

                         </div>
                      </div>
                      <hr>
                      <div class="iq-card-body">

            <form method="POST" id="myForm" action="{{route('promotion.store')}}">
                @csrf
                 <div class="form-row">

                 <div class="form-group col-md-2">
                     <label>Current Class: *</label>
                     <select name="current_class_id" id="current_class_id" class="form-control form-control-sm" required>
                         <option value=""></option>
                         @foreach ($classes as $class)
                         <option value="{{$class->id}}">{{$class->name}}</option>
                         @endforeach
                     </select>
                 </div>


                 <div class="form-group col-md-2">
                    <label>Class Section: *</label>
                    <select name="current_class_section_id" id="current_class_section_id" class="form-control form-control-sm" required>
                        <option value=""></option>
                        @foreach ($sections as $section)
                        <option value="{{$section->id}}">{{$section->name}}</option>
                        @endforeach
                    </select>
                 </div>

                   <div class="form-group col-md-2">
                     <label>Next Class: *</label>
                     <select name="next_class_id" class="form-control form-control-sm" required>
                         <option value=""></option>
                         @foreach ($classes as $class)
                         <option value="{{$class->id}}">{{$class->name}}</option>
                         @endforeach
                     </select>
                 </div>


                 <div class="form-group col-md-2">
                    <label>Class Section: *</label>
                    <select name="next_class_section_id" id="next_class_section_id" class="form-control form-control-sm" required>
                        <option value=""></option>
                        @foreach ($sections as $section)
                        <option value="{{$section->id}}">{{$section->name}}</option>
                        @endforeach
                    </select>
                 </div>



                 <div class="form_group col-md-2" style="padding-top: 30px;">
                     <a id="insert_marks" class="btn btn-primary btn-sm text-white" name="insert_marks">Search</a>
                 </div>
                 </div>
                 <br/>
                 <div class="row d-none" id="marks-generate">
                     <div class="col-md-12">
                         <table class="table table-bordered table-striped dt-responsive" style="width: 100%">
                             <thead>
                                 <tr>
                                     <th>Registration Number</th>
                                     <th>Student Name</th>
                                     <th>Current Class</th>
                                     <th>Status</th>
                                 </tr>
                             </thead>
                             <tbody id="marks-generate-tr">

                             </tbody>
                         </table>
                     </div>
                 </div>
                 <button type="submit" id="submit" class="btn btn-success btn-md d-none">Promote Students</button>
             </form>

                      </div>
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
        $(document).on('click','#insert_marks',function(){


               var current_class_id = $('#current_class_id').val();
               var next_class_id = $('#next_class_id').val();
               var current_class_section_id = $('#current_class_section_id').val();
               var next_class_section_id = $('#next_class_section_id').val();

               if(current_class_id == '' || current_class_section_id == '' || next_class_id == '' || next_class_section_id == ''){
                   alert('All Fields are Required');
                   return;
               }


       $.ajax({
           type: 'GET',
           url : '{{route('get-student-class')}}',
           data: {'current_class_id':current_class_id,'current_class_section_id':current_class_section_id,'next_class_id':next_class_id,'next_class_section_id':next_class_section_id},
           success: function(data){
             $('#marks-generate').removeClass('d-none');
             $('#submit').removeClass('d-none');
             var html = '';
             $.each( data, function(key, v){
                 html +=
                 '<tr>'+
                 '<td>'+v.roll_number+'<input type="hidden" name="user_id[]" value="'+v.id+'"><input type="hidden" name="class_id[]" value="'+v.class_id+'"><input type="hidden" name="class_section_id[]" value="'+v.class_section_id+'"></td>'+
                 '<td>'+v.first_name+' '+v.last_name+'</td>'+
                 '<td>'+v.class.name+' '+v.class_section.name+'</td>'+

                 '<td> <select name="status[]" class="form-control form-control-sm" required>   <option value="promoted">Promoted</option> <option value="repeated">Repeated</option></select></td>'+
                 '</tr>';
             });
             html = $('#marks-generate-tr').html(html);
           }
       });

    });

    });
    </script>
    @endsection
