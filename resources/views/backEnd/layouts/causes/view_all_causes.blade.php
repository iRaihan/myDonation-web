@extends('backEnd.layouts.master')
@section('dashboard')
<div class="container">
    <div class="margin-box">
    <div class="row">
        <div class="col-sm-10">
            
                <strong> Cause - Veiw All Cause</strong>
            
        </div>
        <div class="col-sm-2">
            
                <div class="add_btn">
                    <a href="{{url('/admin/add/causes')}}"><i class="fa fa-plus" aria-hidden="true"></i></i> Add</a>
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
                                <th> Images</th>
                                <th> Causes Title</th>
                                <th >Discriptions</th>
                                <th>Causes Information</th>
                                <th>Status</th>
                                <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($all_cause as $causes)
                                    
                                    <tr>
                                    <td>{{++$i}}</td>
                                    <td width="200px">
                                        <img 
                                        src="{{asset('public/images/all_causes')}}/{{$causes->image}}" width="100">
                                    </td>
                                    <td width="200px">{{$causes->title}} 
                                    </td>
                                    <td width="300px">{{$causes->discription}}</td>
                                    <td width="300px"><strong> Division:</strong> {{$causes->division_name}}
                                        <br>
                                       <strong>  Location:</strong> {{$causes->location}}
                                        <br>
                                        <strong> Target:</strong> {{$causes->target}}
                                        <br>
                                        <strong> Alart:</strong> {{$causes->alart}}
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
                                        <a class="action_btn_edit" href="{{url('/admin/edit/service/'.$causes->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        <br>
                                        <br>

                                        
                                        <a class="action_btn_delete" onclick=" return myFunction()" href="{{url('/admin/delete/service/'.$causes->id)}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                        <br>
                                        <br>
                                       <?php
                                        $a=$causes->status;
                                        if($a==1){
                                        ?>
                                        
                                        <form method="post" action="{{url('/admin/inactive/service/'.$causes->id)}}">
                                           @csrf
                                            <input type="hidden" value="0" name="inactive"> 
                                           <input type="hidden" value='{{$causes->id}}' name="hidden_id">
                                           <button type="submit" class="btn action_btn_inactive table-boutton"><i class="fa fa-eye-slash" aria-hidden="true"></i></button>
                                       </form>

                                        <?php
                                         }
                                        else{
                                            ?>
                                           <form method="post" action="{{url('/admin/active/service/'.$causes->id)}}">
                                           @csrf
                                            <input type="hidden" value="1" name="active"> 
                                           <input type="hidden" value='{{$causes->id}}' name="hidden_id">
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