@extends('backEnd.layouts.services.add_services_category')
@section('view_category')
<div class="col-sm-6">
	<table class="my_table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Service Category Name</th>
      <th scope="col">Action</th>
    
    </tr>
  </thead>
  <tbody>
  	@foreach($all_category as $category)
    <tr>
      <th>{{$category->id}}</th>
      <td>{{$category->service_category_name}}</td>
      <td class="table-boutton">
      	
        <a class="btn action_btn_delete" href="" ><i class="fa fa-trash-o" aria-hidden="true"></i></a>
        
      		<a class="action_btn_edit_flat" href="" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
      	
      	
      		
      	
      </td>
    </tr>
    @endforeach
   
  </tbody>
</table>
</div> 
@endsection