@extends('frontEnd.layouts.volunteer.volunteer_blood_home')


@section('volunteer_main_contant')

<div class="container">
	<div class="row">
		<div class="col-sm-1 col-md-1">
		</div>

		<div class="col-sm-11 col-md-11">
		
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Sl.No.</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Current Address</th>
      <th scope="col">Blood Goup</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($volunteer_blood as $blood)
    <tr>
      <td>{{$blood->id}}</td>
      <td>{{$blood->first_name}}</td>
      <td>0{{$blood->phone}}</td>
      <td>{{$blood->present_address}}</td>
      <td>{{$blood->blood}}</td>
      
    </tr>
    @endforeach

  </tbody>
</table>
</div>

@endsection
