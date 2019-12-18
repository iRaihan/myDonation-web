@extends('backEnd.layouts.master')

@section('dashboard')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            
                <strong> Causes Home /</strong>
            
        </div>
    </div>
</div>
@endsection

@section('content-header')
<div class="container">
    <div class="row">
    	<div class="col-sm-3">
       <div class="service-button"><a href="{{url('/admin/causes/request')}}"><i class="fa fa-bell-o" aria-hidden="true"></i></i> Causes Request</a></div>
        </div>
                <div class="col-sm-2">
       <div class=" service-button"><a href="{{url('/admin/add/causes')}}"> <i class="fa fa-plus" aria-hidden="true"></i> Add Causes</a></div>
        </div>

        <div class="col-sm-2">
       <div class="service-button"><a href="{{url('/admin/view/all_causes')}}"> <i class="fa fa-list-alt" aria-hidden="true"></i> See All Causes</a></div>


        </div>
                <div class="col-sm-3">
       <div class=" service-button "><a href="{{url('/')}}"> <i class="fa fa-eye" aria-hidden="true"></i>  Active Causes</a></div>

        </div>
        <div class="col-sm-2">
       <div class="service-button"><a href="{{url('/')}}"><i class="fa fa-eye-slash" aria-hidden="true"></i> Inactive Causes</a></div>
        </div>





    </div>
</div>
@endsection