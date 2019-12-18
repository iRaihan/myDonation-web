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
                        $don_id=Session::get('donor_id');
                         $final_donor_id=App\Donor_reg::where('id',$don_id)->first();
                        @endphp


 

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
                            <b> {{ $final_donor_id->donor_full_name}}</b>
                        </div>
                        <ul>
                            
                            <li><a class="account_menu_btn" href="#">Home</a></li>
                            <li><a class="account_menu_btn" href="#">Services</a></li>
                            <li><a class="account_menu_btn" href="">Causes</a></li>
                            <li><a class="account_menu_btn" href="">Events</a></li>
                            <li><a class="account_menu_btn" href="">Blood</a></li>
                            <li><a class="account_menu_btn" href="{{url('check/donate/list')}}">Donate list</a></li>
                             <li><a class="account_menu_btn" href="{{url('check/donation/report')}}">Donation Report</a></li>
                        </ul>
                    </div>
            

        

                        @yield('donor_content')
                        
                 
                
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
