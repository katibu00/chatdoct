@php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();
$user = Auth::user()->usertype;
$school = App\Models\School::where('id',auth()->user()->school_id)->first();
@endphp

<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
       <a @if($user == 'teacher') href="{{route('teacher.home')}}" @elseif($user == 'student')  href="{{route('student.home')}}" @elseif($user == 'parent') href="{{route('parent.home')}}" @else href="{{route('admin.home')}}" @endif>
       <img src="/uploads/{{@$school->username}}/{{ @$school->logo }}" class="img-fluid" alt="School Logo" style="width:25px; height:25px; margin-top:9px;">
       <span><p style="font-size: 17px;">{{ @$school->username }}</p></span>
       </a>
       <div class="iq-menu-bt-sidebar">
          <div class="iq-menu-bt align-self-center">
             <div class="wrapper-menu">
                <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
                <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
             </div>
          </div>
       </div>
    </div>
    <div id="sidebar-scrollbar">
       <nav class="iq-sidebar-menu">
          <ul id="iq-sidebar-toggle" class="iq-menu">

             @if($user == "Admin" || $user == "Proprietor" || $user == "Principal" || $user == "VP Admin" || $user == "VP Academics")
               @include('layout.sidebars.admin');
             @endif

                {{-- IntelliSAS Admin --}}
             @if($user == "IntelliSAS")
             @include('layout.sidebars.intellisas');
             @endif


             {{-- Teacher Admin --}}
             @if($user == "Teacher")
             @include('layout.sidebars.teacher');
             @endif

            {{-- Parent --}}

            @if($user == "parent")
            @include('layout.sidebars.parent');
            @endif

            @if($user == "user")
            @include('layout.sidebars.user');
            @endif


          </ul>
       </nav>
       <div class="p-3"></div>
    </div>
 </div>

