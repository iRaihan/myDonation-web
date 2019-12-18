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
              
                        <?php $i=0;
                        ?>
                        
                            <table class="my_table">
                              
                                <thead>
                                <tr >
                                <th>#</th>
                                <th> Images</th>
                                <th> Category</th>
                                <th> Collected Amount</th>
                                <th> (%) Wise</th>
                                <th> Location</th>
                                <th> Action</th>
                                </tr>
                                </thead>
                                <tbody>
  

  @foreach($service_goal as $goal)
  <?php
$ca_id=$goal->id;
$alt=$goal->alart;
$location=$goal->location;
?>
<?php 

           
          $aid_balance = \App\Service_fund::all()->where('subservices_id', '=', $ca_id)->sum('ammount');

            $total=$aid_balance;
 

     $goals = $goal->target;

    
    $percent = $total/$goals;
    $pernt= number_format( $percent * 100, 2 ) . '%';

?>


@foreach($user_info as $total)
    <?php
$s_id=$total->subservices_id;
$amt=$total->total_amount;
if (($s_id==$ca_id)&&($amt>=$alt))
{
?>
<tr>
    <td>{{++$i}}</td>
    <td width="200px">
                                        <img 
                                        src="{{asset('public/images/all_servicess_image')}}/{{$goal->image}}" width="100">
    

<td>Causes</td>
<td>{{$amt}}</td>
<td>{{$pernt}}</td>
<td>{{$location}}</td>
<td>
     <div class="btn-group">
                                  <button type="button" class="btn btn-info dropdown-toggle dropdown-table-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                  </button>
                                  <div class="dropdown-menu">
                                    
                         <form method="post" action="{{url('/admin/service/stop_to_history/'.$s_id)}}">
                             @csrf
                             <input type="hidden" name="status" value="0">
                             <input type="hidden" name="event_status" value="0">
                             <input type="hidden" name="ser_id" value="{{$s_id}}">
                             <button class="dropdown-item btn btn-info" type="submit">  Stop & Move to History</button>
                         </form>
                             <a class="dropdown-item custom_btn" href="{{url('/admin/service/stop_to_event/'.$s_id)}}">Stop & Add to Event</a>
                                       <a class="dropdown-item custom_btn" href="{{url('/admin/accept/request/'.$s_id)}}">Only Add to Event</a>

                            
                                    
                                  </div>


</td>

    
  </tr>
</tbody>
  <?php
}
    ?>



                     

@endforeach
@endforeach 

</table>
  
</div>

</div>
</div>
<div class="col-sm-2">
            
                <div class="add_btn">
                    <a href="{{url('/admin/add/causes')}}"><i class="fa fa-history" aria-hidden="true"></i> Stoped History</a>
                </div>
            
        </div>
</section>
@endsection