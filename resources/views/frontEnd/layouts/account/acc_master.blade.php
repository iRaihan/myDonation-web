<html>
<title>

</title>


<head>

    <meta charset="UTF-8">
        <link rel="stylesheet" href="{{asset('public/frontEnd')}}/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('public/frontEnd')}}/assets/css/animate.min.css">
        <link rel="stylesheet" href="{{asset('public/frontEnd')}}/assets/css/fancybox.min.css">
        <link rel="stylesheet" href="{{asset('public/frontEnd')}}/assets/css/fontawesome.css">
        <link rel="stylesheet" href="{{asset('public/frontEnd')}}/assets/css/fontawesome.min.css">
        <link rel="stylesheet" href="{{asset('public/frontEnd')}}/assets/css/icons.min.css">
        <link rel="stylesheet" href="{{asset('public/frontEnd')}}/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="{{asset('public/frontEnd')}}/assets/css/responsive.css">
    <link rel="stylesheet" href="{{asset('public/frontEnd')}}/assets/css/style.css">
    <link rel="stylesheet" href="{{asset('public/frontEnd')}}/assets/css/customize-style.css">
    



</head>

<body>
       

                        @php
                        $vol_id=Session::get('volunteer_id');
                         $final_vol_id=App\Voluenteer_reg::where('id',$vol_id)->first();
                        @endphp


 
    <!-- <nav id="sidebar">
                 <div class="sidebar-header">
                   <img src="{{asset('public/images/volunteer_profile_images')}}/{{$final_vol_id->image}}" width="200">

                    <h4>{{$final_vol_id->first_name}}</h4>
                    <div class="logout-bar">
                          <a href="{{url('/logout')}}"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
                          </div>
                </div>

                <ul class="list-unstyled components">
                    <p>Dummy Heading</p>
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                                <a href="#">Events</a>
                            </li>
                            <li>
                                <a href="#">Services</a>
                            </li>
                            <li>
                                <a href="{{url('/volunteer/post_causes')}}">Post a Causes</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{url('/volunteer/donate/blood')}}">Donate Blood</a>
                    </li>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">History</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                                <a href="#">Events History</a>
                            </li>
                            <li>
                                <a href="#">Post History</a>
                            </li>
                            <li>
                                <a href="#">Blood Donate List</a>

                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Portfolio</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="account-body">
                <div class="container">
                       <div class="row">
                <div class="col-sm-2 col-lg-2 col-md-2">
                    
                </div>
                <div class="col-sm-10 col-lg-10 col-md-10">
                     @yield('acc_content')
                </div>
            </div>
            </div> -->
        <!--=== End Footer Section ====--> 
        <div class="main-header_account">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="serch_box">
                       <div class="input-group">
                <input class="form-control border-secondary py-2 " type="search" value="search">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary search_btn" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="menu-bar">
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">Volunteer</a>
                            <ul class="submenu">
                                <li> <a href="{{url('/volunteer-login')}}">Volunteer Login</a></li>
                                <li> <a href="{{url('/volunteer-reg')}}"> Create a Account</a></li>
                            </ul>
                            </li>
                            <li><a href="#">Donor</a>
                            <ul class="submenu">
                                <li> <a href="{{url('/donor/login')}}">Donor Login</a></li>
                                 <li> <a href="{{url('/donor/register')}}">Create a Account</a></li>
                                
                            </ul>
                            </li>
                              </ul>
                    </div>
                            </div>
                           <div class="col-sm-1">

                            
                              <div class="login_box">
                                  <a href="#">Logout</a>
                              </div>
                                    
                           </div>

            </div>
        </div>
        </div>
       
                
                    <div class="account_menu">
                        <a href="#">DoNation</a>

                        <div class="account_menu_img">

                            <img src="{{asset('public/images/volunteer_profile_images')}}/{{$final_vol_id->image}}" width="50">
                            <b>Raihan</b>
                        </div>
                        <ul>
                            
                            <li><a class="account_menu_btn" href="#">Home</a></li>
                            <li><a class="account_menu_btn" href="#">Services</a></li>
                            <li><a class="account_menu_btn" href="{{url('/volunteer/post_causes')}}">Causes</a></li>
                            <li><a class="account_menu_btn" href="">Events</a></li>
                            <li><a class="account_menu_btn" href="{{url('/volunteer/donate/blood')}}">Blood</a></li>
                            <li><a class="account_menu_btn" href="">Donate list</a></li>
                        </ul>
                    </div>
            

        

                        @yield('acc_content')
                        
                 
                
            </div>
        </div>
 


   <script src="{{asset('public/frontEnd')}}/assets/js/jquery.min.js"></script>

        <script src="{{asset('public/frontEnd')}}/assets/js/jquery.sticky.js"></script>
        <script src="{{asset('public/frontEnd')}}/assets/js/bootstrap.min.js"></script>
        <script src="{{asset('public/frontEnd')}}/assets/js/fancybox.min.js"></script>
        <script src="{{asset('public/frontEnd')}}/assets/js/fontawesome.js"></script>
        <script src="{{asset('public/frontEnd')}}/assets/js/fontawesome.min.js"></script>
        <script src="{{asset('public/frontEnd')}}/assets/js/owl.carousel.min.js"></script>
        <script src="{{asset('public/frontEnd')}}/assets/js/custom-scripts.js"></script>
        <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
       
        
</body>





</html>
