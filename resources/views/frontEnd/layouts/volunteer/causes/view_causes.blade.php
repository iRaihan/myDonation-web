@extends('frontEnd.layouts.account.acc_master')

@section('acc_content')


<div class="container">
    <div class="row">
       
        <div class="col-sm-12 ">
            <div class="post_btn">
                            <a href="{{url('/volunteer/post_causes')}}"><i class="fa fa-telegram" aria-hidden="true"></i></i> Post</a>
                     </div>
        </div>
                  
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-11">
            
            <div class="account_table_box">
                <table>
                    <thead>
                        <tr>
                            <th style="width: 3%">Sl.No.</th>
                            <th style="width: 11%">Image</th>
                            <th style="width: 12%">Title</th>
                            <th style="width: 12%">Area</th>
                            <th style="width: 25%" >Discription</th>
                            <th style="width: 12%">Post Date</th>
                            <th style="width: 12%">Status</th>
                            <th style="width: 10%">Action</th>
                        </tr>
                        </thead>
                        @foreach($active_vol_id as $all)
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <img 
                                        src="{{asset('public/images/all_causes/request_causes_image')}}/{{$all->image}}" width="80">
                            </td>
                            <td>{{$all->title}}</td>
                            <td>{{$all->location}}</td>
                            <td>{{$all->discription}}</td>
                            <td>{{ Carbon\Carbon::parse($all->created_at)->format('d-M-Y') }}
                                
                            </td>
                            
                            <td>
                                    <?php
                                $a=$all->status;
                                if($a==0){
                                    echo "Request pending";
                                }
                                else {
                                    echo "Accepet";
                                }
                                ?>
                                
                            </td>
                            <td>
                                  <?php
                                $b=$all->status;
                                if($b==1){
                                    echo "--";
                                }
                                else {
                                    
                                ?>
                                <div class="edit_btn">
                                <a href=""><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                </div>
                                <div class="delete_btn">
                                <a href=""><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </div>
                            <?php }?>

                            </td>
                        </tr>
                        </tbody>
                        @endforeach
                </table>
            </div>
        </div>
        
    </div>
</div>

@endsection