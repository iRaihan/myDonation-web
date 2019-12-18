@extends('backEnd.layouts.master')
@section('dashboard')
<div class="container">
    <div class="margin-box">
    <div class="row">
        <div class="col-sm-10">
            
                <strong> Cause - Veiw All Cause</strong>
            
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

                <div class="card-body">
                            @if (session('message'))
                <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('message') }}
                </div>
    @endif
              
                        <?php $i=0;
                        ?>
                        
                            <table class="my_table">
                              
                                <thead>
                                <tr >
                                <th>#</th>
                                <th> Event Title</th>
                                <th> Event Date</th>
                                <th> Palce</th>                               
                                <th> Action</th>
                                </tr>
                                </thead>
                                <tbody>
  

  @foreach($event_c as $all)
  

<?php 
$i=1;

?>

<tr>
	<td>{{$i++}}</td>
	<td>{{$all->title}}</td>
	<td>{{$all->e_date}}</td>
	<td>{{$all->e_place}}</td>
	

	<td>  <div class="btn-btn3">

		<a  type="button" class="btn btn-primary" href="" type="button" data-toggle="modal" data-target="#causeModal{{$all->cas_id}}">Complite Donation
    </div></td>
    <!-- Modal -->
        <div id="causeModal{{$all->cas_id}}" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Send Event Message</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
              <div class="modal-body">
                <form action="{{url('admin/event/causes/complite/')}}" method="POST">
                      @csrf
                      <div class="form-group">
                            
                         <input type="hidden" name="hidden_id" value="{{$all->cas_id}}" class="form-control">
                         <input type="hidden" name="e_id" value="{{$all->id}}" class="form-control">
                      </div>
                     
                      <div class="form-group">
                            <label>Amount</label>
                         <input type="number" name="amount" value="" class="form-control">
                      </div>
                      <div class="form-group">
                            <label>Recipient number</label>
                         <input type="number" name="num_person" value="" class="form-control">
                      </div>
                      <div class="form-group">
                            <label>Place</label>
                         <input type="text" name="place" class="form-control" value="">
                      </div>
                      <div class="form-group">
                            <label>Message</label>
                          <textarea class="form-control" class="message" name="message">
                              
                          </textarea>
                      </div>
                      <div class="form-group">
                            <label>Details link</label>
                          <input class="form-control" class="message" placeholder="enter a details link" name="details">
                      </div>
                      <div class="form-group">
                           <button type="submit" class="btn btn-success ">Send Message</button>
                      </div>
                  </form> 
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>
</tr>




@endforeach
@foreach($event_s as $all)
  

<?php 
$i=1;

?>

<tr>
	<td>{{$i++}}</td>
	<td>{{$all->service_title}}</td>
	<td>{{$all->e_date}}</td>
	<td>{{$all->e_place}}</td>
	

	<td> 

		<a  type="button" class="btn btn-primary" href="{{url('/admin/event/services/complite/'.$all->ser_id)}}">Complite Donation
    </td>
</tr>




@endforeach


</table>
  
</div>

</div>
</div>
<div class="col-sm-2">
 


                
            
        </div>
</section>
@endsection
