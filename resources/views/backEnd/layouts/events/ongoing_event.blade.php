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
                                <th> Event Title</th>
                                <th> Event Date</th>
                                <th> Palce</th>                               
                                <th> Action</th>
                                </tr>
                                </thead>
                                <tbody>
  

  @foreach($all_event as $all)
  

<?php 
$i=1;

?>

<tr>
	<td>{{$i++}}</td>
	<td>{{$all->title}}</td>
	<td>{{$all->e_date}}</td>
	<td>{{$all->e_place}}</td>
	

	<td>  <div class="btn-group">
                                  <button type="button" class="btn btn-info dropdown-toggle dropdown-table-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                  </button>
                                  <div class="dropdown-menu">
                             <a class="dropdown-item custom_btn" href="{{url('/admin/causes/stop_to_event/'.$all->cas_id)}}">edit</a>
                                       
                            
                                    
                                  </div></td>
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
