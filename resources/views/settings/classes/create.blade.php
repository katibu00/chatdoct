@extends('layout.master')
@section('PageTitle', 'Add Class')
@section('content')


    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">
                                    Add Class
                                </h4>
                            </div>
                            <a class="btn btn-success float-right btn-sm" href="{{ route('classes.index') }}"><i
                                    class="fa fa-list"></i> Class List</a>
                        </div>
                        <hr>
                        <div class="iq-card-body">
                            <form class="form-horizontal" id="quickForm" method="POST"
                                action="{{ route('classes.store') }}">
                                @csrf
                               
                                <div class="add_item">
                                    <div class="form-row">

                                        <div class="form-group col-md-3">
                                            <label>Class Name</label>
                                            <input type="text" name="name[]" placeholder="Class Name" class="form-control" style="height: calc(1.5em + .5rem + 2px); padding: .25rem .5rem;  font-size: .875rem; line-height: 1.5; border-radius: .2rem" required>
                                        </div>
                                        

                                        

                                        <div class="form-group col-md-1 mx-1" style="padding-top: 30px;">
                                            <span class="btn btn-success btn-sm addeventmore"><i
                                                    class="fa fa-plus-circle"></i></span>
                                        </div>
                                    </div>


                                </div>

                                <button type="submit" class="btn btn-info">{{ @$editData ? 'Update' : 'Submit' }}</button>
                                <span style="color: red">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
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
                                <input type="text" name="name[]" placeholder="Class Name" class="form-control" style="height: calc(1.5em + .5rem + 2px); padding: .25rem .5rem;  font-size: .875rem; line-height: 1.5; border-radius: .2rem" required>
                            </div>

                            <div class="form-group col-md-2">
                                <div class="row mx-1">
                                    <span class="btn btn-success btn-sm mr-1 addeventmore"><i
                                            class="fa fa-plus-circle"></i></span>
                                    <span class="btn btn-danger btn-sm removeeventmore"><i
                                            class="fa fa-minus-circle"></i></span>
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
            $(document).ready(function() {
                var counter = 0;
                $(document).on("click", ".addeventmore", function() {
                    var whole_extra_item_add = $("#whole_extra_item_add").html();
                    $(this).closest(".add_item").append(whole_extra_item_add);
                    counter++
                });
                $(document).on("click", ".removeeventmore", function(event) {
                    $(this).closest(".delete_whole_extra_item_add").remove();
                    counter -= 1;
                });
            });

        </script>

    @endsection
