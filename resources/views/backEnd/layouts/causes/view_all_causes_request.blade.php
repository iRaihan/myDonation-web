@extends('backEnd.layouts.master')
@section('dashboard')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            
                <strong> Services Home / View All Causes</strong>
            
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
                                <th> Causes Title</th>
                                <th >Discriptions</th>
                                <th>Causes Information</th>
                                <th>Status</th>
                                <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($tody_all_request as $causes)
                                    
                                    <tr>
                                    <td>{{++$i}}</td>
                                    <td width="200px">
                           
                         <img 
                                        src="{{asset('public/images/all_causes/request_causes_image/')}}/{{$causes->image}}" width="100">
                              
                            </td>
                                    <td width="200px">{{$causes->title}} 
                                    </td>
                                    <td width="300px">{{$causes->discription}}</td>
                                    <td width="300px"><strong> Division:</strong> {{$causes->division_name}}
                                        <br>
                                       <strong>  Location:</strong> {{$causes->location}}
                                       
                                      
                                    </td>
                                   
                                    <td>
                                    	<?php
                                    	$a=$causes->status;
                                    	if($a==1){
                                    	echo "Active";
                                         }
                                        else
                                    	   echo "Inactive";

                                    ?>
                                    </td>
                                    
                                    
               
                                    <td>
                                      
                                        <!-- Example single danger button -->

                                       
                                <div class="btn-group">
                                  <button type="button" class="btn btn-info dropdown-toggle dropdown-table-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                  </button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item custom_btn" href="{{url('/admin/accept/request/'.$causes->id)}}">Accept/Add to Causes</a>
                                    <a class="dropdown-item custom_btn" href="{{url('/admin/accept/request/'.$causes->id)}}">Accept/Add to Spam</a>
                            
                                    
                                  </div>

                                  
                                </div>
                                <a class=" btn btn-danger table-button" onclick=" return myFunction()" href="{{url('/admin/delete/request/'.$causes->id)}}">Delete</a>

                                        

                                    </td>
                                </tr>
                                    
                                @endforeach
                                </tbody>
                            </table>
                          

                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection