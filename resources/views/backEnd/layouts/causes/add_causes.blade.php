
@extends('backEnd.layouts.master')
@section('dashboard')
<div class="container">
    <div class="margin-box">
    <div class="row">
        <div class="col-sm-10">
            
                <strong> Cause - Add Cause</strong>
            
        </div>
        <div class="col-sm-2">
            
                <div class="manage_btn">
                    <a href="{{url('/admin/view/all_causes')}}"><i class="fa fa-cog" aria-hidden="true"></i> Manage</a>
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
            <form method="post" action="{{url('admin/insert/causes')}} "enctype="multipart/form-data">
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
                        
                        <input type="hidden" class="form-control "value="0"  name="volunteer_id"placeholder="Enter Causes Title">
                      
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Causes Title</label>
                        <input type="text" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}"value="{{ old('title') }}"  name="title"placeholder="Enter Causes Title">
                         @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Causes Discriptions</label>
                        <textarea class="form-control {{ $errors->has('discription') ? ' is-invalid' : '' }}"value="{{ old('discription') }}" id="exampleFormControlTextarea1" name="discription" rows="3" require autofocus></textarea>
                    @if ($errors->has('discription'))
                                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('discription') }}</strong>
                                    </span>
                                @endif
                    </div>
                  <div class="form-group">
                        <label>Causes Region</label>
                        <select class="form-control" name="division" >
                            <option>-- Select a Option --</option>
                            <option value="1">Dhaka</option>
                            <option value="2">Chattagram</option>
                            <option value="3">Rajshahi</option>
                            <option value="4">Khulna</option>
                            <option value="5">Barishal</option>
                            <option value="6">Sylhet</option>
                            <option value="7">Rangpur</option>
                            <option value="8">Mymensingh</option>

                        </select>
                    </div>

                 <div class="form-group">
                        <label for="exampleFormControlInput1">Causes Exact Location</label>
                        <input type="text" class="form-control {{ $errors->has('location') ? ' is-invalid' : '' }}"value="{{ old('') }}"  name="location" placeholder="District, Upozila, Village ">
                                            @if ($errors->has('location'))
                                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Target</label>
                        <input type="text" class="form-control {{ $errors->has('target') ? ' is-invalid' : '' }}"value="{{ old('target') }}"  name="target" placeholder="Enter Causes Target">
                                            @if ($errors->has('target'))
                                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('target') }}</strong>
                                    </span>
                                @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Alart</label>
                        <input type="text" class="form-control {{ $errors->has('alart') ? ' is-invalid' : '' }}"value="{{ old('alart') }}"  name="alart"placeholder="Enter Causes Alart">
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
                    
                     <b><input type="radio" name="urgent" value="1"> Urgent</b>
                   <b> <input type="radio" name="urgent" value="0"> Not Urgent<b>
               
                    <br>
                <button type="submit" class="btn btn-success">Add Causes</button>

            
                </div>

                


            </form>
        </div>
    </div>
</div>


@endsection