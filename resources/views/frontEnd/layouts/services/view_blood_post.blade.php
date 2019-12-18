@extends('frontEnd.layouts.master')


@section('content')


<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12">
			<div class="blood_header">
				<h4>Request Blood Group</h4>
				<b>Please Donate your Blood & Seaving a Life</b>
			</div>
		</div>
	
		
@foreach($all_blood as $blood)

		<div class="col-sm-6 col-md-6">
     <div class="table_style">

  <table>
		
<tbody>

  
    <tr>
    	<th scope="col">Name</th>
    	<td>{{$blood->name}}</td>
      </tr>
      <tr>
    	<th scope="col">Phone</th>
    	<td>{{$blood->phone}}</td>

      </tr>
      <tr>
    	<th scope="col">Current Address</th>
    	<td>{{$blood->location}}</td>
      </tr>
      <tr>
    	<th scope="col">Request Blood</th>
    	  <td><strong>{{$blood->blood_group}}</strong></td>
      </tr>
      <tr>
      <tr>
    	<th scope="col">Given Last Date</th>
    	  <td>{{Carbon\Carbon::parse($blood->last_date)->format('d-M-Y') }}</td>
      </tr>
    	<th scope="col">Unit/Bag</th>
    	<td>{{$blood->unit}}</td>
      </tr>
      
      <tr>
    	<th scope="col">Message</th>
    	<td>{{$blood->message}}</td>
      </tr>
      <tr>
    	<th scope="col">Post Date</th>
    	<td>{{ Carbon\Carbon::parse($blood->created_at)->format('d-M-Y h:i:s A') }}
                                    <br>{{ Carbon\Carbon::parse($blood->created_at)->diffForHumans()}}</td>
      </tr>
   

  </tbody>
</table>
</div>
</div>
 @endforeach
</div>



@endsection