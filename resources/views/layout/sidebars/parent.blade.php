<li class="{{($route=='parent.home')?'active':''}}"><a href="{{route('parent.home')}}"><i class="fas fa-home"></i></i>Home</a></li>

<li class="{{($route=='make.payment')?'active':''}}"><a href="{{route('make.payment')}}"><i class="fas fa-money"></i></i>Make Payment</a></li>

<li class="{{($prefix=='/parent/fee')?'active':''}}">
   <a href="#register" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="{{($prefix=='/parent/fee')?'true':'false'}}"><i class="fas fa-file-invoice-dollar"></i><span>Fees</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
   <ul id="register" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
      <li class="{{($route=='invoice.index.parent')?'active':''}}"><a href="{{route('invoice.index.parent')}}"><i class="ri-record-circle-line"></i></i>Deposit Slip</a></li>
      <li class="{{($route=='payment.receipt.index.parent')?'active':''}}"><a href="{{route('payment.receipt.index.parent')}}"><i class="ri-record-circle-line"></i></i>Receipt</a></li>
      <li class="{{($route=='transaction.history.index.parent')?'active':''}}"><a href="{{route('transaction.history.index.parent')}}"><i class="ri-record-circle-line"></i></i>Transaction History</a></li>
   </ul>
</li>

<li class="{{($prefix=='/parent/result')?'active':''}}">
   <a href="#exam" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="{{($prefix=='/parent/result')?'true':'false'}}"><i class="fas fa-user-graduate"></i><span>Exams</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
   <ul id="exam" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
      <li class="{{($route=='ca.index.parent')?'active':''}}"><a href="{{route('ca.index.parent')}}"><i class="ri-record-circle-line"></i></i>Gradebook</a></li>
      <li class="{{($route=='termly.report.index.parent')?'active':''}}"><a href="{{route('termly.report.index.parent')}}"><i class="ri-record-circle-line"></i></i>End of Term Report</a></li>
      {{-- <li class="{{($route=='school.index')?'active':''}}"><a href="{{route('school.index')}}"><i class="ri-record-circle-line"></i></i>End of Session Report</a></li> --}}
   </ul>
</li>

<li class="{{($prefix=='/parent/attendance')?'active':''}}">
   <a href="#attendance" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="{{($prefix=='/parent/attendance')?'true':'false'}}"><i class="fas fa-calendar-alt"></i><span>Attendance</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
   <ul id="attendance" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
      <li class="{{($route=='attendance.report.parent')?'active':''}}"><a href="{{route('attendance.report.parent')}}"><i class="ri-record-circle-line"></i></i>Attendance Report</a></li>

   </ul>
</li>