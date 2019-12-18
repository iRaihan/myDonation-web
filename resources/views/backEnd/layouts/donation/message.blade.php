@extends('backEnd.layouts.master')
@section('dashboard')
<div class="container">
    <div class="margin-box">
    <div class="row">
        <div class="col-sm-10">
            
                <strong> Donation Message Send</strong>
            
        </div>
        
    </div>
</div>
</div>
@endsection
@section('content')



<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card-body">
                  <form action="{{url('admin/event/causes/complite/message')}}" method="POST">
                      @csrf
                      <div class="form-group">
                            <label>Image</label>
                         <input type="file" name="image1" class="form-control">
                      </div>
                      <div class="form-group">
                            <label>Data</label>
                         <input type="text" name="place" value="{{$alldonateid[]}}" class="form-control">
                      </div>
                      <div class="form-group">
                            <label>Place</label>
                         <input type="text" name="place" class="form-control">
                      </div>
                      <div class="form-group">
                            <label>Message</label>
                          <textarea class="form-control">
                              
                          </textarea>
                      </div>
                      <div class="form-group">
                           <input type="submit" name="Send Message">
                      </div>
                  </form> 
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
