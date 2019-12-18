@extends('frontEnd.layouts.master')
@section('content')

    <div class="container">
        <div class="section-header-title">
      
         {{session('message')}}
        </div>
                          @php
                        $donor_id=Session::get('donor_id');

                        @endphp
                        <?php
                         if($donor_id==0){
                            ?>
        <div class="row">
            <div class="col-sm-4 col-lg-4 col-mg-4">
            </div>
            <div class="col-sm-4 col-lg-4 col-mg-4">
                <div class="login-form-box">

                    <form  action="{{url('/donor/account/login')}}" method="post">
                       @csrf
                        
                        <div class="form-group ">
                            <label for="inputAddress">Email</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('donor_email') ? ' is-invalid' : '' }}" name="donor_email" value="{{ old('donor_email') }}" required autofocus>

                                @if ($errors->has('donor_email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('donor_email') }}</strong>
                                    </span>
                                @endif
                        </div>
                
                        
                            <div class="form-group ">
                                <label for="inputEmail4">Password</label>
                                <input  type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                       <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                

                    </form>

                </div>
            </div>
        </div>
        <?php
                     }
                     else{
                       ?>

                     <h3>You are Alrady Login!</h3>
                     <b>Go to <a href="{{url('/donor/account')}}">Donor Penal</a></b>
                 
<?php
}?>
    </div>

@endsection