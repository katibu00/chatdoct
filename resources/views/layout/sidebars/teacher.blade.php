<li class="{{($route=='teacher.home')?'active':''}}"><a href="{{route('teacher.home')}}" class="iq-waves-effect"><i class="fa fa-home"></i><span>Home</span></a></li>
<li class="{{($prefix=='/users')?'active':''}}">
  <a href="#users" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="{{($prefix=='/users')?'true':'false'}}"><i class="fas fa-user-friends"></i><span>Users</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
  <ul id="users" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
     <li class="{{($route=='students.index')?'active':''}} {{($route=='register.students')?'active':''}}"><a href="{{route('students.index')}}"><i class="ri-record-circle-line"></i></i>Students</a></li>
  </ul>
</li>


<li class="{{($prefix=='/marks')?'active':''}}">
  <a href="#marks" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="{{($prefix=='/marks')?'true':'false'}}"><i class="fas fa-poll"></i><span>Marks</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
  <ul id="marks" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
     <li class="{{($route=='marks.create')?'active':''}}"><a href="{{route('marks.create')}}"><i class="ri-record-circle-line"></i>Record Marks</a></li>
     <li class="{{($route=='marks.edit')?'active':''}}"><a href="{{route('marks.edit')}}"><i class="ri-record-circle-line"></i>Edit Record</a></li>
     <li class="{{($route=='marks.submission.index')?'active':''}} {{($route=='marks.submission.search')?'active':''}}"><a href="{{route('marks.submission.index')}}"><i class="ri-record-circle-line"></i>Gradebook</a></li>
  </ul>
</li>

<li class="{{($prefix=='/results')?'active':''}}">
<a href="#results" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="{{($prefix=='/results')?'true':'false'}}"><i class="fas fa-user-graduate"></i><span>Results</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
<ul id="results" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
   <li class="{{($route=='termly.report.index')?'active':''}}"><a href="{{route('termly.report.index')}}"><i class="ri-record-circle-line"></i>End of Term Report</a></li>
   <li class="{{($route=='session.report.index')?'active':''}}"><a href="{{route('session.report.index')}}"><i class="ri-record-circle-line"></i>End of Session Report</a></li>
   <li class="{{($route=='broad.report.index')?'active':''}}"><a href="{{route('broad.report.index')}}"><i class="ri-record-circle-line"></i>Broadsheet Result</a></li>
   <li class="{{($route=='comment.report.index')?'active':''}}"><a href="{{route('comment.report.index')}}"><i class="ri-record-circle-line"></i>Comment-Based Result</a></li>
   <li class="{{($route=='psychomotor.report.index')?'active':''}}"><a href="{{route('psychomotor.report.index')}}"><i class="ri-record-circle-line"></i>Psychomotor-Based Result</a></li>
</ul>
</li>

<li class="{{($prefix=='/attendance')?'active':''}}">
<a href="#attendance" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="{{($prefix=='/attendance')?'true':'false'}}"><i class="fas fa-calendar-alt"></i><span>Attendance</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
<ul id="attendance" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
   <li class="{{($route=='attendance.create')?'active':''}}"><a href="{{route('attendance.create')}}"><i class="ri-record-circle-line"></i>Take Attendance</a></li>
   <li class="{{($route=='attendance.index')?'active':''}} {{($route=='attendance.index.search')?'active':''}} {{($route=='attendance.details')?'active':''}}"><a href="{{route('attendance.index')}}"><i class="ri-record-circle-line"></i>Attendance Report</a></li>
   {{-- <li  class="{{($route=='attendance.report')?'active':''}}"><a href="{{route('attendance.report')}}"><i class="ri-record-circle-line"></i>Attendance Report</a></li> --}}
   <li  class="{{($route=='attendance.offline.index')?'active':''}}"><a href="{{route('attendance.offline.index')}}"><i class="ri-record-circle-line"></i>Offline Attendance Sheet</a></li>
</ul>
</li>

<li class="{{($prefix=='/communication')?'active':''}}">
  <a href="#communication" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="{{($prefix=='/communication')?'true':'false'}}"><i class="fas fa-bullhorn"></i><span>Communication</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
  <ul id="communication" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
     <li class="{{($route=='communication.index')?'active':''}}"><a href="{{route('communication.index')}}"><i class="ri-record-circle-line"></i>Send Email</a></li>

  </ul>
</li>
