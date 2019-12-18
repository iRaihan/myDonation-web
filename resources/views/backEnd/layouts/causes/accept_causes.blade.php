@extends('backEnd.layouts.causes.causes_master')
@section('dashboard')
<div class="container">
    <div class="row">
        <div class="col-sm-12">

            <strong> Services Home / Causes Request</strong>

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

        	@foreach($accept_causes as $accept)
            <form method="post" action="{{url('admin/insert/request/causes')}} "enctype="multipart/form-data">
                @csrf
                <div class="card card-body">

                    <h5 class="card-header  text-center py-4">
                        <strong>Add Causes Form</strong>
                    </h5>
                    <br>
                    @if (Session::has('message'))
                           <div class="alert alert-success">{{ Session::get('message') }}</div>
                        @endif
                  
              <div class="form-group">
                            <label for="inputAddress2"> Upload Image</label>
                            <input type="file" class="form-control" value="{{$accept->image}}"name="image">
                            <img 
                                        src="{{asset('public/images/all_causes/request_causes_image/')}}/{{$accept->image}}" width="100">
                                        
                        </div>

                        <div class="form-group">
                        
                        <input type="hidden" class="form-control "value="{{$accept->id}}"  name="id"placeholder="Enter Causes Title">
                      
                    </div>

                      <div class="form-group">
                        
                        <input type="hidden" class="form-control "value="{{$accept->volunteer_id}}"  name="volunteer_id"placeholder="Enter Causes Title">
                      
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Causes Title</label>
                        <input type="text" class="form-control "value="{{$accept->title}}"  name="title"placeholder="Enter Causes Title">
                      
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Causes Discriptions</label>
                        <textarea class="form-control"id="exampleFormControlTextarea1" name="discription" rows="3" >{{$accept->discription}}</textarea>
                   
                    </div>
                    <div class="form-group">
                        
                        <input type="hidden"class="form-control"value="{{$accept->division}}" id="exampleFormControlTextarea1" name="division" rows="3" require autofocus>
                   
                    </div>
                 

                 <div class="form-group">
                        <label for="exampleFormControlInput1">Causes Exact Location</label>
                        <input type="text" class="form-control "value="{{$accept->location}}"  name="location" placeholder="District, Upozila, Village ">
                                     
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Target</label>
                        <input type="text" class="form-control "value=""  name="target" placeholder="Enter Causes Target">
                                     
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Alart</label>
                        <input type="text" class="form-control"value=""  name="alart"placeholder="Enter Causes Alart">

                     <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status" >
                            <option>-- Select a Option --</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>

                        </select>
                    </div>
                      <b><input type="radio" name="urgent" value="1"> Urgent</b>
                   <b> <input type="radio" name="urgent" value="0"> Not Urgent<b>
                    <br>
                <button type="submit" class="btn btn-success">Add Causes</button>

            
                </div>
          @endforeach
                


            </form>
        </div>
    </div>
</div>
@endsection