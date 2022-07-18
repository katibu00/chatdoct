{{-- IntelliSAS Admin --}}

{{-- <li class="{{($prefix=='/schools')?'active':''}}">
<a href="#register" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="{{($prefix=='/school')?'true':'false'}}"><i class="ri-menu-3-line"></i><span>School</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
<ul id="register" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
    <li class="{{($route=='school.index')?'active':''}}"><a href="{{route('school.index')}}"><i class="ri-record-circle-line"></i></i>Schools</a></li>
    <li class="{{($route=='logs.index')?'active':''}}"><a href="{{route('logs.index')}}"><i class="ri-record-circle-line"></i></i>Log</a></li>
</ul>
</li> --}}

<li class="{{($route=='intellisas.home')?'active':''}}"><a href="{{route('intellisas.home')}}" class="iq-waves-effect"><i class="fa fa-home"></i><span>Home</span></a></li>
<li class="{{($route=='school.index')?'active':''}}"><a href="{{route('school.index')}}" class="iq-waves-effect"><i class="fas fa-building"></i><span>Schools</span></a></li>
<li class="{{($route=='logs.index')?'active':''}}"><a href="{{route('logs.index')}}" class="iq-waves-effect"><i class="ri-calendar-2-line"></i><span>Log</span></a></li>
      