<?php

namespace App\Http\Controllers\backEnd;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Donate_request;
use App\Transaction_id;
use App\Mainfund;
use App\Causes_fund;
use App\Service_fund;
use Carbon\Carbon;

class donateController extends Controller
{
    public function confirm_donate(){

    	$date = today();


          $confirm_donate=DB::table('transaction_ids')
           
            ->orderBy('id','DESC')
            ->get();

    $check_donate = DB::table('donate_requests')
            ->where('date','=',$date)
            ->join('bank_names', 'donate_requests.banking_type', '=', 'bank_names.id')
            ->select('donate_requests.*','bank_names.bank_patner_name')
            ->orderBy('id', 'DESC')
            ->get();

         $add_fund = DB::table('donate_requests')
         ->join('bank_names', 'donate_requests.banking_type', '=', 'bank_names.id')
         ->select('donate_requests.*','bank_names.bank_patner_name')
          ->get(); 
            

    	return view('backEnd.layouts.donate.check_donate',compact('check_donate','confirm_donate','add_fund'));
    }

    public function add_ammount_main_fund(Request $request){

    	$lest_id=Mainfund::insert([
    	    'donator_id'=>$request->donator_id,
          'cause_id'=>$request->cause_id,
          'subservices_id'=>$request->subservices_id,
          'ammount'=>$request->ammount,
          'date'=>$request->date,
          'created_at'=>Carbon::now(),
        
    	]);

      $ser_fund = $request->subservices_id;
      $cas_fund = $request->cause_id;
      $other_fund = $request->other_fund;

      if($ser_fund != 0){

        Service_fund::insert([

        'donator_id'=>$request->donator_id,
          'subservices_id'=>$request->subservices_id,
          'ammount'=>$request->ammount,
          'transactions_id'=>$request->transactions_id,
          'funds_type'=>$request->funds_type,
          'bankings_type'=>$request->bankings_type,
          'status'=>$request->status,
          'date'=>$request->date,
          'created_at'=>Carbon::now(),
          ]);
      }
      if($cas_fund != 0){

      Causes_fund::insert([

        'donator_id'=>$request->donator_id,
          'cause_id'=>$request->cause_id,
          'ammount'=>$request->ammount,
          'transactions_id'=>$request->transactions_id,
          'funds_type'=>$request->funds_type,
          'bankings_type'=>$request->bankings_type,
          'status'=>$request->status,
          'date'=>$request->date,
          'created_at'=>Carbon::now(),
          ]);
      }

      /*if($other_fund != 0){

        'donator_id'=>$request->donator_id,
          'ammount'=>$request->ammount,
          'transactions_id'=>$request->transactions_id,
          'funds_type'=>$request->funds_type,
          'bankings_type'=>$request->bankings_type,
          'status'=>$request->status,
          'date'=>$request->date,
          'created_at'=>Carbon::now(),
      }*/
     
    	Donate_request::find($request->id)->update(['status'=>$request->status,]);
      return redirect()->back();

    }
}
