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
   



</head>
<main>
    <div class="container">
    <div class="row">
            <div class="col-sm-4 col-lg-4 col-mg-4">
            </div>
            <div class="col-sm-4 col-lg-4 col-mg-4 " style="margin-top: 80px" >
                 <b style="color: red; font-size:35px" >D</b><b style="color: green; font-size:35px" >o</b><b style="color: green; font-size:35px" >Nati</b><b style="color: red; font-size:35px" >o</b><b style="color: green; font-size:35px" >n</b> <b>Admin Panel</b><br><br>
                <div class="login-form-box">
                   

                    <form  action="{{ route('login') }}" method="post">
                       @csrf
                        
                        <div class="form-group ">
                            <label for="inputAddress">Email</label>
                            <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="enter your email">
                             @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                
                        
                            <div class="form-group ">
                                <label for="inputEmail4">Password</label>
                                <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" placeholder="password" name="password">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                                
                            </div>

                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </form>
                    

                </div>
            </div>

        </div>
    </div>

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