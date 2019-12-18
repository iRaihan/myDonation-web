@extends('backEnd.layouts.master')
@section('dashboard')
<div class="container">
    <div class="margin-box">
    <div class="row">
        <div class="col-sm-10">
            
                <strong> Services - Manage Sub Services</strong>
            
        </div>
        <div class="col-sm-2">
            
                <div class="add_btn">
                    <a href="{{url('admin/add/sub/services')}}"><i class="fa fa-plus" aria-hidden="true"></i></i> Add</a>
                </div>
            
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
                                <th> Picture</th>
                                <th>Service Title</th>
                                <th >Discriptions</th>
                                <th>Service Category</th>
                                <th>Target</th>
                                <th>Alart</th>
                                <th>Status</th>
                                <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($all_services as $services)
                                    
                                    <tr>
                                    <td>{{++$i}}</td>
                                    <td>
                                        <img 
                                        src="{{asset('public/images/all_servicess_image')}}/{{$services->image}}" width="100">
                                    </td>
                                    <td><strong>{{$services->service_title}}</strong>  
                                    </td>
                                    <td>{{$services->service_discription}}</td>
                                    <td>{{$services->service_category_name}}</td>
                                    <td>{{$services->target}}</td>
                                    <td>{{$services->alart}}</td>
                                    <td>
                                    	<?php
                                    	$a=$services->status;
                                    	if($a==1){
                                    	echo "Active";
                                         }
                                        else
                                    	   echo "Inactive";

                                    ?>
                                    </td>
                                    
                                    
               
                                    <td>
                                        <a class="action_btn_edit" href="{{url('/admin/edit/service/'.$services->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        <br>
                                        <br>

                                        
                                        <a class="action_btn_delete" onclick=" return myFunction()" href="{{url('/admin/delete/service/'.$services->id)}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                        <br>
                                        <br>
                                       <?php
                                        $a=$services->status;
                                        if($a==1){
                                        ?>
                                        
                                        <form method="post" action="{{url('/admin/inactive/service/'.$services->id)}}">
                                           @csrf
                                            <input type="hidden" value="0" name="inactive"> 
                                           <input type="hidden" value='{{$services->id}}' name="hidden_id">
                                           <button type="submit" class="btn action_btn_inactive table-boutton"><i class="fa fa-eye-slash" aria-hidden="true"></i></button>
                                       </form>

                                        <?php
                                         }
                                        else{
                                            ?>
                                           <form method="post" action="{{url('/admin/active/service/'.$services->id)}}">
                                           @csrf
                                            <input type="hidden" value="1" name="active"> 
                                           <input type="hidden" value='{{$services->id}}' name="hidden_id">
                                           <button type="submit" class="btn action_btn_active"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                       </form>
                                    <?php
                                }?>

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