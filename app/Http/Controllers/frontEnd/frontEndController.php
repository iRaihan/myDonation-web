<?php

namespace App\Http\Controllers\frontEnd;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services_category;
use App\All_service;
use App\Voluenteer_reg;
use App\Blood_post;
use App\Request_cause;
use App\All_cause;
use App\Event_cause;
use App\Division_name;
use App\Mainfund;
use App\Donor_reg;
use App\Bank_name;
use App\Causes_fund;
use Image;
use Session;
use Carbon\Carbon;

class frontEndController extends Controller
{
    public function index(){

        $all_cause = DB::table('all_causes')
            ->join('division_names', 'all_causes.division', '=', 'division_names.id')
            
            ->select('all_causes.*', 'division_names.division_name')
            ->orderBy('id', 'DESC')
            ->where('all_causes.status','=',1)
            ->get();
    

        $all_category = Services_category::all();
        $all_bank_patner=Bank_name::all();


        $donor_first_latter = DB::table('mainfunds')
            ->join('donor_regs', 'mainfunds.donator_id', '=', 'donor_regs.id')
            ->select('mainfunds.*', 'donor_regs.donor_full_name')
            ->orderBy('id', 'DESC')
            ->paginate(4);

            $all_volunteer = DB::table('voluenteer_regs')->paginate(4);


   $services_event = DB::table('event_causes')
            ->join('all_services', 'event_causes.ser_id', '=', 'all_services.id')
            ->select('event_causes.*', 'all_services.*')
            ->where('event_causes.event_status','=',1)
            ->get();

    $causes_event = DB::table('event_causes')
            ->join('all_causes', 'event_causes.cas_id', '=', 'all_causes.id')
            ->join('division_names', 'all_causes.division', '=', 'division_names.id')
            ->select('event_causes.*', 'all_causes.*','division_names.division_name')
            ->where('event_causes.event_status','=',1)
            ->get();
            
	
    	return view('frontEnd.index',compact('all_category','all_cause','all_bank_patner','donor_first_latter','all_volunteer','aid_balance','percent','causes_event','services_event'));
    }
    public function volunteer_reg(){
    	return view('frontEnd.layouts.volunteer-reg');
    }
    public function volunteer_login(){
    	return view('frontEnd.layouts.volunteer-login');
    }

    public function help_poor(){
    	return view('frontEnd.layouts.help_poor');
    }
}
