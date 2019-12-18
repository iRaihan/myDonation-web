@extends('frontEnd.layouts.account.acc_master')


@section('acc_content')

<div class="container">
	<div class="row">
		<div class="col-sm-2 col-md-2">
		</div>
		
    
	  <div class="col-sm-5 col-md-5">
	  	<div class="search_blood_box">
	     <form method="post" action="{{url('/volunteer/search/blood')}}">
	     	@csrf
	     	<div class="form-inline">
  					<label class="my-1 mr-2" for="inlineFormCustomSelectPref"></label>
			  <select  name="blood_group"class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
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


  				<button type="submit" class="btn btn-primary my-1">Search</button>
  				</div>
			</form>
	</div>
</div>
	  	<div class="col-sm-5 col-md-5 search_blood_box">
	  		<a class="btn btn-primary" href="{{url('/volunteer/post/blood')}}">Post Request For Blood</a>
	  	</div>
	 
	</div>	

</div>


@yield('volunteer_main_contant')


@endsection