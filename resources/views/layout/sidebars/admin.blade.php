<li><a href="{{route('admin.home')}}" class="iq-waves-effect"><i class="ri-home-4-line"></i><span>Home</span></a></li>

<li  class="{{($route=='payment.verification.index')?'active':''}}"><a href="{{route('payment.verification.index')}}" class="iq-waves-effect"><i class="fas fa-bell"></i><span>Payment Notifications</span></a></li>

 {{-- <li class="{{($prefix=='/communication')?'active':''}}">
           <a href="#communication" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="{{($prefix=='/communication')?'true':'false'}}"><i class="fas fa-bullhorn"></i><span>Communication</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
           <ul id="communication" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
              <li class="{{($route=='communication.index')?'active':''}}"><a href="{{route('communication.index')}}"><i class="ri-record-circle-line"></i>Send Email</a></li>

   </ul>
</li> --}}


<li class="{{($prefix=='/users')?'active':''}}">
   <a href="#users" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="{{($prefix=='/users')?'true':'false'}}"><i class="fas fa-user-friends"></i><span>Users</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
   <ul id="users" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
      {{-- <li class="{{($route=='register.students')?'active':''}}"><a href="{{route('register.students')}}"><i class="ri-record-circle-line"></i></i>Register Students</a></li> --}}
      <li class="{{($route=='students.index')?'active':''}} {{($route=='register.students')?'active':''}}"><a href="{{route('students.index')}}"><i class="ri-record-circle-line"></i></i>Students</a></li>
      <li class="{{($route=='staffs.index')?'active':''}} {{($route=='register.staffs')?'active':''}}"><a href="{{route('staffs.index')}}"><i class="ri-record-circle-line"></i></i>Staffs</a></li>
      <li class="{{($route=='parents.index')?'active':''}} {{($route=='register.parents')?'active':''}}"><a href="{{route('parents.index')}}"><i class="ri-record-circle-line"></i></i>Parents</a></li>
   </ul>
</li>

{{-- <li class="{{($prefix=='/admission')?'active':''}}">
   <a href="#admission" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="{{($prefix=='/admission')?'true':'false'}}"><i class="fas fa-user-friends"></i><span>Admission</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
   <ul id="admission" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
      <li class="{{($route=='applicant.index')?'active':''}} {{($route=='register.applicant')?'active':''}}"><a href="{{route('applicant.index')}}"><i class="ri-record-circle-line"></i></i>Applicants</a></li>
      <li class="{{($route=='students.index')?'active':''}} {{($route=='register.students')?'active':''}}"><a href="{{route('students.index')}}"><i class="ri-record-circle-line"></i></i>Offline Admission Form</a></li>
      <li class="{{($route=='students.index')?'active':''}} {{($route=='register.students')?'active':''}}"><a href="{{route('students.index')}}"><i class="ri-record-circle-line"></i></i>Bulk Admission Letter</a></li>
      <li class="{{($route=='students.index')?'active':''}} {{($route=='register.students')?'active':''}}"><a href="{{route('students.index')}}"><i class="ri-record-circle-line"></i></i>Register New Applicant</a></li>

   </ul>
</li> --}}


<li class="{{($prefix=='/marks')?'active':''}}">
   <a href="#marks" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="{{($prefix=='/marks')?'true':'false'}}"><i class="fas fa-poll"></i></i><span>Marks</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
   <ul id="marks" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
      <li class="{{($route=='marks.create')?'active':''}}"><a href="{{route('marks.create')}}"><i class="ri-record-circle-line"></i>Record Marks</a></li>
      <li class="{{($route=='marks.edit')?'active':''}}"><a href="{{route('marks.edit')}}"><i class="ri-record-circle-line"></i>Edit Record</a></li>
      <li class="{{($route=='marks.submission.index')?'active':''}} {{($route=='marks.submission.search')?'active':''}}"><a href="{{route('marks.submission.index')}}"><i class="ri-record-circle-line"></i>Gradebook</a></li>
      <li class="{{($route=='marks.offline.index')?'active':''}}"><a href="{{route('marks.offline.index')}}"><i class="ri-record-circle-line"></i>Offline Marksheet</a></li>
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

