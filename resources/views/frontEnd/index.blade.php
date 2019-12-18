@extends('frontEnd.layouts.master')
@section('header_menu_content')
                                          


                                          @php
                        $donor_id=Session::get('donor_id');

                        @endphp
                       
                         
         <!-- Button trigger modal -->

 


<!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Please!! <u>Login</u> or <u>Registred</u> your account.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        It is the Best Online Donate Foundation in Bangladesh.<br>
        We are Accepted by..
        <br>
       
        <div class="payment-company-image">
             @foreach($all_bank_patner as $all_patner)
        <img src="{{asset('public/images/bank_logo')}}/{{$all_patner->image}}" width="100">
        @endforeach
        </div>
        
      </div>
      <div class="modal-footer">
        
        <a href="{{url('/donor/register')}}" class="btn btn-primary dnt-menu-btn">Register</a>
        <a  href="{{url('/donor/login')}}" class="btn btn-success dnt-menu-btn">Login</a>
        <a  href="#" class="btn btn-secondary dnt-menu-btn" data-dismiss="modal">Close</a>
      </div>
    </div>
  </div>
</div>
 

                     <div class="dnt-btn">
                              <!-- <a href="{{url('/donate/')}}">Donate Now</a> -->
<a  href="#section2">Donate Now</a>
                                     </div>
                 

                                              
                                                                    
                          

@endsection
@section('content')
<main>
        <section>
            <div class="about-img" style="background-image:url('{{asset('/public/frontEnd/assets/images/r_slider.jpg')}}')">
                                <h1></h1>
                                       
                            </div>
                <div class="container">
                    <div class="row"> 
                        <div class="col-sm-12 col-lg-6 col-md-6">
                             <div class="about-text">
                                    
                                    <h2>We Need Your Help To Promote Humanity</h2>
                                    <p>Your thoughtful donation, of any amount or value can go a long way towards helping communities, families and individuals shape their lives in new and improved ways. From new cattle to new books, from improved sanitation to greater awareness, your donation is crucial to lives across Bangladesh.</p>
                                                                   </div>
                          
                        </div>
                    </div>
                </div>
            
        </section>

        <section><!-- =========== What We Do  ============ -->
            <div class="container">
                <div class="row">

                    <div class="col-sm-12 col-lg-5 col-md-5">
                        <div class="gol-image">
                            <img src="{{asset('/public/frontEnd/assets/images/donate2.png')}}">
                        </div>
                        
                    </div>
                    <div class="col-sm-12 col-lg-1 col-md-1">
                    </div>

                <div class="col-sm-12 col-lg-6 col-md-6">
                        <div class="sec-title right">
                                <h2 class="left">Our Mission & Vision</h2>
                                 <p class="letter">We work in partnership with individuals, communities, organisations and the government to create lasting solutions to the challenges faced by the poor and marginalized communities in Bangladesh</p>
                                     <ul class="about-text-ul">
                                        <li><i class="fa fa-check icon" aria-hidden="true"></i>Opportunity for education</li>
                                        <li> <i class="fa fa-check icon" aria-hidden="true"></i>Fresh Food</li>
                                        <li> <i class="fa fa-check icon" aria-hidden="true"></i>Pure Drinking Water</li>
                                        <li> <i class="fa fa-check icon" aria-hidden="true"></i>Free medicine</li>
                                        <li> <i class="fa fa-check icon" aria-hidden="true"></i>Fit Health</li>
                                        <li> <i class="fa fa-check icon" aria-hidden="true"></i>Opportunity for Fit Health</li>

                                    </ul>


                            </div>
                        </div>
                        
                    </div>

                </div>
            </div>
            
        </section><!-- =========== End What We Do  ============ -->


        <section>
            <!-- =====Service Section====-->

            <?php 
            $i=2;
            ?>

            <div class="container main" id="section2">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-header-title">
                            <h1> Our Services</h1>
                            <p>Serving Humanity </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 col-md-4">
                    <div class="services-box">
                        <div class="row">
                            <div class="col-sm-4 col-md-2 col-lg-2">
                                <div class="services-info-number">
                                <h1>1</h1>
                            </div>
                            </div>
                        
                       
                             <div class="col-sm-8 col-md-10 col-lg-10">
                            <div class="services-info">
                                <h1><a href="{{url('/service/blood/donate')}}">
                                    Donate Blood</a>
                                </h1>
                    
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                     @foreach($all_category as $all_cat)
                    <div class="col-sm-6 col-lg-3 col-md-4">
                       
                        <div class="services-box">
                        <div class="row">
                            <div class="col-sm-4 col-md-2 col-lg-2">
                                <div class="services-info-number">
                                <h1>{{$i++}}</h1>
                            </div>
                            </div>
                        
                       
                             <div class="col-sm-8 col-md-10 col-lg-10">
                            <div class="services-info">
                                <h1><a href="{{url('service/'.$all_cat->id)}}">
                                    {{$all_cat->service_category_name}}</a>
                                </h1>
                    
                            </div>
                        </div>
                        </div>
                    </div>
                    
                   
                </div>
                @endforeach
            </div>
        </section><!-- =====End the service Section====-->

        <section>
            <!--===== Resent Cuases Section========-->

            
            <div class="cause-page" style="background-image:url('{{asset('/public/frontEnd/assets/images/donate3.jpg')}}')">
                 <h1></h1>
            <div class="container">
                <div class="section-header-title">
                    <h2> Our Resent <Strong> Causes </Strong></h2>
                </div>

                <div class="row services-slider  owl-carousel">
                    @foreach($all_cause as $causes)
                    <div class="cause-box">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="cause-img">

                                        
                                              <img src="{{asset('public/images/all_causes')}}/{{$causes->image}}" alt="">
                                            

                                        

                                         
                                    </div>
                                </div>
                                <div class="col-sm-7">

                                    <div class="cause-info">

                                       
                                            
                                            <?php 
                                            $check=$causes->volunteer_id;
                                            ?>
                                            @if($check==0)
                                              <b class="causes_post_name">Posted By : Admin</b> 
                                            
                                           @else
                                          <b class="causes_post_name">Posted By : Volunteer</b> 

                                            
                                    
                                           @endif
                                           <?php
                                           $a=$causes->urgent
                                           ?>
                                           @if($a==1)
                                          <div class="urgent"><b>Urgent</b></div>
                                          @endif
                                          <div class="post_tite">{{$causes->title}}
                                    
                                            <br>
                                        <p>{{$causes->discription}}</p>


           
           @php 

           
           $aid_balance = \App\Causes_fund::all()->where('cause_id', '=', $causes->id)->sum('ammount');

            $total=$aid_balance;
 

     $goal = $causes->target;

    
    $percent = $total/$goal;
    $percent= number_format( $percent * 100, 2 ) . '%';

