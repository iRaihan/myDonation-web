@extends('frontEnd.layouts.master')
@section('content')
<div class="container">
         <div class="sub-help-box">
        </div>
    <div class="row">
          

            <div class="col-sm-6">
                <div class="sub-help-box">
                     <div class="sub-help-img">
                        <img 
                                        src="{{asset('public/images/all_servicess_image')}}/{{$sub_service->image}}" width="350">
                    </div>
                </div>
              </div>
              <div class="col-sm-6">

                    <div class="sub-help-info">
                        <level>
                          <strong>{{$sub_service->service_title}}</strong>
                        </level>
                        <br>
                         <level>
                          {{$sub_service->service_discription}}
                        </level>
                        <br><br>
                         <level>
                          <h5 style="font-size: 18px">Goal : {{$sub_service->target}}</h5>
                        </level>
                        <br>
                        <level>
                          <h5 style="font-size: 18px">Payment Aid : {{$balance_aid}}</h5>
                        </level>
                        <br>
                        <level>
                          <h5 style="font-size: 18px">Percentage : {{$total_percent}}</h5>
                        </level>
                        <level>
                          <div class="per_box">
                            <div class="per_box_color" style="width: {{$total_percent}}">
                            <b>{{$total_percent}}</b>
                          </div>
                          </div>
                        </level>
                     <div class="sub-help-btn">
                       @php
                        $donor_id=Session::get('donor_id');

                        @endphp
                        <?php
                         if($donor_id==0){
                            ?>
                         
         <!-- Button trigger modal -->

<div class="dnt-btn">

                          <a  data-toggle="modal" data-target="#exampleModal">
  Donate
</a>    
    </div>


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
</div>
</div>

<?php
                     }
                     else{
                       ?>

                     <form  action="{{url('/donate')}}" method="post">

                       @csrf
                        <input type="hidden" value="{{$donor_id}}" name="donor_id">
                        <input type="hidden" value="{{$sub_service->id}}" name="sub_service">
                        <input type="hidden" value="0" name="cause_id">
                        <input type="hidden" value="0" name="other_fund">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label"><b>Amount</b></label>
                            <div class="col-sm-10 donate-ammout">
                                <div id="myDIV">
                                   
                                    <a type="text" class="donate-ammout1" onclick="myFunction1()" value="500"><span>৳</span>500</a>
                                    <a class="donate-ammout1" onclick="myFunction2()" value="1000"><span>৳</span>1000</a>
                                    <a class="donate-ammout1" onclick="myFunction3()" value="2000"><span>৳</span>2000</a>
                                    <tr>or</tr>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                               <textarea  type="text" id="myText"  class="form-control center-input" rows="3"  name="ammount" placeholder="Customs Amount BDT."></textarea>
                                
                            </div>
                        </div>
                             
                        <div class="form-group">
                            <label for="exampleFormControlSelect1"><b>Fund Type</b></label>
                            <select class="form-control" id="exampleFormControlSelect1" name="fund_type"required autofocus>
                              <option >-- Select a Option --</option> 
                              @foreach($all_fund_type  as $all)
                                <option value="{{$all->id}}">{{$all->fund_type_name}}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group banking_type_box">
                            <label for="exampleFormControlSelect1"><b>Banking Option</b></label>
                            <div class="payment-company-image">
                              @foreach($all_bank_patner as $all_patner)
                             
                              <input type="radio"   class="bkash{{$all_patner->id}} form-radio" name="banking_type" value="{{$all_patner->id}}">
                              <img src="{{asset('public/images/bank_logo')}}/{{$all_patner->image}}" width="100">
                            </label>

                        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

                            <script>

                            $('.bkash{{$all_patner->id}}').change(function(){
                              document.getElementById("demo").innerHTML = "{{$all_patner->bank_patner_name}} account :  {{$all_patner->bank_patner_account}}";
                            })
                            </script>
                              @endforeach
                              <p id="demo" class="account-txt"></p>
                              
                              </div>

                              <input type="hidden" name="date" value="{{ Carbon\Carbon::today() }}">
                             
                            <input type="hidden" class="form-control" value="0" name="status">
                             <input type="hidden"  value="0" name="transaction_id"> 
                              
                        </div>
                       <button type="submit" class="dnt-btn">Donate</button>
                     </form>
                 
<?php
}?>
                      
                     </div>
              </div>  
                        
                    </div>
              
             
        </div>
          </div>
        </div>

@endsection