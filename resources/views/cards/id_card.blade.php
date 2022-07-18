
 @extends('layout.master')
 @section('PageTitle', ' Generate ID Cards')
 @section('content')


 <div id="content-page" class="content-page">
     <div class="container-fluid">
        <div class="row">
           <div class="col-sm-12">
                 <div class="iq-card">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">
                           Generate ID Cards
                          </div>

                       </div>
                       <hr>
                       <div class="iq-card-body col-md-10 mx-auto">
                         <form class="form-horizontal" method="POST" action="{{route('id_cards.generate')}}" target="_blank">
                             @csrf


                                 <div class="form-row">

                                    <div class="col-sm-3">
                                     <label>Student:</label>
                                            <select class="form-control form-control-sm"  name="class_id" required>
                                                <option value="">Select Item</option>
                                                @foreach ($classes as $class)
                                                <option value="{{$class['class']['id']}}">{{$class['class']['name']}}</option>
                                                @endforeach
                                            </select>
                                         </div>

                                    <div class="form_group col-md-3" style="padding-top: 32px;">
                                       <button type="submit" class="btn btn-sm btn-primary text-white">Print ID Card</button>
                                    </div>
                                 </div>
                          </form>
                       </div>
                    </div>
           </div>
        </div>

     </div>
  </div>
  </div>
  @endsection



