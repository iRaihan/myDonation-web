
@extends('backEnd.layouts.master')
@section('dashboard')
<div class="container">
    <div class="margin-box">
    <div class="row">
        <div class="col-sm-10">
            
                <strong> Bank Patner - Manage </strong>
            
        </div>
        <div class="col-sm-2">
            
                <div class="add_btn">
                    <a href="{{url('/admin/add/bank_patnar')}}"><i class="fa fa-plus" aria-hidden="true"></i></i> Add</a>
                </div>
            
        </div>
    </div>
</div>
</div>
@endsection
@section('content')
<div class="container">
    <div class="row">
    
        <div class="col-sm-12">
            <div class="fund-type-category-form">
          <?php $i=0;
                        ?>
                        
                            <table class="my_table">
                              
                                <thead>
                                <tr >
                                <th>#</th>
                                <th>Donor Id</th>
                                <th>Ammount</th>
                                <th>Payment Type</th>
                                <th>Transaction ID</th>
                                <th>Donate Time</th>
                                <th>Confirmation</th>
                                
                               
                                </tr>
                                </thead>
                                <tbody>
                               
                                    @foreach($check_donate as $all)

                                    <?php 

                                        $status=$all->status;

                                       if($status==0){

                                    ?>
                                    <tr>
                                    <td>{{++$i}}</td>
                                    <td>
                                        {{$all->donor_id}}
                                    </td>
                                    <td>
                                        {{$all->ammount}}
                                    </td>
                                    <td>
                                        {{$all->bank_patner_name}}
                                    </td>
                                    <td>
                                        {{$all->transaction_id}}
                                    </td>
                                    
                                        <td>{{ Carbon\Carbon::parse($all->created_at)->format('d-M-Y h:i:s A') }}
                                    <br>{{ Carbon\Carbon::parse($all->created_at)->diffForHumans()}}</td>
                                    <td>
                                        
                                        <form method="post" action="{{url('/admin/add/ammount/main/fund/'.$all->id)}}">
                                       
                                            @csrf
                                            @foreach($add_fund as $all)
                                            <input type="hidden" value="{{$all->donor_id}}" name="donator_id">
                                            <input type="hidden" value="{{$all->sub_service}}" name="subservices_id">
                                            <input type="hidden" value="{{$all->cause_id}}" name="cause_id">
                                            <input type="hidden" value="{{$all->ammount}}" name="ammount">
                                            <input type="hidden" value="{{$all->transaction_id}}" name="transactions_id">
                                            <input type="hidden" value="{{$all->fund_type}}" name="funds_type">
                                            <input type="hidden" value="{{$all->banking_type}}" name="bankings_type">
                                            <input type="hidden" value="1" name="status">
                                          <input type="hidden"   name="date" value="{{ Carbon\Carbon::today() }}">
                                          @endforeach

                                            <button class="btn action_btn_active"><i class="fa fa-check" aria-hidden="true"></i></button>
                                        </form>
                                        <br>
                                        
                                        <button class="btn action_btn_delete" onclick=" return myFunction()" href="{{url('/admin/delete/service/'.$all->id)}}"><i class="fa fa-trash-o" aria-hidden="true"></i></button>

                                    </td>
                                
                                    

                                    </tr>
                                     <?php } ?>
                                 @endforeach

                                 

                                
                                
                                    
                               
                                </tbody>
                             
                            </table>

                          
        </div>
        </div>
      </div>
        </div> 





@endsection