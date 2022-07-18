@extends('layout.master')
@section('PageTitle','New Application')
@section('content')
<div id="content-page" class="content-page">
    <div class="container-fluid">
       <div class="row">

          <div class="col-lg-12">
             <div class="iq-edit-list-data">
                <div class="tab-content">
                   <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                       <div class="iq-card">
                         <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                               <h4 class="card-title">Register New Applicant </h4>
                            </div>
                         </div>
                         <div class="iq-card-body">
                            <form action="{{route('register.applicant')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                               <div class="form-group row align-items-center">
                                  <div class="col-md-12">
                                     <div class="profile-img-edit">
                                        <img class="profile-pic" src="/uploads/default.png"  alt="profile-pic">
                                        <div class="p-image">
                                          <i class="ri-pencil-line upload-button"></i>
                                          <input class="file-upload" name="image" type="file" accept="image/*"/>
                                       </div>
                                     </div>
                                  </div>
                               </div>

                               <div class=" row align-items-center">
                                  <div class="form-group col-sm-4">
                                     <label for="fname">First Name:</label>
                                     <input type="text" class="form-control form-control-sm" name="first_name" id="fname"  required>
                                  </div>
                                  <div class="form-group col-sm-4">
                                     <label for="lname">Middle Name:</label>
                                     <input type="text" class="form-control form-control-sm" name="middle_name" id="lname">
                                  </div>
                                  <div class="form-group col-sm-4">
                                    <label for="lname">Last Name:</label>
                                    <input type="text" class="form-control form-control-sm" id="lname"  name="last_name" required>
                                 </div>


                                  <div class="form-group col-sm-4">
                                     <label>Gender:</label>
                                     <select class="form-control form-control-sm" id="" name="gender" required>
                                        <option value="">Select gender</option>

                                        <option value="Male" >Male</option>
                                        <option value="Female"}}>Female</option>

                                     </select>
                                  </div>


                                  <div class="form-group col-md-4">
                                    <label>Religion</label>
                                    <select name="religion" class="form-control form-control-sm" required>
                                        <option value="">Select Religion</option>
                                        <option value="Christianity" >Christianity</option>
                                        <option value="Islam">Islam</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Date of Birth</label>
                                    <input type="date" name="dob" class="form-control form-control-sm" required>
                                </div>

                                <div class="form-group col-md-4">
                                    <label>School Section Applied</label>
                                    <select name="school_section_id" id="section" class="form-control form-control-sm" required>
                                        <option value="">Select School Section</option>
                                        @foreach ($school_sections as $section)
                                            <option value="{{ $section->id }}">{{ $section->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Class Applied</label>
                                    <select name="class_id" id="class" class="form-control form-control-sm" required>


                                    </select>
                                </div>




                                <div class="form-group col-md-4">
                                    <label>Parent</label>
                                    <select name="parent_id" class="form-control form-control-sm" required>
                                        <option value="">Select Parent</option>

                                       @foreach ($parents as $parent)
                                        <option value="{{ $parent->id }}">{{ $parent->first_name }} {{ $parent->middle_name }} {{ $parent->last_name }}</option>
                                    @endforeach

                                    </select>
                                </div>
                               </div>

                               <button type="submit" class="btn btn-primary mr-2">Submit</button>
                               <button type="reset" class="btn iq-bg-danger">Cancle</button>
                            </form>
                         </div>
                      </div>
                   </div>

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
    $(function() {
        $(document).on('change', '#section', function() {

            var school_section_id = $('#section').val();

            $.ajax({
                type: 'GET',
                url: '{{ route('get-class') }}',
                data: {
                    school_section_id: school_section_id
                },
                success: function(data) {
                    var html = '<option value="">Select Class</option>';
                    $.each(data, function(key, v) {
                        html += '<option value="' + v.class.id + '">' + v
                            .class.name + '</option>';
                    });
                    html = $('#class').html(html);
                }
            });

        });

    });

</script>

@endsection
