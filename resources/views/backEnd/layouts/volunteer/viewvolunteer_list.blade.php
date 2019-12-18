@extends('backEnd.layouts.master')

@section('content-header')
 <h3 class="m-0 text-dark">Volunteer List</h3>
@endsection

@section('content')

<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                        <?php $i=0;
                        ?>
                        
                            <table class="table table-bordered">
                              
                                <thead>
                                <tr >
                                <th>#</th>
                                <th>Profile Picture</th>
                                <th>Vlounteer Information</th>
                                <th >Present Address</th>
                                <th>Parmanent Address</th>
                                <th>Blood Group</th>
                                <th>Join Date</th>
                                <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($all_volunteer as $volunteer)
                                    
                                    <tr>
                                    <td>{{++$i}}</td>
                                    <td>
                                        <img 
                                        src="{{asset('public/images/volunteer_profile_images')}}/{{$volunteer->image}}" width="100">
                                    </td>
                                    <td><strong>{{$volunteer->first_name}} {{$volunteer->last_name}}</strong> <br> Email: {{$volunteer->email}}
                                        <br>Phone: {{$volunteer->phone}}<br> 


                                    </td>
                                    <td>{{$volunteer->present_address}}</td>
                                    <td>{{$volunteer->parmanent_address}}</td>
                                    <td>{{$volunteer->blood}}</td>
                                    <td>{{ Carbon\Carbon::parse($volunteer->created_at)->format('d-M-Y h:i:s A') }}
                                    <br>{{ Carbon\Carbon::parse($volunteer->created_at)->diffForHumans()}}</td>
                                    
               
                                    <td><a class="btn btn-danger" href="{{url('/admin/delete/volunteer/'.$volunteer->id)}}">Delete</a>

                                    </td>
                                    
                                @endforeach
                                </tbody>
                            </table>
                          

                </div>
            </div>
        </div>
    </div>
</div>
@endsection