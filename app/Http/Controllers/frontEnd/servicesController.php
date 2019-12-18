<?php

namespace App\Http\Controllers\frontEnd;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services_category;
use App\All_service;
use App\Blood_post;
use App\Donor_reg;
use App\Service_fund;
use App\Fund_type;
use App\Bank_name;
use App\Mainfund;
use Image;
use Session;
use Carbon\Carbon;

class servicesController extends Controller
{
    public function view_services($id){
    	
    	$all_service = All_service::all()->where('service_category','=',$id)
    	                                  ->where('status','=','1');


    	return view('frontEnd.layouts.services.view_service',compact('all_service'));
    }

    public function sub_services($id){

      $sub_service = All_service::find($id);

      $all_fund_type = Fund_type::all();
      $all_bank_patner = Bank_name::all();
      

    
      $balance_aid = DB::table('service_funds')->where('subservices_id', '=', $id)->sum('ammount');
   

     $total=$balance_aid;

     $goal = $sub_service->target;

    
    $percent = $total/$goal;
    $total_percent= number_format( $percent * 100, 2 ) . '%';
      
  

      return view('frontEnd.layouts.services.service_review',compact('sub_service','all_fund_type','all_bank_patner','balance_aid','total_percent'));

     

    }

    public function service_donate_blood(){
      $date = date("Y-m-d");
        $all_blood = DB::table('blood_posts')
               ->where('last_date','>=',$date)
               ->orderBy('id', 'DESC')
                ->get();
        return view('frontEnd.layouts.services.view_blood_post',compact('all_blood'));

    }

    
}
