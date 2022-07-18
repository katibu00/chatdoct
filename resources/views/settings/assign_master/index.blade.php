@extends('layout.master')
@section('PageTitle', 'Assign Form Master')
@section('content')


    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Assign Form Master</h4>

                            </div>
                            <a class="btn btn-success float-right btn-sm" href="{{ route('assign.master.create') }}"><i
                                    class="fa fa-plus-circle"></i> Assign Form Master </a>
                        </div>
                        <hr>
                        <div class="iq-card-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Class Name</th>
                                            <th>Form Master</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allData as $key => $value)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $value['class']['name'] }} {{ $value['class_section']['name'] }}</td>
                                                <td>{{ $value['user']['first_name'] }} {{ $value['user']['middle_name'] }} {{ $value['user']['last_name'] }}</td>
                                                <td>

                                                    <a title="Edit" class="btn btn-sm btn-primary"
                                                        href="{{ route('assign.master.edit', $value->id) }}"><i
                                                            class="fa fa-edit"></i></a>
                                                    <button title="Delete" class="btn btn-sm btn-danger"
                                                    data-toggle="modal" data-target=".delete{{$key+1}}"><i
                                                        class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>

                                            <div class="modal fade delete{{$key+1}}" tabindex="-1" role="dialog"  aria-hidden="true">
                                                <div class="modal-dialog modal-sm">
                                                   <div class="modal-content">
                                                      <div class="modal-header">
                                                         <h5 class="modal-title">Delete {{ $value['class']['name'] }} {{ $value['class_section']['name'] }}?</h5>
                                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                         <span aria-hidden="true">&times;</span>
                                                         </button>
                                                      </div>
                                                      <div class="modal-body">
                                                         <p>You cannot undo this operation after deleted. Are you sure you want to continue?</p>
                                                      </div>
                                                      <div class="modal-footer">
                                                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Dismiss</button>
                                                         <form action="{{ route('assign.master.delete') }}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{$value->id}}">
                                                         <button type="submit" class="btn btn-danger">Delete</button>
                                                         </form>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>

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
