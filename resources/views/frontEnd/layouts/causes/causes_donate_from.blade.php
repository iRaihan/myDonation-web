@extends('frontEnd.layouts.master')

@section('content')

 
        

 <div class="container">
        <div class="section-header-title">
            <h1> Donate <Strong> Form </Strong></h1>
        </div>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
               <div class="donate-form-box">
                @php
                        $donor_id=Session::get('donor_id');

                        @endphp
                       <form  action="{{url('/donate')}}" method="post">

                       @csrf
                        <input type="hidden" value="{{$donor_id}}" name="donor_id">
                        <input type="hidden" value="0" name="subservices_id">
                        
                        <input type="hidden" value="{{$cause_id->id}}" name="cause_id">
                        
                        <input type="hidden" value="0" name="sub_service">
                        <input type="hidden" value="0" name="other_fund">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Amount</label>
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
                               <textarea  type="text" id="myText"  class="center-input" rows="3"  name="ammount" placeholder="Customs Amount BDT."></textarea>
                                
                            </div>
                        </div>
                             
                        <div class="form-group">
                            <label>Fund Type</label>
                            <select class="border_box" id="exampleFormControlSelect1" name="fund_type">
                              <option >-- Select a Option --</option> 
                              @foreach($all_fund_type  as $all)
                                <option value="{{$all->id}}">{{$all->fund_type_name}}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group banking_type_box">
                            <label for="exampleFormControlSelect1">Banking Option</label>
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
                </div>
            </div>
             <div class="col-sm-2"></div>

        </div>

 </div>
 
 
@endsection