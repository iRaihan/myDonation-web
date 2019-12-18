<?php
namespace App\Http\Controllers\backend;
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
use App\Mainfund;
use App\Sendmessage;
use Image;
use Session;
use Carbon\Carbon;

class donationController extends Controller
{
    

    public function todays_check(){

    	 $today = date('Y-m-d');
    	 $event_c = DB::table('event_causes')->where('e_date','=',$today)
            ->join('all_causes', 'event_causes.cas_id', '=', 'all_causes.id')
            ->join('division_names', 'all_causes.division', '=', 'division_names.id')
            ->select('all_causes.*','event_causes.*','division_names.division_name')
            ->get();

        $event_s = DB::table('event_causes')->where('e_date','=',$today)
            ->join('all_services', 'event_causes.ser_id', '=', 'all_services.id')
            ->select('all_services.*','event_causes.*')
            ->get();

      return view('backend.layouts.donation.today_donation',compact('event_c','event_s'));
    }

    public function complite_causes_event(Request $request){

           
        $alldonateids = DB::table('mainfunds')
        ->where('mainfunds.cause_id', '=', $request->hidden_id)->get();
        // return $alldonateids;
        foreach($alldonateids as $alldonateid){
            $sendmessage = new Sendmessage();
            $sendmessage->donar_id = $alldonateid->donator_id;
            $sendmessage->e_id = $request->e_id;
            $sendmessage->hidden_id = $request->hidden_id;
            $sendmessage->amount = $request->amount;
            $sendmessage->place = $request->place;
            $sendmessage->num_person = $request->num_person;
            $sendmessage->message = $request->message;
            $sendmessage->details = $request->details;
            $sendmessage->save();
        }
        $affected = DB::table('mainfunds')->where('cause_id', '=', $request->hidden_id)->update(array('ammount' => 0));
        $alldonarmsg=DB::table('donor_regs')->where('id');
        return redirect()->back()->with('message','Message send to all donar');
        }

    public function complite_services_event($id){
    	$affected = DB::table('mainfunds')->where('subservices_id', '=', $id)->update(array('ammount' => 0));
    }
}
