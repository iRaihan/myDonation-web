@extends('backEnd.layouts.master')
@section('dashboard')
<div class="container">
    <div class="margin-box">
    <div class="row">
        <div class="col-sm-10">
            
                <strong> Services - Add Service</strong>
            
        </div>
        <div class="col-sm-2">
                
        </div>
    </div>
</div>
</div>

@endsection
@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<div class="services-category-form">
				<form method="post" action="{{url('admin/insert/services/category')}}">
					@csrf
					<div class="card card-body">

						  <h5 class="card-header  text-center py-4">
						    <strong>Add Service Form</strong>
						  </h5>
						  <br>
						<div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Services Name:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control {{ $errors->has('service_category_name') ? ' is-invalid' : '' }}"value="{{ old('service_category_name') }}" name="service_category_name"placeholder="enter services name">
       @if ($errors->has('service_category_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('service_category_name') }}</strong>
                                    </span>
                                @endif
    </div>
  </div>
  <br>
  <button type="submit"class="btn btn-success">Add</button><br>

  <b><a href="{{url('admin/view/services/category')}}">View All Servicess</a></b>
  
					</div>
				</form>
				
			</div>
		</div>
@yield('view_category')

	</div>
</div>

@endsection