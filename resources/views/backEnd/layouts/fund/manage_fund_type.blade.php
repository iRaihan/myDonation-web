
@extends('backEnd.layouts.master')
@section('dashboard')
<div class="container">
    <div class="margin-box">
    <div class="row">
        <div class="col-sm-10">
            
                <strong> Services Home / Manage Fund</strong>
            
        </div>
        <div class="col-sm-2">
            
                <div class="add_btn">
                    <a href="{{url('/admin/fund/add')}}"><i class="fa fa-plus" aria-hidden="true"></i></i> Add</a>
                </div>
            
        </div>
    </div>
</div>
</div>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            </div>
        <div class="col-sm-6">
            <div class="fund-type-category-form">
          <?php $i=0;
                        ?>
                        
                            <table class="my_table">
                              
                                <thead>
                                <tr >
                                <th>#</th>
                                <th> Name</th>
                                <th> Action</th>
                                </tr>
                                </thead>
                                <tbody>
                               
                                    @foreach($all_fund as $all)
                                    <tr>
                                    <td>{{++$i}}</td>
                                    <td>{{$all->fund_type_name}}</td>
               
                                    <td class="table-boutton">

                                        <a class="action_btn_edit" href="{{url('/admin/edit/service/'.$all->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                      
                                        <br>
                                        <br>
                                        
                                        <a class="action_btn_delete" onclick=" return myFunction()" href="{{url('/admin/delete/service/'.$all->id)}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>

                                    </td>
                                </tr>
                                    
                               
                                </tbody>
                                @endforeach
                            </table>
                          
        </div>
        </div>
        <div class="col-sm-3">
            </div>


    
</div>
  </div>


@endsection