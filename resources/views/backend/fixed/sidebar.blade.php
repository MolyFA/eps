 <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label"></li>
                    <br>

                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="{{url('/')}}" aria-expanded="false">
                            <i class=""></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="{{url('/admin')}}" aria-expanded="false">
                            <i class=""></i><span class="nav-text">User</span>
                        </a>
                    </li>

                    
                   
                

                    <li>
                        <a class="has-arrow" href="{{url('/employee')}}" aria-expanded="false">
                            <i class=""></i><span class="nav-text">Employee</span>
                        </a>
                   </li>
                   

                   
                   
                   <a class="btn btn-secondary" href="{{route('logout')}}">Logout</a>
                   
               </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
