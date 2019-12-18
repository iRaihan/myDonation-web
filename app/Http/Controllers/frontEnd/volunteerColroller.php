<?php

namespace App\Http\Controllers\frontEnd;

use Auth;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Toastr;
use App\Voluenteer_reg;
use App\Blood_post;
use App\Request_cause;
use Image;
use Session;
use Carbon\Carbon;



class volunteerColroller extends Controller
{
   
    public function add_volunteer(Request $request){

        $this->validate($request, [
          'phone' => 'required',
        'email' => 'required|email|unique:voluenteer_regs,email',
        'password' => 'min:8',
        'password_confirmation' => 'required_with:password|same:password|min:8'
        ]);


    	$last_inserted_id=Voluenteer_reg::insertGetId([
        'first_name'=> $request->first_name,
        'last_name'=> $request->last_name,
        'email'=> $request->email,
        'phone'=> $request->phone,
        'nid_bid'=> $request->nid_bid,
        'profession'=> $request->profession,
        'organization'=> $request->organization,
        'blood'=> $request->blood,
        'present_address'=> $request->present_address,
        'parmanent_address'=> $request->parmanent_address,
        'district'=> $request->district,
        'zip_code'=> $request->zip_code,
        'password'=> $request->password,
        'created_at'=>Carbon::now(),
    		]);

            if($request->hasFile('image')){

              $volunteer_upload_profile = $request->image;

              $filename = $last_inserted_id.".".$volunteer_upload_profile->getClientOriginalExtension();
              Image::make($volunteer_upload_profile)->resize(300, 300)->save( base_path('public/images/volunteer_profile_images/'.$filename ));
               Voluenteer_reg::find($last_inserted_id)->update(['image'=>$filename]);
           }
            
    }


    public function volunteer_account_page(Request $request){
     
      $this->validate($request,[
        'email'=>'required',
        'password'=>'required',
      ]);


     $valid_volunteer =Voluenteer_reg::where('email',$request->email)
     ->where('password',$request->password)->first();

        if($valid_volunteer){
        $Id = $valid_volunteer->id;
        Session::put('volunteer_id',$Id);
        
        return view('frontEnd.layouts.account.acc_master');
         
        }
        else{
          return redirect()->back()->with('message','Invalide Email or Password !');
        } 
        
}


public function logout(){
 Session()->flush();
    return redirect('/');

}
 public function volunteer_agree(Request $request){
  
  return $request->all();
 }

 public function donate_blood(){
  
  $date = date("Y-m-d");
  


$all_blood = DB::table('blood_posts')
               ->where('last_date','>=',$date)
               ->orderBy('id', 'DESC')
                ->get();


   return view('frontEnd.layouts.volunteer.volunteer_blood_index',compact('all_blood'));
 
}
 public function search_blood(Request $request){
  $volunteer_blood =Voluenteer_reg::all()->where('blood',$request->blood_group);
 
   return view('frontEnd.layouts.volunteer.volunteer_blood_list',compact('volunteer_blood'));
 }

 public function post_blood(){
   return view('frontEnd.layouts.volunteer.volunteer_post_blood');
 }

 public function insert_blood_post(Request $request){
    

   $this->validate($request, [

          'blood_group' => 'required',
          'name' => 'required',
          'phone' => 'required',
          'location' => 'required',
          'last_date' => 'required',
          'unit' => 'required',
          
     
        ]);

    
    Blood_post::insert([
       
       'blood_group'=> $request->blood_group,
       'volunteer_id'=> $request->volunteer_id,
       'name'=> $request->name,
       'phone'=> $request->phone,
       'location'=> $request->location,
       'last_date'=> $request->last_date,
       'unit'=> $request->unit,
       'message'=> $request->message,
       'created_at'=>Carbon::now(),
    ]);

 }

 public function post_causes(){

  return view('frontEnd.layouts.volunteer.post_causes');
 }

 public function insert_post_causes(Request $request){
   

  $last_inserted_id = Request_cause::insertGetId([

          'title'=>$request->title,
          'volunteer_id'=>$request->volunteer_id,
          'discription'=>$request->discription,
          'division'=>$request->division,
          'location'=>$request->location,
          'status'=>$request->status,
          'created_at'=>Carbon::today(),

   ]);

  if($request->hasFile('image')){

              $request_upload_profile = $request->image;

              $filename = $last_inserted_id.".".$request_upload_profile->getClientOriginalExtension();
              Image::make($request_upload_profile)->resize(300, 300)->save( base_path('public/images/all_causes/request_causes_image/'.$filename ));
               Request_cause::find($last_inserted_id)->update(['image'=>$filename]);
           }

          return redirect()->back()->with('message', '  Successfuly Post a Causes');
 }

 public function volunteer_view_causes(){

  $active_id=Session::get('volunteer_id');
   $active_vol_id=Request_cause::all()->where('volunteer_id','=',$active_id);


  return view('frontEnd.layouts.volunteer.causes.view_causes',compact('active_vol_id'));
 }

}

