@extends('frontEnd.layouts.master')
@section('content')
<div class="container">
          <div class="section-header-title">
           
        </div>
    <div class="row">
           @foreach($all_service as $services)

            <div class="col-sm-3">
                <div class="help-box">
                     <div class="help-img">
                        <img 
                                        src="{{asset('public/images/all_servicess_image')}}/{{$services->image}}" width="300">
                    </div>
                    <div class="help-info">
                        <strong>{{$services->service_title}}</strong>
                        <b>$ {{$services->target}}</b><p>
                        
                     
                       <a href="{{url('/sub_service/'.$services->id)}}" class="btn btn-danger">Donate Now</a>
                     
                        
                    </div>
                </div>
            </div>
              @endforeach  
        </div>
          </div>

@endsection