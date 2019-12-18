@extends('backEnd.layouts.master')
@section('dashboard')
<div class="container">
    <div class="margin-box">
    <div class="row">
        <div class="col-sm-10">
            
                <strong> Cause - Veiw All Cause</strong>
            
        </div>
        <div class="col-sm-2">
            
                
        </div>
    </div>
</div>
</div>
@endsection
@section('content')



<section class="content">
         <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
          
          
        <form method="post" action="{{url('admin/add/cause/stop_to_event')}}">
                @csrf

                 
            
            <div class="post_box">


                @if (Session::has('message'))
                           <div class="alert alert-success">{{ Session::get('message') }}</div>
                        @endif



                        @foreach($causes as $causes)
                        
                        <img 
                                        src="{{asset('public/images/all_causes')}}/{{$causes->image}}" width="100">

                        <div class="causes_propaty">
                              <b>Title:</b>{{$causes->title}}<br>
                              <b>Location:</b>{{$causes->location}}<br>
                              <b>Division:</b>{{$causes->division_name}}<br><br>

                        </div>
                          

                                        <br>
                <label>Event Date:</label>
                
                <input type="date" class="form-control"  name="e_date">
                       
                <br>
                <label>Event Start Time:</label>
                
                <input type="text" class="form-control"  name="e_time" placeholder="00.00 AM">
                       
                <br>
                <label>Event Place Name:</label>
                
                <input type="text" class="form-control"  name="e_place" placeholder="Enter Event Plase">
                       
                <br>

                
                    
                    <input type="hidden" class="form-control" value="0" name="status">
                    <input type="hidden" class="form-control" value="{{$causes->id}}" name="cas_id">
                    <input type="hidden" class="form-control" value="0" name="ser_id">
                    <input type="hidden" class="form-control" value="1" name="event_status">

                    <div class="insert_post_box">
                       <div class="post_btn">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-telegram" aria-hidden="true"></i> Add</button>
                     </div>
                    </div>
                    
            </div>
        </div>
        @endforeach
        <div class="col-sm-3"></div>
    </div>
</div>
</div>
</section>
@endsection