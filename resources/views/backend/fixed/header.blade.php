<!--**********************************
              Nav Header Start
        ***********************************-->


        <div class="nav-header">
            <div class="brand-logo">
                <a href="">
                    
                    <b class="logo-abbr"><img src="images/logo.png" alt=""> </b>
                    <span class="logo-compact"><img src="./images/logo-compact.png" alt=""></span>
                    <span class="brand-title" ><img src="images/logo.png" alt="" >
                    <h1 > <b>Employee Payroll </b></h1>
                        
                       
                    </span>
                </a>
            </div>
        </div>

        <!--**********************************
                     Nav Header End
        ***********************************-->



        <!--**********************************
                   Header Start
        ***********************************-->


        <div class="header">    
           
            <div class="header-content clearfix">
                <div class="nav-control">
                  <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                        
                        
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                        </div>
                        <input type="search" class="form-control" placeholder="Search" aria-label="Search Dashboard">
                        <div class="drop-down animated flipInX d-md-none">
                            <form action="#">
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </div>
                    </div>
                </div>
                
              <div class="header-right">
                    <ul class="clearfix">
                    
                    
                    <li class="icons dropdown">
                            <span>{{auth()->user()->role->name}}</span> |
                             
                     </li>
                        

                    
                       
                        </li>
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="https://cdn.vectorstock.com/i/preview-1x/52/84/logout-icon-in-trendy-glyph-style-isolated-vector-41395284.webp \" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">

                  
                  <ul>
                    <hr class="my-2">
                  
                    <li><a href=""><i class="icon-user"></i> <span>Profile</span></a></li>

                    <li><a href="{{route('logout')}}"><i class="icon-key"></i> <span>Logout</span></a></li>
                  </ul>
             
                    

                                
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
       

        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->







