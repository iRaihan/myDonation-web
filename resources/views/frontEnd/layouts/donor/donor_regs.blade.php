@extends('frontEnd.layouts.master')
@section('content')
<div class="bg_back">
<div class="container">
	<div class="row">
		<div class="col-md-2 col-sm-2">
			
		</div>
		<div class="col-md-8 col-sm-8">
			<div class="donor-personal-info white">
                <form action="{{url('/donor/registration')}}" method="post">
                            @csrf
                                
                                    <div class="form-row">
                                        <div class="form-group col-md-6 ">
                                            <label for="inputEmail4"><h4>Personal Information</h4></label>    
                                        </div> 
                                    </div>
                                     <div class="form-group">
                                        <label for="inputAddress">Full Name*</label>
                                        <input type="text" class="form-control " name='donor_full_name'  placeholder="Full Name" required>
                                    </div>
                                        <div class="form-group">
                                        <label for="inputAddress2">Email*</label>
                                        <input type="email" class="form-control{{ $errors->has('donor_email') ? ' is-invalid' : '' }}" name="donor_email" value="{{ old('donor_email') }}" required>
                                        @if ($errors->has('donor_email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('donor_email') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                     <div class="form-group">
                                        <label for="inputAddress">Address*</label>
                                        <input type="text" class="form-control" name="donor_address1" placeholder="1234 Main St" required>
                                    </div>
                                     <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Address2</label>
                                            <input type="text" class="form-control" name="donor_address2" placeholder="1234 Main St">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Phone Number*</label>
                                            <input type="text" class="form-control" name="donor_phone" placeholder="+8801" required>
                                        </div>
                                    </div>
                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Password*</label>
                                            <input type="password"  class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" required>
                                             @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Re-Password*</label>
                                            <input type="password" name="password_confirmation" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" value="{{ old('password_confirmation') }}" required placeholder="Re-password">
                                                 @if ($errors->has('password_confirmation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                                        </div>
                                    </div>

                             <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                            </div>
                 </form>       

		</div>
		<div class="col-md-2 col-sm-2">
			
		</div>
	</div>
</div>
</div>
@endsection