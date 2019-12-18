@extends('frontEnd.layouts.account.acc_master')

@section('acc_content')


<div class="container">
    <div class="row">
       
        <div class="col-sm-12 ">
            <div class="view_box">
                <a href="{{url('/volunteer/causes/view_all')}}"><i class="fa fa-eye" aria-hidden="true"></i> View All </a>
            </div>
        </div>
                  
    </div>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
          
          
        <form method="post" action="{{url('volunteer/post/causes')}} "enctype="multipart/form-data">
                @csrf

                 @php
                        $volunteer_id=Session::get('volunteer_id');
                         
                        @endphp
            
            <div class="post_box">
                @if (Session::has('message'))
                           <div class="alert alert-success">{{ Session::get('message') }}</div>
                        @endif
                <input type="hidden" value="{{$volunteer_id}}" name="volunteer_id">
                
                <input type="text" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}"value="{{ old('title') }}"  name="title"placeholder="Enter Causes Title">
                         @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                <br>
                <textarea class="form-control {{ $errors->has('discription') ? ' is-invalid' : '' }}"value="{{ old('discription') }}" id="exampleFormControlTextarea1" name="discription" rows="3" require autofocus></textarea>
                    @if ($errors->has('discription'))
                                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('discription') }}</strong>
                                    </span>
                                @endif
                <br>
                 <input type="text" class="form-control {{ $errors->has('location') ? ' is-invalid' : '' }}"value="{{ old('') }}"  name="location" placeholder="District, Upozila, Village ">
                                            @if ($errors->has('location'))
                                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif

                        <select class="form-control" name="division" >
                            <option>-- Select a Division --</option>
                            <option value="1">Dhaka</option>
                            <option value="2">Chattagram</option>
                            <option value="3">Rajshahi</option>
                            <option value="4">Khulna</option>
                            <option value="5">Barishal</option>
                            <option value="6">Sylhet</option>
                            <option value="7">Rangpur</option>
                            <option value="8">Mymensingh</option>

                        </select>
                    
                    <input type="file"  name="image">
                    <input type="hidden" class="form-control" value="0" name="status">

                    <div class="insert_post_box">
                       <div class="post_btn">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-telegram" aria-hidden="true"></i> Post</button>
                     </div>
                    </div>
                    
            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>

@endsection