<li class="{{($prefix=='/account')?'active':''}}">
   <a href="#account" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="{{($prefix=='/account')?'true':'false'}}"><i class="fas fa-file-invoice-dollar"></i><span>Accountant</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
   <ul id="account" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
      <li class="{{($route=='invoice.index')?'active':''}}"><a href="{{route('invoice.index')}}"><i class="ri-record-circle-line"></i>Issue Payment Slip</a></li>
      <li class="{{($route=='debt.index')?'active':''}}"><a href="{{route('debt.index')}}"><i class="ri-record-circle-line"></i>Track Debt</a></li>
      <li class="{{($route=='record.payment.index')?'active':''}}"><a href="{{route('record.payment.index')}}"><i class="ri-record-circle-line"></i>Record Payment</a></li>
      <li class="{{($route=='payment.receipt.index')?'active':''}}"><a href="{{route('payment.receipt.index')}}"><i class="ri-record-circle-line"></i>Issue Receipt</a></li>
      <li class="{{($route=='payment.report.index')?'active':''}}"><a href="{{route('payment.report.index')}}"><i class="ri-record-circle-line"></i>Payment Report</a></li>
      <li class="{{($route=='transaction.history.index')?'active':''}}"><a href="{{route('transaction.history.index')}}"><i class="ri-record-circle-line"></i>Transaction History</a></li>
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

<li class="{{($prefix=='/promotion')?'active':''}}">
   <a href="#promotion" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="{{($prefix=='/promotion')?'true':'false'}}"><i class="fas fa-forward"></i><span>Promotion</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
   <ul id="promotion" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
      <li class="{{($route=='promotion.index')?'active':''}}"><a href="{{route('promotion.index')}}"><i class="ri-record-circle-line"></i>Promote Students</a></li>

   </ul>
</li>

<li class="{{($prefix=='/frontend')?'active':''}}">
   <a href="#frontend" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="{{($prefix=='/frontend')?'true':'false'}}"><i class="fas fa-laptop"></i><span>Frontend</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
   <ul id="frontend" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
      <li class="{{($route=='basic.settings.index')?'active':''}}"><a href="{{route('basic.settings.index')}}"><i class="ri-record-circle-line"></i>Basic Setup</a></li>
      <li class="{{($route=='blog.index')?'active':''}} {{($route=='blog.create')?'active':''}}"><a href="{{route('blog.index')}}"><i class="ri-record-circle-line"></i>Blogs</a></li>
      <li class="{{($route=='promotion.index')?'active':''}}"><a href="{{route('promotion.index')}}"><i class="ri-record-circle-line"></i>Events</a></li>

   </ul>
</li>

<li  class="{{($route=='answersheet.index')?'active':''}}"><a href="{{route('answersheet.index')}}" class="iq-waves-effect"><i class="fas fa-sticky-note"></i><span>Answer Sheet</span></a></li>

{{-- @php
   dd($prefix);
@endphp --}}
<li class="{{($prefix=='/IDCards')?'active':''}}">
   <a href="#idcards" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="{{($prefix=='/IDCards')?'true':'false'}}"><i class="fas fa-id-card"></i><span>ID card</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
   <ul id="idcards" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
      <li class="{{($route=='id_cards.index')?'active':''}}"><a href="{{route('id_cards.index')}}"><i class="ri-record-circle-line"></i>Generate ID cards</a></li>
   </ul>
</li>


<li class="{{($prefix=='/testimonial')?'active':''}}">
   <a href="#testimonial" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="{{($prefix=='/testimonial')?'true':'false'}}"><i class="fas fa-certificate"></i><span>Testimonial</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
   <ul id="testimonial" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
      <li class="{{($route=='testimonial.index')?'active':''}}"><a href="{{route('testimonial.index')}}"><i class="ri-record-circle-line"></i>Generate Generate</a></li>
   </ul>
