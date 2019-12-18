@extends('frontEnd.layouts.volunteer.volunteer_blood_home')


@section('volunteer_main_contant')

<div class="row">
        <div class="col-sm-2 ">
        </div>
        <div class="col-sm-8 ">
            <form method="post" action="{{url('volunteer/insert/blood/post')}}" >
                @csrf
                <div class="card card-body">

                    <h5 class="card-header  text-center py-4">
                        <strong>Post For Blood </strong>
                    </h5>
                    <br>
                    @if (Session::has('message'))
                           <div class="alert alert-success">{{ Session::get('message') }}</div>
                        @endif

                        @php
                        $volunteer_id=Session::get('volunteer_id');
                         
                        @endphp
                        <input type="hidden" value="{{$volunteer_id}}" name="volunteer_id">

                    <div class="form-group">
                        <label>Blood Group</label>
                        <select  name="blood_group"class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" required>
						    <option selected>Search  Blood Group</option>
						    <option value="A+">A+ (Possitive)</option>
						    <option value="A-">A- (Negative)</option>
						    <option value="B+">B+ (Possitive)</option>
						    <option value="B-">B- (Negative)</option>
						    <option value="O+">O+ (Possitive)</option>
						    <option value="O-">O- (Negative)</option>
						    <option value="AB+">AB+ (Possitive)</option>
						    <option value="AB-">AB- (Negative)</option>
						  </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Name</label>
                        <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"value="{{ old('name') }}"  name="name"placeholder="">
                         @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Contract Number</label>
                        <input type="text" class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}"value="{{ old('phone') }}"  name="phone"placeholder="">
                         @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Donate Location</label>
                        <input type="text" class="form-control {{ $errors->has('location') ? ' is-invalid' : '' }}"value="{{ old('location') }}"  name="location"placeholder="">
                         @if ($errors->has('location'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                    </div>
					    <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="inputCity">Donate Last Date</label>
				      <input type="date" class="form-control" name="last_date">
				    </div>
				    <div class="form-group col-md-6">
				      <label for="inputCity">Unit/Bag</label>
				      <input type="text" class="form-control" name="unit">
				    </div>
				</div>

				    
					  <br>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Message</label>
                        <textarea class="form-control"  name="message" rows="3" placeholder="enter you message"></textarea>
                    
                    </div>
                    <br>
                <button type="submit" class="btn btn-success">Post</button>

            
                </div>

                


            </form>
        </div>
    </div>

@endsection