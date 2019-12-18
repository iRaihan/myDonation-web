<?php

namespace App\Http\Controllers\backEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Fund_type;
use App\Bank_name;
use Image;
use Session;
use Carbon\Carbon;

class fundController extends Controller
{
    public function add_fund_form(){

    	return view('backEnd.layouts.fund.add_fund_type');
    }

    public function insert_fund_type(Request $request){

   $request->validate([
         
        'fund_type_name' => 'required|unique:fund_types,fund_type_name',
        ]);


    	$data =Fund_type::insert([
        'fund_type_name'=> $request->fund_type_name,
    		]);
             
             	
            return redirect()->back()->with('message', '  Successfuly Add a Fund Type');  
             
    }

    public function fund_manage(){
    
       $all_fund=Fund_type::all();
    	return view('backEnd.layouts.fund.manage_fund_type',compact('all_fund'));
    }

    public function add_bank_patner(){

        return view('backEnd.layouts.bank.add_bank_patner');
    }

    public function insert_bank_patner(Request $request){
 $request->validate([
     'bank_patner_name' => 'required|unique:bank_names,bank_patner_name',
     'bank_patner_account' => 'required',
        ]);


        $last_inserted_id=Bank_name::insertGetId([
        'bank_patner_name'=> $request->bank_patner_name,
        'bank_patner_account'=> $request->bank_patner_account,
            ]);

        if($request->hasFile('image')){

              $bank_logo_image = $request->image;

              $filename = $last_inserted_id.".".$bank_logo_image->getClientOriginalExtension();
              Image::make($bank_logo_image)->resize(300, 300)->save( base_path('public/images/bank_logo/'.$filename ));
               Bank_name::find($last_inserted_id)->update(['image'=>$filename]);
           }
           return redirect()->back()->with('message', '  Successfuly Add a Bank patner');  
            
    }


    public function manage_bank_patner(){
       $all_bank_patner=Bank_name::all();
        return view('backEnd.layouts.bank.manage_bank_patner',compact('all_bank_patner'));
    }
}