</li>

   <li class="{{($prefix=='/settings')?'active':''}}">
   <a href="#settings" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="{{($prefix=='/settings')?'true':'false'}}"><i class="fas fa-cog"></i><span>Settings</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
   <ul id="settings" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
      <li class="{{($route=='school.edit')?'active':''}}"><a href="{{route('school.edit')}}"><i class="ri-record-circle-line"></i>Institution</a></li>
      <li class="{{($route=='sessions.index')?'active':''}} {{($route=='sessions.create')?'active':''}}{{($route=='sessions.edit')?'active':''}}"><a href="{{route('sessions.index')}}"><i class="ri-record-circle-line"></i></i>Sessions</a></li>
      <li class="{{($route=='classes.index')?'active':''}} {{($route=='classes.create')?'active':''}}{{($route=='classes.edit')?'active':''}}"><a href="{{route('classes.index')}}"><i class="ri-record-circle-line"></i></i>Classes</a></li>
      <li class="{{($route=='class.sections.index')?'active':''}} {{($route=='class.sections.create')?'active':''}}{{($route=='class.sections.edit')?'active':''}}"><a href="{{route('class.sections.index')}}"><i class="ri-record-circle-line"></i></i>Class Sections</a></li>

      <li class="{{($route=='school.sections.index')?'active':''}} {{($route=='school.sections.create')?'active':''}}{{($route=='school.sections.edit')?'active':''}}"><a href="{{route('school.sections.index')}}"><i class="ri-record-circle-line"></i></i>School Sections</a></li>
      <li class="{{($route=='assign.class.index')?'active':''}} {{($route=='assign.class.create')?'active':''}} {{($route=='assign.class.details')?'active':''}} {{($route=='assign.class.edit')?'active':''}}"><a href="{{route('assign.class.index')}}"><i class="ri-record-circle-line"></i>Assign Classes</a></li>


      <li class="{{($route=='subjects.index')?'active':''}} {{($route=='subjects.create')?'active':''}}{{($route=='subjects.edit')?'active':''}}"><a href="{{route('subjects.index')}}"><i class="ri-record-circle-line"></i></i>Subjects</a></li>
      <li class="{{($route=='assign.subjects.index')?'active':''}} {{($route=='assign.subjects.create')?'active':''}} {{($route=='assign.subjects.details')?'active':''}} {{($route=='assign.subjects.edit')?'active':''}}"><a href="{{route('assign.subjects.index')}}"><i class="ri-record-circle-line"></i>Assign Subjects</a></li>
      <li class="{{($route=='assign.master.index')?'active':''}} {{($route=='assign.master.create')?'active':''}} {{($route=='assign.master.details')?'active':''}} {{($route=='assign.master.edit')?'active':''}}"><a href="{{route('assign.master.index')}}"><i class="ri-record-circle-line"></i>Assign Form Master</a></li>

      <li class="{{($route=='fee.category.index')?'active':''}} {{($route=='fee.category.create')?'active':''}} {{($route=='fee.category.edit')?'active':''}}"><a href="{{route('fee.category.index')}}"><i class="ri-record-circle-line"></i></i>Fee category</a></li>
      <li class="{{($route=='fee.assign.index')?'active':''}} {{($route=='fee.assign.create')?'active':''}}  {{($route=='fee.assign.details.fresh')?'active':''}} {{($route=='fee.assign.details.returning')?'active':''}}{{($route=='fee.assign.edit.fresh')?'active':''}}{{($route=='fee.assign.edit.returning')?'active':''}}"><a href="{{route('fee.assign.index')}}"><i class="ri-record-circle-line"></i>Assign Fee</a></li>

      <li class="{{($route=='payment.description.index')?'active':''}} {{($route=='payment.description.create')?'active':''}} {{($route=='payment.description.edit')?'active':''}}"><a href="{{route('payment.description.index')}}"><i class="ri-record-circle-line"></i>Payment Types</a></li>
      <li class="{{($route=='payment.method.index')?'active':''}} {{($route=='payment.method.create')?'active':''}} {{($route=='payment.method.edit')?'active':''}}"><a href="{{route('payment.method.index')}}"><i class="ri-record-circle-line"></i>Payment Methods</a></li>
      {{-- <li class="{{($route=='grades.index')?'active':''}} {{($route=='grades.create')?'active':''}}{{($route=='grades.edit')?'active':''}}"><a href="{{route('grades.index')}}"><i class="ri-record-circle-line"></i></i>Grading Scheme</a></li> --}}
      <li class="{{($route=='ca.index')?'active':''}} {{($route=='ca.create')?'active':''}}{{($route=='ca.edit')?'active':''}}"><a href="{{route('ca.index')}}"><i class="ri-record-circle-line"></i></i>Assessment Scheme</a></li>
   </ul>
</li>

<li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Service</span></li>
<li class="{{($prefix=='/service')?'active':''}}">
   <a href="#servicefee" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="{{($prefix=='/service')?'true':'false'}}"><i class="fas fa-charging-station"></i><span>Service Status</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
   <ul id="servicefee" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
      <li class="{{($route=='service.fee.view')?'active':''}}"><a href="{{route('service.fee.view')}}"><i class="ri-record-circle-line"></i>Service Status</a></li>
   </ul>
</li>
