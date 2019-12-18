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
         <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/style.css')}}">
         <link rel="stylesheet" href="{{asset('public/frontEnd')}}/assets/css/customize-style.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   


   <script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>



</head>

<body><div class="contact_header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                
                         <a href="{{url('/logout')}}"> <i class="fa fa-sign-out" aria-hidden="true"> Logout</i> </a>
                       
                        <i class="fa fa-envelope-o" aria-hidden="true"> raihan.cse.bd@gmail.com</i>
                  <i class="fa fa-phone" aria-hidden="true"> +8801748419021</i>
                 <a href=""> <i class="fa fa-map-marker" aria-hidden="true"> 66,Green Road,Dhaka,1205.</i> </a>
                          </div>
            </div>
        </div>
    </div>

      </div>
       <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="main-logo">

                      <b style="color: red; font-size:35px" >D</b><b style="color: green; font-size:35px" >o</b><b style="color: green; font-size:35px" >Nati</b><b style="color: red; font-size:35px" >o</b><b style="color: green; font-size:35px" >n</b>

                    </div>
                </div>
                <div class="col-sm-8">
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
                           <div class="col-sm-2">

                            @yield('header_menu_content')
                              
                                    
                           </div>

            </div>
        </div>
        </div>


@yield('content')
    



        <section>
            <!--===Footer Section ====-->
            <div class="footer-section">
                <div class="container">
                    <div class="row">
                        <div class="footer-text">
                            <strong>Copy Right 2019</strong>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!--=== End Footer Section ====-->




    </main>
    <script src="{{asset('public/frontEnd')}}/assets/js/jquery.min.js"></script>

        <script src="{{asset('public/frontEnd')}}/assets/js/jquery.sticky.js"></script>
        <script src="{{asset('public/frontEnd')}}/assets/js/bootstrap.min.js"></script>
        <script src="{{asset('public/frontEnd')}}/assets/js/fancybox.min.js"></script>
        <script src="{{asset('public/frontEnd')}}/assets/js/fontawesome.js"></script>
        <script src="{{asset('public/frontEnd')}}/assets/js/fontawesome.min.js"></script>
        <script src="{{asset('public/frontEnd')}}/assets/js/owl.carousel.min.js"></script>
        <script src="{{asset('public/frontEnd')}}/assets/js/custom-scripts.js"></script>
        
</body>





</html>