@endphp


          


<p><b>Goal : {{$goal}}</b></p>
<p><b>Payment Aid : {{$total}}</b></p>
<p><b>Parcentage : {{$percent}}</b></p>
                                        </div>

                            <?php
                         if($donor_id==0){
                            ?>
                                        <div class="donar-btn2">
                                            <a class="btn donar-btn3" data-toggle="modal" data-target="#exampleModal"> Donate Now </a>
                                        </div> 

                    @php
                     }
                     else{
                       @endphp

                     <div class="donar-btn2">
                              <a href="{{url('/causes/donate/'.$causes->id)}} " class="btn donar-btn3" >Donate Now</a>
                     </div>
                                                 
                                @php
                                }
                                @endphp


                                    </div>

                                    <div class="row">
                                        
                                            <div class="col-sm-12">
                                            <div class="causes_location_box">
                                            <hr>
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>  {{$causes->location}},{{$causes->division_name}}</b>
                                            </div>
                                            </div>
                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
        
        </section>
        <!--===== End Resent Cuases Section========-->


        <section>
            <!--===Volenteer Profile====-->


            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-header-title">
                            <h1> Our <Strong> Glorious </Strong> Volunteer</h1>
                        </div>
                    </div>
                    @foreach($all_volunteer as $all)
                    <div class="col-sm-2 col-lg-3 col-md-4">
                        <div class="volenteer-box">
                            <div class="volenteer-img">
                                <img src="{{asset('public/images/volunteer_profile_images')}}/{{$all->image}}" alt="">
                                <div class="volenteer-info">
                                    <b> {{$all->first_name}}</b>
                                    <br>Student at DIU
                                    </div>
                                    <div class="volenteer-social-icon">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"> /</i></a>
                                        <a href="#"><i class="fa fa-envelope" aria-hidden="true">  /</i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>


        </section>
        <!--=== End Volenteer Profile====-->


        <!--=== Total Count ====-->

        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-lg-3 col-md-4">
                    <div class="count_box">
                        <div class="count_icon">
                            <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                            
                        </div>
                        <div class="count_number">
                            <h2>1025</h2>
                        </div>
                        <div class="count_text">
                            <b>Total Volunteer</b>
                        </div>
                    </div>

                </div>
                <div class="col-sm-2 col-lg-3 col-md-4">
                    <div class="count_box">
                        <div class="count_icon">
                            <i class="fa fa-cogs" aria-hidden="true"></i>
                            
                        </div>
                        <div class="count_number">
                            <h2>1025</h2>
                        </div>
                        <div class="count_text">
                            <b>Total Services</b>
                        </div>
                    </div>
                    
                </div>
                <div class="col-sm-2 col-lg-3 col-md-4">
                    <div class="count_box">
                        <div class="count_icon">
                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                            
                        </div>
                        <div class="count_number">
                            <h2>1025</h2>
                        </div>
                        <div class="count_text">
                            <b>Total Donators</b>
                        </div>
                    </div>
                    
                </div>
                <div class="col-sm-2 col-lg-3 col-md-4">
                    <div class="count_boxa">
                        <div class="count_icon">
                            <i class="fa fa-handshake-o" aria-hidden="true"></i>
                            
                        </div>
                        <div class="count_number">
                            <h2>1025</h2>
                        </div>
                        <div class="count_text">
                            <b>Total Events</b>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!--=== End total Count====-->

        <section>
            <!--====Events Sections ====-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="events-header-title">
                            <h1> Upcomming <Strong> Events </Strong></h1>
                        </div>
                        <div class="row events-slider  owl-carousel">
                            @foreach($causes_event as $c_event)
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="slider-event-box">
                                    <div class="slider-event-img">
                                        <img 
                                        src="{{asset('public/images/all_causes')}}/{{$c_event->image}}" alt="evnt-img1.jpg">
                                        <div class="slider-event-text">
                                            <div class="slider-img-num">
                                                <b>01</b>
                                                <a>{{ \Carbon\Carbon::parse($c_event->e_date)->format('Y-M-d')}} </a>                                              
                                                 <i class="fa fa-map-marker" aria-hidden="true">  {{$c_event->location}},{{$c_event->division_name}} </i>


                                            </div>
                                            <l> {{$c_event->title}} </l>
                                            <button class="btn agree_btn">Join</button>

                                            
                                        </div>
                                    </div>

                                </div>
                            </div>
                            @endforeach
                            @foreach($services_event as $s_event)
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="slider-event-box">
                                    <div class="slider-event-img">
                                        <img 
                                        src="{{asset('public/images/all_servicess_image')}}/{{$s_event->image}}" alt="evnt-img1.jpg">
                                        <div class="slider-event-text">
                                            <div class="slider-img-num">
                                                <b>01</b>
                                                <a>{{ \Carbon\Carbon::parse($s_event->e_date)->format('Y-M-d')}} </a>                                              
                                                 <i class="fa fa-map-marker" aria-hidden="true"> {{$s_event->e_place}} </i>


                                            </div>
                                            <l> {{$s_event->service_title}} </l>
                                            <button class="btn agree_btn">Join</button>

                                            
                                        </div>
                                    </div>

                                </div>
                            </div>
                            @endforeach
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="slider-event-box">
                                    <div class="slider-event-img">
                                        <img src="{{asset('public/frontEnd')}}/assets/images/education1.jpg" alt="evnt-img1.jpg">
                                        <div class="slider-event-text">
                                            <div class="slider-img-num">
                                                <b>01</b>
                                                <a>12-Oct-2019</a>                                              
                                                 <i class="fa fa-map-marker" aria-hidden="true">  Dhaka,bangladesh</i>

                                            </div>
                                            <l> Helps for Poor</l>
                                            <button class="btn agree_btn">Join</button>

                                            
                                        </div>
                                    </div>

                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="donar-header">
                            <strong>See who else is Helping</strong>
                        </div>
                        @foreach($donor_first_latter as $all)
                        <div class="row">
                             
                            <div class="col-sm-6 col-md-6">
                                <div class="donar-box-button"><b><?php
                                
                                $name=$all->donor_full_name;

                           $firstCharacter = substr($name, 0, 1);
                           echo $firstCharacter; 


                             ?></b></div>
                                

                            </div>

                            <div class="col-sm-6 col-md-6">
                                
                                

                            <div class="donar-name">
                                <h6>{{$all->donor_full_name}}</h6>
                                <b>{{$all->ammount}} Tk. </b><i> {{ Carbon\Carbon::parse($all->created_at)->diffForHumans()}}</i>
                            </div>
                            </div>
                        </div>
                        
                        
                            @endforeach
                        </div>
                       


                    </div>
                </div>
            </div>

        </section>
        <!--===End Event Sections ====-->


        <section>
            <!--=========== Donor Say Box ==============-->
            <div class="container">
                <div class="section-header-title">
                    <h1> Donors <Strong> Comments</Strong></h1>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="donor-say-box">
                            <div class="row comments-slider  owl-carousel">
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="donor-say-name">
                                        <strong> Md.Raihan Khan</strong>
                                        <div class="donor-say-info">
                                            <p> Donate for Humanity is best donate foundation.It works very helpful and truthly.
                                                I join this foundation</p>
                                        </div>
                                    </div>
                                </div>
                                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="donor-say-name">
                                        <strong> Md.Raihan Khan</strong>
                                        <div class="donor-say-info">
                                            <p> Donate for Humanity is best donate foundation.It works very helpful and truthly.
                                                I join this foundation</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=========== End Donor Say Box ==============-->
@endsection