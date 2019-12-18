<?php

namespace App\Http\Controllers\backEnd;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\All_cause;
use App\Request_cause;
use App\Division_name;
use App\Voluenteer_reg;
use Image;
use Session;
use Carbon\Carbon;

class causesController extends Controller
{
   public function causes_home(){
   	return view('backEnd.layouts.causes.causes_master');
   }

   public function add_cuases(){

   	return view('backEnd.layouts.causes.add_causes');
   }

 

  public function causes_request(){
  

  $division = Division_name::all();
   $date = date("Y-m-d");
   $year=Carbon::now()->year;

$today = DB::table('request_causes')
               ->where('created_at','=',$date)

                ->get();
 
      
       $Dhaka = DB::table('request_causes')->where('division','=',1)->get();
       $Chattagram = DB::table('request_causes')->where('division','=',2)->where('created_at','=',$date)->get();
       $Rajshahi = DB::table('request_causes')->where('division','=',3)->where('created_at','=',$date)->get();
       $Khulna = DB::table('request_causes')->where('division','=',4)->where('created_at','=',$date)->get();
       $Barishal = DB::table('request_causes')->where('division','=',5)->where('created_at','=',$date)->get();
       $Sylhet = DB::table('request_causes')->where('division','=',6)->where('created_at','=',$date)->get();
       $Rangpur = DB::table('request_causes')->where('division','=',7)->where('created_at','=',$date)->get();
       $Mymensingh = DB::table('request_causes')->where('division','=',8)->where('created_at','=',$date)->get();
 
       
        $total_this_year = DB::table('request_causes')
                
                ->join('division_names', 'division_names.id', '=', 'request_causes.division')
                ->groupBy('request_causes.division')
               
                ->get(['request_causes.division', DB::raw('count(division_names.id) as division_name')]);
            

        return view('backEnd.layouts.causes.causes_request',compact('division','total_this_year','Dhaka','Chattagram','Rajshahi','Khulna','Barishal','Sylhet','Rangpur','Mymensingh','total_active'));
     
      }
       
   
   public function insert_causes(Request $request){

     $last_inserted_id = All_cause::insertGetId([

          'title'=>$request->title,
          'discription'=>$request->discription,
          'volunteer_id'=>$request->volunteer_id,
          'division'=>$request->division,
          'location'=>$request->location,
          'target'=>$request->target,
          'alart'=>$request->alart,
          'status'=>$request->status,
          'urgent'=>$request->urgent,
          'created_at'=>Carbon::today(),

      ]);

       if($request->hasFile('image')){

              $causes_upload_profile = $request->image;

              $filename = $last_inserted_id.".".$causes_upload_profile->getClientOriginalExtension();
              Image::make($causes_upload_profile)->resize(300, 300)->save( base_path('public/images/all_causes/'.$filename ));
               All_cause::find($last_inserted_id)->update(['image'=>$filename]);
           }
            return redirect()->back()->with('message', '  Successfuly Add a Causes');

   }

   public function view_all_causes(){

  
  $all_cause = DB::table('all_causes')
            ->join('division_names', 'all_causes.division', '=', 'division_names.id')
            ->select('all_causes.*', 'division_names.division_name')
            ->orderBy('id', 'DESC')
            ->get();

          
            
    return view('backEnd.layouts.causes.view_all_causes',compact('all_cause'));
   }

   public function today_causes_request($id){
    
       $all_request = DB::table('request_causes')->where('division','=',$id)
       ->where('status','=',0)
       ->join('voluenteer_regs', 'request_causes.volunteer_id', '=', 'voluenteer_regs.id')
        ->select('request_causes.*', 'voluenteer_regs.first_name','voluenteer_regs.phone','voluenteer_regs.email')
        ->get();
  
      return view('backEnd.layouts.causes.today_causes_request',compact('all_request'));
   

   }


   public function accept_causes_request($id){
   
   $accept_causes=Request_cause::all()->where('id','=',$id);

   return view('backEnd.layouts.causes.accept_causes',compact('accept_causes'));
   }

   public function accept_insert_causes_request(Request $request)
   {  


   
   Request_cause::find($request->id)->update([

    'status'=>$request->status,
   ]);

   $last_inserted_id = All_cause::insertGetId([

          'title'=>$request->title,
          'discription'=>$request->discription,
          'volunteer_id'=>$request->volunteer_id,
          'division'=>$request->division,
          'location'=>$request->location,
          'target'=>$request->target,
          'alart'=>$request->alart,
          'status'=>$request->status,
          'urgent'=>$request->urgent,
          'created_at'=>Carbon::today(),
      ]);

     
       if($request->hasFile('image')){

              $causes_upload_profile = $request->image;

              $filename = $last_inserted_id.".".$causes_upload_profile->getClientOriginalExtension();
              Image::make($causes_upload_profile)->resize(300, 300)->save( base_path('public/images/all_causes/'.$filename ));
               All_cause::find($last_inserted_id)->update(['image'=>$filename]);
           }

          return redirect('/admin/view/request/{id}')->with('message', '  Successfuly Add a Causes');
          
  

    }
public function view_all_causes_request(){
  $today=Carbon::today();

  $tody_all_request=DB::table('request_causes')
            ->join('division_names', 'request_causes.division', '=', 'division_names.id')
            ->select('request_causes.*', 'division_names.division_name')
            ->orderBy('id', 'DESC')
            ->where('request_causes.created_at','=',$today)
            ->where('request_causes.status','=',0)
            ->get();

    return view('backEnd.layouts.causes.view_all_causes_request',compact('tody_all_request'));
}




  
  
   

 
}
