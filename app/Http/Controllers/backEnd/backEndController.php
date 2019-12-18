<?php

namespace App\Http\Controllers\backEnd;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Voluenteer_reg;
use App\Services_category;
use App\All_service;
use Image;
use Session;
use Carbon\Carbon;

class backEndController extends Controller
{
    public function admin(){

        return view('backEnd.layouts.admin.admin_login');
    }
    public function view_volunteer_list(){
     
     $all_volunteer = Voluenteer_reg::all();
        return view('backEnd.layouts.volunteer.viewvolunteer_list',compact('all_volunteer'));

    }

    public function index(){
        $all_event=All_service::all()->where('alart','=',450);

        $evenservices = DB::table('service_funds')
             ->join('all_services','service_funds.subservices_id','=','all_services.id')
             ->select('subservices_id', DB::raw('SUM(ammount) as total_amount'))
             ->groupBy('subservices_id')
             ->where('all_services.status',1)
             ->get();

        $evencauses = DB::table('causes_funds')
         ->join('all_causes','causes_funds.cause_id','=','all_causes.id')
         ->select('cause_id', DB::raw('SUM(ammount) as total_amount'))
         ->groupBy('cause_id')
         ->where('all_causes.status',1)
         ->get();

         $totalfunds = DB::table('mainfunds')
         ->sum('ammount');

        $date = date('Y-m-d');
        $vol_date = DB::table('voluenteer_regs')
               ->where('created_at','>=',$date)
               ->get();
        $allvolantier = Voluenteer_reg::get();

         $todaydonate = DB::table('mainfunds')
            ->orderBy('id', 'DESC')
              ->where('date','>=',$date)
            ->get();

        return view('backEnd.index',compact('all_event','vol_date','allvolantier','evenservices','evencauses','totalfunds','todaydonate'));

    }
    public function delete_volunteer(Request $request){
    	DB::table('voluenteer_regs')->where('id',$request->id)->delete();
        return redirect('admin/view_volunteer_list');
    }

}
