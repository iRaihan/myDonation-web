<?php

namespace App\Http\Controllers\backEnd;


use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services_category;
use App\All_service;
use App\All_cause;
use App\Voluenteer_reg;
use App\Event_cause;
use App\Causes_fund;
use App\Division_name;
use App\Service_fund;
use Image;
use Session;
use Carbon\Carbon;

class eventController extends Controller
{
    public function causes_event_alert(){
       
        $cause_goal= All_cause::all()->where('status','=',1);
       

			    $user_info = DB::table('causes_funds')
                 ->select('cause_id', DB::raw('SUM(ammount) as total_amount'))
                 ->groupBy('cause_id')
                 ->get();


        return view('backEnd.layouts.events.event_alerts',compact('user_info','cause_goal'));

    	
     
    }


    public function service_event_alert(){


 
        $service_goal= All_service::all()->where('status','=',1);
       

			    $user_info = DB::table('service_funds')
                 ->select('subservices_id', DB::raw('SUM(ammount) as total_amount'))
                 ->groupBy('subservices_id')
                 ->get();


       return view('backEnd.layouts.events.service_event_alerts',compact('user_info','service_goal'));




    }


    public function event_stop_to_history(Request $request){

    	All_cause::find($request->id)->update([   
        
        'status'=> $request->status,

        ]);

        Event_cause::insert([   
        
        'cas_id'=> $request->cas_id,
        'event_status'=> $request->event_status,
        'created_at'=>Carbon::today(),

        

        ]);

        return back();

    }

    public function ser_event_stop_to_history(Request $request){

    	All_service::find($request->id)->update([   
        
        'status'=> $request->status,

        ]);

        Event_cause::insert([   
        
       
        'event_status'=> $request->event_status,
        'ser_id'=> $request->ser_id,
        'created_at'=>Carbon::today(),

        

        ]);

        return back();

    }

    public function stop_to_event($id){

          
           
           $causes = DB::table('all_causes')
            ->join('division_names', 'all_causes.division', '=', 'division_names.id')
            ->select('all_causes.*', 'division_names.division_name')
            ->where('all_causes.id','=',$id)
            ->get();

           return view('backEnd.layouts.events.causes_event',compact('causes'));
    }

    public function ser_stop_to_event($id){

		$services = All_service::all()->where('id','=',$id);
            

           return view('backEnd.layouts.events.service_event',compact('services'));
           

    }

    public function add_stop_to_event(Request $request){
    	
    	All_cause::find($request->cas_id)->update([   
        
        'status'=> $request->status,

        ]);

         
        $ca_id=$request->cas_id;
        
        
         if($ca_id!= 0)
         {

         Event_cause::where('cas_id','=',$ca_id)->update([

         'e_date'=> $request->e_date,
        'e_time'=> $request->e_time,
        'e_place'=> $request->e_place,
        'event_status'=> $request->event_status,
		]);
     }

     else
     {
    	Event_cause::insert([   
        
        'ser_id'=> $request->ser_id,
        'cas_id'=> $request->cas_id,
        'e_date'=> $request->e_date,
        'e_time'=> $request->e_time,
        'e_place'=> $request->e_place,
        'event_status'=> $request->event_status,
        'created_at'=>Carbon::today(),

       
        ]);
    
         

    }
    return redirect()->back()->with('message', '  Successfuly Add a Event');
}

    public function ser_add_stop_to_event(Request $request){

    	All_service::find($request->ser_id)->update([   
        
        'status'=> $request->status,

        ]);

    	Event_cause::insert([   
        
        'cas_id'=> $request->cas_id,
        'ser_id'=> $request->ser_id,
        'e_date'=> $request->e_date,
        'e_time'=> $request->e_time,
        'e_place'=> $request->e_place,
        'event_status'=> $request->event_status,
        'created_at'=>Carbon::today(),

        

        ]);
         return redirect()->back()->with('message', '  Successfuly Add a Event');

    }

    public function event_causes_history(){
        
       
       $c_his  = DB::table('event_causes')->where('event_status','=',0)->where('cas_id','!=',' ')
            ->join('all_causes', 'event_causes.cas_id', '=', 'all_causes.id')
            ->join('division_names', 'all_causes.division', '=', 'division_names.id')
            ->select('all_causes.*','event_causes.*','division_names.division_name')
            ->get();
            

            
    	return view('backEnd.layouts.events.view_cause_history',compact('c_his'));
    }

    public function ongoing_event(){


     
       $all_event  = DB::table('event_causes')->where('event_status','=',1)
            ->join('all_causes', 'event_causes.cas_id', '=', 'all_causes.id')
            ->join('division_names', 'all_causes.division', '=', 'division_names.id')
            ->select('all_causes.*','event_causes.*','division_names.division_name')
            ->get();

        return view('backEnd.layouts.events.ongoing_event',compact('all_event'));
    }
}
