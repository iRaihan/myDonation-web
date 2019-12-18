
@extends('backEnd.layouts.master')
@section('dashboard')
<div class="container">
    <div class="margin-box">
    <div class="row">
        <div class="col-sm-10">
            
                <strong> Services - Add sub Services</strong>
            
        </div>
        <div class="col-sm-2">
            
                <div class="manage_btn">
                    <a href="{{url('admin/view/all/services')}}"><i class="fa fa-cog" aria-hidden="true"></i> Manage</a>
                </div>
            
        </div>
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
            <form method="post" action="{{url('admin/insert/service')}} "enctype="multipart/form-data">
                @csrf
                <div class="card card-body">

                    <h5 class="card-header  text-center py-4">
                        <strong>Add Services Form</strong>
                    </h5>
                    <br>
                    @if (Session::has('message'))
                           <div class="alert alert-success">{{ Session::get('message') }}</div>
                        @endif

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Service Title</label>
                        <input type="text" class="form-control {{ $errors->has('service_title') ? ' is-invalid' : '' }}"value="{{ old('service_title') }}"  name="service_title"placeholder="Enter Service Title">
                         @if ($errors->has('service_title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('service_title') }}</strong>
                                    </span>
                                @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Services Discriptions</label>
                        <textarea class="form-control {{ $errors->has('service_discription') ? ' is-invalid' : '' }}"value="{{ old('service_discription') }}" id="exampleFormControlTextarea1" name="service_discription" rows="3" require autofocus></textarea>
                    @if ($errors->has('service_discription'))
                                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('service_discription') }}</strong>
                                    </span>
                                @endif
                    </div>
                    <div class="form-group">
                        <label >Servicess Category</label>
                        
                        <select class="form-control" name="service_category">
                        
                           <option>-- Select a Option --</option> 
                             @foreach($all_cat as $category)
                            <option value='{{$category->id}}'>{{$category->service_category_name}}</option>

                             @endforeach
                        </select>      
                              
                      
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Target</label>
                        <input type="text" class="form-control {{ $errors->has('target') ? ' is-invalid' : '' }}"value="{{ old('target') }}"  name="target" placeholder="Enter Service Title">
                                            @if ($errors->has('target'))
                                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('target') }}</strong>
                                    </span>
                                @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Alart</label>
                        <input type="text" class="form-control {{ $errors->has('alart') ? ' is-invalid' : '' }}"value="{{ old('alart') }}"  name="alart"placeholder="Enter Service Title">
                                            @if ($errors->has('alart'))
                                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('alart') }}</strong>
                                    </span>
                                @endif
                    </div>
                        <div class="form-group">
                            <label for="inputAddress2"> Upload Image</label>
                            <input type="file" class="form-control" name="image">
                        </div>

                     <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status" >
                            <option>-- Select a Option --</option>
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