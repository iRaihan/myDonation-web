@extends('backEnd.layouts.services.services_master')
@section('dashboard')
<div class="container">
    <div class="row">
        <div class="col-sm-12">

            <strong> Services Home / Active Servicess</strong>

        </div>
    </div>
</div>

@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-sm-12 col-lg-12 ">
                <div class="card-body">

                    <?php $i=0;
                        ?>

                    <table class="my_table">

                        <thead>
                            <tr>
                                <th>#</th>
                                <th> Picture</th>
                                <th>Service Title</th>
                                <th>Discriptions</th>
                                <th>Service Category</th>
                                <th>Target</th>
                                <th>Alart</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($active as $services)

                            <tr>
                                <td>{{++$i}}</td>
                                <td>
                                    <img src="{{asset('public/images/all_servicess_image')}}/{{$services->image}}" width="100">
                                </td>
                                <td><strong>{{$services->service_title}}</strong>
                                </td>
                                <td>{{$services->service_discription}}</td>
                                <td>{{$services->service_category_name}}</td>
                                <td>{{$services->target}}</td>
                                <td>{{$services->alart}}</td>
                                <td>{{'Active'}} </td>
                                <td>
                                        <a class="btn btn-success table-button" href="{{url('/admin/edit/service/'.$services->id)}}">Edit</a>
                                        <br>
                                        <a class="btn btn-danger table-button" onclick="myFunction()" href="{{url('/admin/delete/service/'.$services->id)}}">Delete</a>
                                        <br>
                                       <form method="post" action="{{url('/admin/inactive/service/'.$services->id)}}">
                                           @csrf
                                            <input type="hidden" value="0" name="inactive"> 
                                           <input type="hidden" value='{{$services->id}}' name="hidden_id">
                                           <button type="submit" class="btn btn-primary">Inactive</button>
                                       </form>

                                </td>

                                @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</section>

@endsection