@extends('backEnd.layouts.master')
@section('dashboard')
<div class="container">
    <div class="margin-box">
    <div class="row">
        <div class="col-sm-10">
            
                <strong> Cause - Causes Request</strong>
            
        </div>
        <div class="col-sm-2">
            
                
            
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

                <b><a href="{{url('/admin/view/all/causes_request')}}">See All Today Request</a></b>

                <table class="my_table">

                    <thead>
                        <tr>
                          <?php
                                 $a=1;
                           ?>

                            <th>#</th>
                            <th> Division </th>
                            <th>Total Request(Yearly)</th>
                            <th>Accept Request</th>
                            <th>Number of Events</th>
                            <th>Today Request</th>
                        </tr>
                    </thead>
                    <tbody>

                      <?php
                      $b=1;
                      ?>
@foreach($total_this_year as $name)
                             <?php
                                 $i=1;
                                 $sum=0;
                                 $sum1=0;$sum2=0;$sum3=0;$sum4=0;$sum5=0;$sum6=0;$sum7=0;$sum8=0;;
                                 $id=$name->division;
                                 
                                 
                                 ?>
                          
                        <tr>

                            <td>{{$b++}}</td>
                            <td><?php 
                            $a=$name->division;
                            if($a==1)
                              echo "Dhaka";
                            if($a==2)
                              echo "Chattagram";
                            if($a==3)
                              echo "Rajshahi";
                            if($a==4)
                              echo "Khulna";
                            if($a==5)
                              echo "Barishal";
                             if($a==6)
                              echo "Sylhet";
                            if($a==7)
                              echo "Rangpur";
                             if($a==8)
                              echo "Mymensingh";
                            ?>
                              
                            </td>

                            <td>
                                {{$name->division_name}}
                            </td>
                          
                           
                         

                        <td>
                          @if($id==1)
                                  @foreach($Dhaka as $total)
                                  <?php
                                  $r=$total->status;
                              

                                  if($r!=0){
                                  $sum=$sum+$i; 
                                  }
                                  else {
                                     $sum1=$sum1+$i;
                                  }
                                    
                                ?>
                                @endforeach
                                
                                   
                                    <?php echo $sum; ?>
                                
                                @endif

                                 @if($id==2)
                                  @foreach($Chattagram as $total)
                                  <?php
                                  $r=$total->status;
                                   if($r!=0){
                                  $sum=$sum+$i; 
                                  }
                                  else {
                                     $sum1=$sum1+$i;
                                  }
                                ?>
                                @endforeach
                     
                                   
                                    <?php echo $sum ?>
                                
                                @endif

                                 @if($id==3)
                                  @foreach($Rajshahi as $total)
                                  <?php
                                  $r=$total->status;
                                   if($r!=0){
                                  $sum=$sum+$i; 
                                  }
                                  else {
                                     $sum1=$sum1+$i;
                                  }
                                ?>
                                @endforeach
                              
                                   
                                    <?php echo $sum ?>
                              
                                @endif

                                 @if($id==4)
                                  @foreach($Khulna as $total)
                                  <?php
                                  $r=$total->status;
                                   if($r!=0){
                                  $sum=$sum+$i; 
                                  }
                                  else {
                                     $sum1=$sum1+$i;
                                  }
                                ?>
                                @endforeach
                            
                                   
                                    <?php echo $sum ?>
                            
                                @endif

                                 @if($id==5)
                                  @foreach($Barishal as $total)
                                  <?php
                                  $r=$total->status;
                                   if($r!=0){
                                  $sum=$sum+$i; 
                                  }
                                  else {
                                     $sum1=$sum1+$i;
                                  }
                                     ?>
                                @endforeach
                                
                                   
                                    <?php echo $sum ?>
                                
                                @endif

                                 @if($id==6)
                                  @foreach($Sylhet as $total)
                                  <?php
                                  $r=$total->status;
                                   if($r!=0){
                                  $sum=$sum+$i; 
                                  }
                                  else {
                                     $sum1=$sum1+$i;
                                  }
                                ?>
                                @endforeach
                                
                                   
                                    <?php echo $sum ?>
                                
                                @endif

                                 @if($id==7)
                                  @foreach($Rangpur as $total)
                                  <?php
                                  $r=$total->status;
                                   if($r!=0){
                                  $sum=$sum+$i; 
                                  }
                                  else {
                                     $sum1=$sum1+$i;
                                  }
                                ?>
                                @endforeach
                              
                                   
                                    <?php echo $sum ?>
                                
                                @endif

                                 @if($id==8)
                                  @foreach($Mymensingh as $total)
                                  <?php
                                  if($r!=0){
                                  $sum=$sum+$i; 
                                  }
                                  else {
                                     $sum1=$sum1+$i;
                                  }
                                ?>
                                @endforeach
                              
                                   
                                    <?php echo $sum ?>
                               
                                @endif

                          </td>
                           <td></td>
                          <td>
                         
                           
                                @if($id==1)
                                <a href="{{url('/admin/view/request/'.$id)}}">
                                       <?php echo $sum1 ?>
                                    
                                </a>
                                @endif

                                  @if($id==2)
                                <a href="{{url('/admin/view/request/'.$id)}}">
                                       <?php echo $sum1 ?>
                                    
                                </a>
                                @endif


                                  @if($id==3)
                                <a href="{{url('/admin/view/request/'.$id)}}">
                                       <?php echo $sum1 ?>
                                    
                                </a>
                                @endif


                                  @if($id==4)
                                <a href="{{url('/admin/view/request/'.$id)}}">
                                       <?php echo $sum1 ?>
                                    
                                </a>
                                @endif


                                  @if($id==5)
                                <a href="{{url('/admin/view/request/'.$id)}}">
                                       <?php echo $sum1 ?>
                                    
                                </a>
                                @endif


                                  @if($id==6)
                                <a href="{{url('/admin/view/request/'.$id)}}">
                                       <?php echo $sum1 ?>
                                    
                                </a>
                                @endif


                                  @if($id==7)
                                <a href="{{url('/admin/view/request/'.$id)}}">
                                       <?php echo $sum1 ?>
                                    
                                </a>
                                @endif


                                  @if($id==8)
                                <a href="{{url('/admin/view/request/'.$id)}}">
                                       <?php echo $sum1 ?>
                                    
                                </a>
                                @endif


                            
                             
                            </td>
                         
                        </tr>
                        @endforeach
                       
                         

                    </tbody>
                </table>


            </div>
        </div>
    </div>
  
    @endsection