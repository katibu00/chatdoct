@extends('layout.master')
@section('PageTitle', 'Fee Assignment')
@section('content')


<div id="content-page" class="content-page">
    <div class="container-fluid">
       <div class="row">
          <div class="col-sm-12">
                <div class="iq-card">
                      <div class="iq-card-header d-flex justify-content-between">
                         <div class="iq-header-title">
                            <h4 class="card-title">
                                   Edit Fee Assignment
                                </h4>
                         </div>
                         <a class="btn btn-success float-right btn-sm" href="{{route('fee.assign.index')}}"><i class="fa fa-list"></i>  Fee Assignment List</a>
                        </div>
                      <hr>
                      <div class="iq-card-body">
                        <form class="form-horizontal" id="quickForm" method="POST" action="{{route('fee.assign.update',$editData[0]->class_id)}}">
                          @csrf

                        <div class="add_item">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label>Class</label>
                                    <select name="class_id" class="form-control form-control-sm" required>
                                        <option value="">Select Class</option>
                                        @foreach ($classes as $class)
                                        <option value="{{$class->id}}"  {{($editData['0']->class_id==$class->id)?"Selected":""}}>{{$class->name}}</option>
                                        @endforeach
                                    </select>
                                 </div>
                                 <div class="form-group col-md-3">
                                 <label>Student Type</label>
                                 <select name="student_type" class="form-control form-control-sm" required>
                                     <option value="">Select Student Type</option>
                                     <option value="Returning" {{($editData['0']->student_type=="Returning")?"Selected":""}}>Regular</option>
                                     <option value="Fresh" {{($editData['0']->student_type=="Fresh")?"Selected":""}} >Transfer</option>
                                 </select>
                              </div>
                            </div>
                            @foreach ($editData as $edit)
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label>Fee Type</label>
                                    <select name="fee_type_id[]" class="form-control form-control-sm">
                                        <option value="">Select Fee Type</option>
                                        @foreach($fee_types as $fee_type)
                                        <option value="{{$fee_type->id}}" {{($edit->fee_type_id==$fee_type->id)?"Selected":""}} >{{$fee_type->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Fee Amount</label>
                                    <input type="number" class="form-control form-control-sm" id="" name="amount[]" value="{{$edit->amount}}">
                                </div>

                            <div class="form-group col-md-1 mx-1" style="padding-top: 30px;">
                                <span class="btn btn-success btn-sm addeventmore"><i class="fa fa-plus-circle"></i></span>
                            </div>

                            </div>
                            @endforeach
                        </div>

                        <button type="submit" class="btn btn-info">{{(@$editData)?'Update':'Submit'}}</button>
                        <span style="color: red">{{($errors->has('name'))?($errors->first('name')):''}}</span>
                      </form>

                      </div>
                   </div>
          </div>
       </div>
       <div style="visibility: hidden;">
        <div class="whole_extra_item_add" id="whole_extra_item_add">
            <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label>Fee Type</label>
                        <select name="fee_type_id[]" class="form-control form-control-sm">
                            <option value="">Select Fee Type</option>
                            @foreach($fee_types as $fee_type)
                            <option value="{{$fee_type->id}}">{{$fee_type->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label>Fee Amount</label>
                        <input type="number" class="form-control form-control-sm" id="" name="amount[]">
                    </div>

                <div class="form-group col-md-2" style="padding-top: 30px;">
                    <div class="row mx-1">
                    <span class="btn btn-success btn-sm addeventmore"><i class="fa fa-plus-circle"></i></span>
                    <span class="btn btn-danger btn-sm removeeventmore mx-1"><i class="fa fa-minus-circle"></i></span>
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
    $(document).ready(function(){
        var counter = 0;
        $(document).on("click",".addeventmore", function(){
            var whole_extra_item_add = $("#whole_extra_item_add").html();
            $(this).closest(".add_item").append(whole_extra_item_add);
            counter++
        });
        $(document).on("click", ".removeeventmore", function(event){
             $(this).closest(".delete_whole_extra_item_add").remove();
             counter -= 1;
        });
    });
</script>

@endsection
