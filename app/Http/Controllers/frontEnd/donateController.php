<?php

namespace App\Http\Controllers\frontEnd;


use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Donor_reg;
use App\Donate_request;
use App\Transaction_id;
use App\All_service;
use App\All_cause;
use App\Blood_post;
use App\Fund_type;
use App\Bank_name;
use App\Mainfund;
use App\Causes_fund;
use App\Service_fund;
use App\Sendmessage;

use Session;
use Carbon\Carbon;

class donateController extends Controller
{
   public function donate_home(){


    $all_fund_type = Fund_type::all();
   $all_bank_patner = Bank_name::all();
   	return view('frontEnd.layouts.donate.donate_home',compact('all_bank_patner','all_fund_type'));
   }

   public function donor_reg(){
   	return view('frontEnd.layouts.donor.donor_regs');
   }
  public function donor_login_form(){
   	return view('frontEnd.layouts.donor.donor_login');
   }

   public function add_donor(Request $request){

        $this->validate($request, [
         'donor_phone' => 'required',
        'donor_email' => 'required',
        'password' => 'min:8',
        'password_confirmation' => 'required_with:password|same:password|min:8'
        ]);


    	$last_inserted_id=Donor_reg::insertGetId([
        'donor_full_name'=> $request->donor_full_name,
        'donor_email'=> $request->donor_email,
        'donor_phone'=> $request->donor_phone,
        'donor_address1'=> $request->donor_address1,
        'donor_address2'=> $request->donor_address2,
        'password'=> bcrypt($request->password),
        'created_at'=>Carbon::now(),
    		]);
   }
 public function donor_login(Request $request){

 	 $this->validate($request,[
        'donor_email'=>'required',
        'password'=>'required',
      ]);

       $password=$request->password;
     $valid_donor =Donor_reg::where('donor_email',$request->donor_email)->first();

     if (!Hash::check($password, $valid_donor->password)) {
       return redirect()->back()->with(toastr()->warning('message', 'Worng Email or Password!', ["positionClass" => "toast-top-center"]));
     }
     else
     {
      $Id = $valid_donor->id;
      Session::put('donor_id',$Id);
        echo '<script type="text/javascript">'
         , 
         'let isBoss = confirm(">>>>LOGIN SUCCESSFUL..! Back to Home page press [ OK ] or go to Donor Admin press [ CANCLE ]");',
         'if(isBoss){',
         'window.location.assign("/donate4humanity")',
        '}',
         'else{',
         'window.location.assign("/donate4humanity/donor/account")',
         '}'
         , '</script>';
     }
       
        
    }

     public  function donate_sub_services(Request $request){

          $this->validate($request, [
     
        'ammount' => 'required',
        'fund_type' => 'required',
        'banking_type' => 'required',
        
        ]);
          $c=$request->cause_id;

    if($c!=0)
    {

              $total_balance = Causes_fund::all()->where('cause_id', '=', $request->id)->sum('ammount');

              $total=$total_balance+$request->ammount;


              $cause_goal= All_cause::where('id', '=', $request->cause_id)->first()->target;

                        if($total<$cause_goal){

                          $last_inserted_id=Donate_request::insertGetId([
                        'donor_id'=> $request->donor_id,
                        'sub_service'=> $request->sub_service,
                        'cause_id'=> $request->cause_id,
                        'other_fund'=> $request->other_fund,
                        'ammount'=> $request->ammount,
                        'fund_type'=> $request->fund_type,
                        'banking_type'=> $request->banking_type,
                        'status'=> $request->status,
                        'transaction_id'=> $request->transaction_id,
                        'date'=> $request->date,
                        'created_at'=>Carbon::now(),
                        ]);

                    return view('frontEnd.layouts.donate.confirm_donate',compact('last_inserted_id'));


          }
          else
         
         echo "<b>Your Ammount getaer then Our Goal Amount !</b>";



          
        }



    $s=$request->sub_service;


    if($s!=0){

                $total_bal = Service_fund::all()->where('subservices_id', '=', $request->id)->sum('ammount');

              $totals=$total_bal+$request->ammount;


               $services_goal= All_service::where('id', '=', $request->sub_service)->first()->target;
    

                  if($totals<$services_goal){

                    $last_inserted_id=Donate_request::insertGetId([
                  'donor_id'=> $request->donor_id,
                  'sub_service'=> $request->sub_service,
                  'cause_id'=> $request->cause_id,
                  'other_fund'=> $request->other_fund,
                  'ammount'=> $request->ammount,
                  'fund_type'=> $request->fund_type,
                  'banking_type'=> $request->banking_type,
                  'status'=> $request->status,
                  'transaction_id'=> $request->transaction_id,
                  'date'=> $request->date,
                  'created_at'=>Carbon::now(),
                  ]);

                     return view('frontEnd.layouts.donate.confirm_donate',compact('last_inserted_id'));

                    }
    else
         
         echo "<b>Your Ammount getaer then Our Goal Amount !</b>";



}
  
         

        
}
  public function donor_home_page(){
       

        return view('frontEnd.layouts.donor.donor_account');
            
}
        
        
 public function confirm_transaction(Request $request){

    $data=Donate_request::find($request->last_id)->update([

      'transaction_id'=> $request->transaction_id,
     
    ]);


   if($data){

echo '<script type="text/javascript">'
         , 
         'let isBoss = confirm("Thanks Your Contribution! Please Wait Your Confirmation Message. ");',
         'if(isBoss){',
         'window.location.assign("/donate4humanity/donor/account")',
         '}'
            
         , '</script>';

   }

  
}

public function cause_donate_from($id){

$cause_id=All_cause::find($id);

 $all_fund_type = Fund_type::all();
   $all_bank_patner = Bank_name::all();
   
  return view('frontEnd.layouts.causes.causes_donate_from',compact('cause_id','all_fund_type','all_bank_patner'));
}

public function check_donate_list(){

$don_id=Session::get('donor_id');
 
$total_aid = DB::table('causes_funds')->where('donator_id','=',$don_id)->sum('ammount');
$total_aid_sevices = DB::table('service_funds')->where('donator_id','=',$don_id)->sum('ammount');
$total = DB::table('mainfunds')->where('donator_id','=',$don_id)->sum('ammount');


  return view('frontEnd.layouts.donor.check_donate_list',compact('total_aid','total_aid_sevices','total'));
}

 public function check_donation_report(){
  $donor_id=Session::get('donor_id');
   $alls = DB::table('sendmessages')->where('donar_id','=',$donor_id)
            ->join('event_causes', 'sendmessages.e_id', '=', 'event_causes.id')
            ->join('all_causes', 'sendmessages.hidden_id', '=', 'all_causes.id')
            ->select('sendmessages.*','all_causes.*','event_causes.*')
            ->get();

  return view('frontEnd.layouts.donor.donation_report',compact('alls'));
 }
}


 


