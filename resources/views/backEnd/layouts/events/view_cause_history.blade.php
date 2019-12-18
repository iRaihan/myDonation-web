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
  

  @foreach($c_his as $all)
  
<?php 

           
          $aid_balance = \App\Causes_fund::all()->where('cause_id', '=', $all->cas_id)->sum('ammount');

            $total=$aid_balance;
 

     $goals = $all->target;

    
    $percent = $total/$goals;
    $pernt= number_format( $percent * 100, 2 ) . '%';

?>

<tr>
    <td>{{++$i}}</td>
    <td width="200px">
                                         <img 
                                        src="{{asset('public/images/all_causes')}}/{{$all->image}}" width="100">
    
    

<td>Causes</td>
<td>{{$all->title}}</td>
<td>{{$pernt}}</td>
<td></td>
<td>
     <div class="btn-group">
                                  <button type="button" class="btn btn-info dropdown-toggle dropdown-table-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                  </button>
                                  <div class="dropdown-menu">
                             <a class="dropdown-item custom_btn" href="{{url('/admin/causes/stop_to_event/'.$all->cas_id)}}">Stop & Add to Event</a>
                                       <a class="dropdown-item custom_btn" href="{{url('/admin/accept/request/'.$all->cas_id)}}">Only Add to Event</a>

                            
                                    
                                  </div>


</td>

    
  </tr>
</tbody>




                     

@endforeach


</table>
  
</div>

</div>
</div>
<div class="col-sm-2">
 

<script>
function goBack() {
  window.history.back();
}
</script>
            
                
                    <button type="submit" class="btn btn-info" onclick="goBack()"><i class="fa fa-history" aria-hidden="true"></i> back</button>
                
            
        </div>
</section>
@endsection