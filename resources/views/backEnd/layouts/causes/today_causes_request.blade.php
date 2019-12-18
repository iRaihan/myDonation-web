@extends('backEnd.layouts.causes.causes_master')
@section('dashboard')
<div class="container">
    <div class="row">
        <div class="col-sm-12">

            <strong> Services Home / Causes Request</strong>

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
    
                 @if (Session::has('message'))
                           <div class="alert alert-success">{{ Session::get('message') }}</div>
                        @endif
                       
                
                   @foreach($all_request as $request)
                   
                  <div class="col-sm-8">
                    <div class="post_box">
                      <strong>Post Form: {{$request->first_name}}/{{$request->email}}/{{$request->phone}}/{{$request->created_at}}</strong>
                  
                      <div class="">{{$request->title}}</div>
                      <div class="">{{$request->location}}</div>
                      <div class="">{{$request->discription}}</div>
                      <div class="post_img"> <img 
                                        src="{{asset('public/images/all_causes/request_causes_image/')}}/{{$request->image}}" width="100">
                      </div>
                      <br>
                       <div>
                                   <a class="btn btn-danger" href="{{url('/admin/accept/request/'.$request->id)}}">Ignor This Post</a>
                                   <a class="btn btn-warning" href="{{url('/admin/accept/request/'.$request->id)}}">Accept & Add to Spam</a>
                                    <a class="btn btn-success" href="{{url('/admin/accept/request/'.$request->id)}}">Accept & Add to Causes</a>
                                    
                            
                                    
                                  </div>
                    </div>
                  </div>

                       
                         @endforeach

                   

                   <!--  <thead>
                        <tr>
                          

                            <th>#</th>
                            <th> Image </th>
                            <th>Title</th>
                            <th>Discription</th>
                            <th>Location</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    

                   @foreach($all_request as $request)          
                          
                        <tr>

                            <td></td>
                            <td width="200px">
                           
                         <img 
                                        src="{{asset('public/images/all_causes/request_causes_image/')}}/{{$request->image}}" width="100">
                              
                            </td>

                            <td width="200px">
                                {{$request->title}}
                            </td>
                          
                           
                          

                        <td width="300px">
                        	 {{$request->discription}}
                        </td>
                           <td>

                          {{$request->location}}
                           </td>
                                <td>
                                 <div class="btn-group">
                                  <button type="button" class="btn btn-info dropdown-toggle dropdown-table-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                  </button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item custom_btn" href="{{url('/admin/accept/request/'.$request->id)}}">Accept/Add to Causes</a>
                                    <a class="dropdown-item custom_btn" href="{{url('/admin/accept/request/'.$request->id)}}">Accept/Add to Spam</a>
                            
                                    
                                  </div>

                                  
                                </div>
                                <a class=" btn btn-danger table-button" onclick=" return myFunction()" href="{{url('/admin/delete/request/'.$request->id)}}">Delete</a>
                                        

                                    </td>
                         
                        </tr>
                       
                       
                         @endforeach

                    </tbody> -->
                </table>


            </div>
        </div>
    </div>
  
    @endsection