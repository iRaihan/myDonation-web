@extends('frontEnd.layouts.master')
@section('content')

    <div class="container">
        <div class="section-header-title">
        <h4>Login Form</h4>
                @if (session('message'))
                <div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('message') }}
                </div>
    @endif
        </div>
        <div class="row">
            <div class="col-sm-4 col-lg-4 col-mg-4">
            </div>
            <div class="col-sm-4 col-lg-4 col-mg-4">
                <div class="login-form-box">

                    <form  action="{{url('/volunteer/account')}}" method="post">
                       @csrf
                        
                        <div class="form-group ">
                            <label for="inputAddress">Email</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                
                        
                            <div class="form-group ">
                                <label for="inputEmail4">Password</label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

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
    </div>

@endsection