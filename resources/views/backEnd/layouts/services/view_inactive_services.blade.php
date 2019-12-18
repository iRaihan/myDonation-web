@extends('backEnd.layouts.services.services_master')
@section('dashboard')
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			
				<strong> Services Home / Inactive Servicess</strong>
			
		</div>
	</div>
</div>

@endsection

@section('content')
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

                <div class="card-body">
              
                        <?php $i=0;
                        ?>
                        
                            <table class="my_table">
                              
                                <thead>
                                <tr >
                                <th>#</th>
                                <th> Picture</th>
                                <th>Service Title</th>
                                <th >Discriptions</th>
                                <th>Service Category</th>
                                <th>Target</th>
                                <th>Alart</th>
                                <th>Status</th>
                                <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($inactive as $services)
                                    
                                    <tr>
                                    <td>{{++$i}}</td>
                                    <td>
                                        <img 
                                        src="{{asset('public/images/all_servicess_image')}}/{{$services->image}}" width="100">
                                    </td>
                                    <td><strong>{{$services->service_title}}</strong>  
                                    </td>
                                    <td>{{$services->service_discription}}</td>
                                    <td>{{$services->service_category_name}}</td>
                                    <td>{{$services->target}}</td>
                                    <td>{{$services->alart}}</td>
                                    <td>{{'Inactive'}} </td>
                                    <td>
                                        <a class="btn btn-success table-button" href="{{url('/admin/edit/service/'.$services->id)}}">Edit</a>
                                        <br>
                                        <a class="btn btn-danger table-button" onclick="myFunction()" href="{{url('/admin/delete/service/'.$services->id)}}">Delete</a>
                                        <form method="post" action="{{url('/admin/active/service/'.$services->id)}}">
                                           @csrf
                                            <input type="hidden" value="1" name="active"> 
                                           <input type="hidden" value='{{$services->id}}' name="hidden_id">
                                           <button type="submit" class="btn btn-primary">Active</button>
                                       </form>

                                    </td>
                                    
                                @endforeach
                                </tbody>
                            </table>
                          

                </div>
            </div>
        </div>
    </div>
</div>

@endsection