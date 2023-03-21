 <!--**********************************
            Sidebar start
        ***********************************-->
 <div class="nk-sidebar">
   <div class="nk-nav-scroll">
     <ul class="metismenu" id="menu">
      



       <li class="nav-label"></li>
      
       



       @if(auth()->user()->role->name == 'admin' || auth()->user()->role->name == 'manager')
       <li class="mega-menu mega-menu-sm">
         <a class="" href="{{route('dashboard')}}" aria-expanded="false">
           <i class="icon-grid menu-icon"></i><span class=" ">Dashboard</span>
         </a>
       </li>
       @endif



       @if(auth()->user()->role->name == 'admin' || auth()->user()->role->name == 'manager')
       <li class="mega-menu mega-menu-sm">

         <a class="" href="{{route('department')}}" aria-expanded="false">
            
           <i class="icon-grid menu-icon"></i><span>Department</span>

           </a>
         </li>
        @endif




        @if(auth()->user()->role->name == 'admin' || auth()->user()->role->name == 'manager')
       <li>
         <a class="" href="{{route('employee')}}" aria-expanded="false">
           <i class="icon-grid menu-icon"></i><span class="nav-text">Employee</span>
         </a>
       </li>

       @endif


       @if(auth()->user()->role->name == 'admin' || auth()->user()->role->name == 'manager')
       <li>
         <a class="" href="{{route('designation')}}" aria-expanded="false">
           <i class="icon-grid menu-icon"></i><span>Designation</span>
         </a>
       </li>
       @endif



       <li>
         <a class="" href="{{route('salary')}}" aria-expanded="false">
           <i class="icon-grid menu-icon"></i><span>Salary</span>
        </a>
       </li>

       <li>
         <a class="" href="{{route('salary.report')}}" aria-expanded="false">
           <i class="icon-grid menu-icon"></i><span>Salary Report</span>
        </a>
       </li>






       @if(auth()->user()->role->name == 'admin' )
       <li>
         <a class="" href="{{route('leavetype')}}" aria-expanded="false">

           <i class="icon-grid menu-icon"></i><span>Leave Type</span>
         </a>
       </li>
       @endif
      
      
      
       <li>
         <a class="" href="{{route('leaveapply')}}" aria-expanded="false">

           <i class="icon-grid menu-icon"></i><span>Leave Apply</span>
         </a>

       </li>


       <li>
         <a class="" href="{{route('leave.report')}}" aria-expanded="false">
           <i class="icon-grid menu-icon"></i><span>Leave Report</span>
         </a>
       </li>





       <li>

         <a class="" href="{{route('attendance')}}" aria-expanded="false">

           <i class="icon-grid menu-icon"></i><span>Attendance</span>


         </a>

       </li>
       <li>

         <a class="" href="{{route('payment')}}" aria-expanded="false">

           <i class="icon-grid menu-icon"></i><span>Payment</span>
         </a>
        </li>


        @if(auth()->user()->role->name == 'admin')
       <li>
         <a class="" href="{{route('user.list')}}" aria-expanded="false">

           <i class="icon-grid menu-icon"></i><span>User</span>
         </a>
       </li>
       @endif


       @if(auth()->user()->role->name == 'admin')
       <li>
        <a class="" href="{{route('role.list')}}" aria-expanded="false">

           <i class="icon-grid menu-icon"></i><span>Role</span>
       </a>
      </li>
      @endif

       

      @if(auth()->user()->role->name == 'admin' )
      <li>
          <a class="" href="{{route('report')}}" aria-expanded="false">

           <i class="icon-grid menu-icon"></i><span>Report generate</span>
         </a>
      </li>
      @endif






       

   </div>
 </div>
 <!--**********************************
            Sidebar end
        ***********************************-->