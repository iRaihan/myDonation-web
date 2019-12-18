@extends('frontEnd.layouts.master')
@section('content')

    <div class="container">
        <div class="section-header-title">
            <h4> Volenteer Registration Form </h4>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="volenteer-form-box">

                   <form action="{{url('volunteer/registration')}}" method="post" enctype="multipart/form-data">
                            @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">First Name</label>
                                <input type="text" class="form-control" name="first_name"  placeholder="first name" required autofocus/>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Last Name</label>
                                <input type="text" class="form-control"  name="last_name" placeholder="last name"required autofocus/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Email</label>
                              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Phone Number</label>
                            <input type="text" class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" placeholder="+880" required autofocus/>
                            @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">NID or Birth ID</label>
                            <input type="text" class="form-control" name="nid_bid" placeholder="nid or birth id" required autofocus/>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Profession</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="profession" required autofocus/>
                            <option value="">Chose a Option</option>
                                <option value="Student">Student</option>
                                <option value="Employment">Employment</option>
                                <option value="Busniess">Busniess</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Name of The Organization</label>
                            <input type="text" class="form-control" name="organization" placeholder="Dhaka University" required autofocus/>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Blood Group</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="blood" required autofocus/>
                                <option value="">Chose a Option</option>
                                <option value="A+">A+ ( Possitive )</option>
                                <option value="A-">A- ( Nagetive )</option>
                                <option value="B+">B+ ( Possitive )</option>
                                <option value="B-">B- ( Nagetive )</option>
                                <option value="O+">O+ ( Possitive )</option>
                                <option value="O-">O- ( Nagetive )</option>
                                <option value="AB+">AB+ ( Possitive )</option>
                                <option value="AB-">AB- ( Nagetive )</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="inputAddress2"> Present Address</label>
                            <input type="text" class="form-control" id="inputAddress2"  name="present_address" placeholder="Apartment, studio, or floor" required autofocus/>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Parmanet Address</label>
                                <input type="text" class="form-control" id="inputCity" name="parmanent_address" required autofocus/>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity">District</label>
                                <input type="text" class="form-control" id="inputCity" name="district" required autofocus/>
                            </div>

                            <div class="form-group col-md-2">
                                <label for="inputZip">Zip Code</label>
                                <input type="text" class="form-control" id="inputZip" name="zip_code" required autofocus/>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="inputAddress2"> Upload Image</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Password</label>
                                <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" placeholder="password" name="password"/>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Confirm Passsword</label>
                                <input type="password" class="form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" id="password_confirmation" name="password_confirmation" placeholder="Re-password"/>
                                @if ($errors->has('password_confirmation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <button type="reset" class="btn btn-danger">Reset</button>
                        <button type="submit" class="btn btn-primary float-right"> {{ __('Register') }}</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection