@extends('backEnd.layouts.services.services_master')
@section('dashboard')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            
                <strong> Services Home / Edit Services</strong>
            
        </div>
    </div>
</div>

@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-2 ">
        </div>
        <div class="col-sm-8 ">
            <form method="post" action="{{url('admin/update/service')}} "enctype="multipart/form-data">
                @csrf
                <div class="card card-body">

                    <h5 class="card-header  text-center py-4">
                        <strong>Edit Services Form</strong>
                    </h5>
                    <br>

                     <input type="hidden" name="edit_id" value="{{$data->id}}">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Service Title</label>
                        <input type="text" class="form-control" value="{{ $data->service_title}}"  name="service_title"placeholder="Enter Service Title">
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Services Discriptions</label>
                        <textarea class="form-control" name="service_discription" rows="3"  require autofocus>{{$data->service_discription}}</textarea>
                   
                    </div>
                    <div class="form-group">
                        <label >Servicess Category</label>
                        
                        <select class="form-control" name="service_category">
                        
                         
                           @foreach($datas as $category)
                           
                           <option value='{{$category->id}}'>{{$category->service_category_name}}
                           @endforeach</option>
                           @foreach($service_category as $all_cat)
                           <option value='{{$all_cat->id}}'>{{$all_cat->service_category_name}}</option>
                           @endforeach
                            
                        </select>      
                              
                      
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Target</label>
                        <input type="text" class="form-control"value="{{$data->target }}"  name="target" placeholder="Enter Service Title">
                                         
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Alart</label>
                        <input type="text" class="form-control "value="{{$data->alart}}"  name="alart"placeholder="Enter Service Title">
                                        
                    </div>
                        <div class="form-group">
                            <label for="inputAddress2"> Change Image</label>
                            <input type="file" class="form-control" value="{{$data->image}}"name="image">
                            <br>
                            <center>
                            <img 
                                        src="{{asset('public/images/all_servicess_image')}}/{{$data->image}}" width="150"></center>
                        </div>

                     <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status" >
                        	  <option value="{{$data->status}}">

                              <?php
                                        $a=$data->status;
                                        if($a==1){
                                        echo "Active";
                                         }
                                        
                                        elseif ($a==0) {
                                            echo "Inactive";
                                        }

                                    ?>
                        	  </option>
                              <option value="1">Active</option>
                              <option value="0">Inactive</option>

                            
                            

                        </select>
                    </div>
                    <br>
                <button type="submit" class="btn btn-success">Add Service</button>

            
                </div>

                


            </form>
        </div>
    </div>
</div>


@endsection