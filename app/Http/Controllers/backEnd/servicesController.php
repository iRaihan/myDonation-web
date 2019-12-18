<?php

namespace App\Http\Controllers\backEnd;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services_category;
use App\All_service;
use Image;
use Session;

class servicesController extends Controller
{
    public function services_page(){
    	return view('backEnd.layouts.services.services_home');
    }

    public function add_service(){
        $all_cat = Services_category::all();
        
    	return view('backEnd.layouts.services.add_services',compact('all_cat','all_event'));
    }
    public function add_services_category(){
    	return view ('backEnd.layouts.services.add_services_category');
    }
    public function insert_services_category(Request $request){
    	$request->validate([
         
        'service_category_name' => 'required|unique:services_categories,service_category_name',
        ]);


    	Services_category::insert([
        'service_category_name'=> $request->service_category_name,
    		]);
      
         return back();
    }
      public function view_services_category(){
    	    $all_category = Services_category::all();

        return view('backEnd.layouts.services.view_services_category',compact('all_category'));
        
    }

    public function add_services(Request $request){

    $request->validate([
         
        'service_title' => 'required',
        'service_discription' => 'required',
        'service_category' => 'required',
        'target' => 'required',
        'alart' => 'required',
        'status' => 'required',

        ]);

    $last_inserted_id=All_service::insertGetId([
        'service_title'=> $request->service_title,
        'service_discription'=> $request->service_discription,
        'service_category'=> $request->service_category,
        'target'=> $request->target,
        'alart'=> $request->alart,
        'status'=> $request->status,

            ]);
                if($request->hasFile('image')){

              $services_upload_profile = $request->image;

              $filename = $last_inserted_id.".".$services_upload_profile->getClientOriginalExtension();
              Image::make($services_upload_profile)->resize(300, 300)->save( base_path('public/images/all_servicess_image/'.$filename ));
               All_service::find($last_inserted_id)->update(['image'=>$filename]);
           }
            
        return redirect()->back()->with('message', '  Successfuly Add a Services');


    }

    public function view_all_services(){
     
     $all_services = DB::table('all_services')
            ->join('services_categories', 'all_services.service_category', '=', 'services_categories.id')
            ->select('all_services.*', 'services_categories.service_category_name')
            ->orderBy('id', 'DESC')
            ->get();
            
    return view('backEnd.layouts.services.view_all_services',compact('all_services'));
    }

    public function view_active_services(){

        $active = DB::table('all_services')->where('status','=',1)
        ->join('services_categories', 'all_services.service_category', '=', 'services_categories.id')
        ->select('all_services.*', 'services_categories.service_category_name')
        ->orderBy('id', 'DESC')
        ->get();
        return view('backEnd.layouts.services.view_active_services',compact('active'));
        
    }
     public function view_inactive_services(){
        $inactive = DB::table('all_services')->where('status','=',0)
        ->join('services_categories', 'all_services.service_category', '=', 'services_categories.id')
        ->select('all_services.*', 'services_categories.service_category_name')
        ->orderBy('id', 'DESC')
        ->get();
        return view('backEnd.layouts.services.view_inactive_services',compact('inactive'));
     }

     public function inactive_services(Request $request){

        DB::table('all_services')
            ->where('id', $request->hidden_id)
            ->update(['status' => $request->inactive,   
            ]);
            return back();

     }
     public function active_services(Request $request){

        DB::table('all_services')
            ->where('id', $request->hidden_id)
            ->update(['status' => $request->active,   
            ]);
            return back();

     }

     public function edit_services($id){
        $data=All_service::find($id);
         
            $a=$data->service_category;
              $datas = DB::table('all_services')
              ->where('service_category','=',$a)
            ->join('services_categories', 'all_services.service_category', '=', 'services_categories.id')
            ->select('all_services.*', 'services_categories.service_category_name')
            ->limit(1)
            ->get();
             $service_category = Services_category::all();
       
        return view('backEnd.layouts.services.edit_services',compact('data','datas','service_category'));
     }

     public function update_services(Request $request){

       if($request->hasFile('image')){
              
        if(All_service::find($request->edit_id)->image == 'default_photo.jpg')
        {
              $service_update_image = $request->image;

              $filename = $request->edit_id.".".$service_update_image->getClientOriginalExtension();
              Image::make($service_update_image)->resize(300, 300)->save(base_path('public/images/all_servicess_image/'.$filename ));
               All_service::find($request->edit_id)->update(['image'=>$filename]);
               }


        else
        {
            $delete_image = All_service::find($request->edit_id)->image;
            unlink(base_path('public/images/all_servicess_image/'.$delete_image ));
            
            $service_update_image = $request->image;

              $filename = $request->edit_id.".".$service_update_image->getClientOriginalExtension();
              Image::make($service_update_image)->resize(300, 300)->save(base_path('public/images/all_servicess_image/'.$filename ));
               All_service::find($request->edit_id)->update(['image'=>$filename]);
           }
           return back();
        }

        All_service::find($request->edit_id)->update([   
        'service_title'=> $request->service_title,
        'service_discription'=> $request->service_discription,
        'service_category'=> $request->service_category,
        'target'=> $request->target,
        'alart'=> $request->alart,
        'status'=> $request->status,

        ]);
         return back();
     }

     public function delete_services(Request $request){
     
        if(All_service::find($request->id)->image == 'default_photo.jpg'){
          DB::table('all_services')->where('id',$request->id)->delete();

        }

        else{
          $delete_image = All_service::find($request->id)->image;
            unlink(base_path('public/images/all_servicess_image/'.$delete_image ));

            DB::table('all_services')->where('id',$request->id)->delete();
            

        }
        return back();
      
     }

}
