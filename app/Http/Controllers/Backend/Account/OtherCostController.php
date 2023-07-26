<?php

namespace App\Http\Controllers\Backend\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\AccountOtherCost;

class OtherCostController extends Controller
{
    public function OtherCostView(){
        $data['allData']= AccountOtherCost::orderBy('id','desc')->get();
        return view('backend.account.other_cost.other_cost_view',$data);
    }//End method

    public function OtherCostAdd(){
        return view('backend.account.other_cost.other_cost_add');
    }//End Method 

    public function OtherCostStore(Request $request){
        $cost = new AccountOtherCost();
        $cost->date = date('Y-m-d',strtotime($request->date));
        $cost->amount = $request->amount;
        if($request->file('image'))
        {
            $file = $request->file('image');         
            $filename = date('YmdHi').$file->getClientOriginalName();
            $request->image->move(public_path('upload/cost_images'),$filename); 
            $cost['image'] = $filename;
        }

        $cost->description = $request->description;
        $cost->save();

        $notification = array(
            'alert-type' => 'success',
            'message' => 'Other Cost Inserted Successfully!',
          );
      
         return redirect()->route('other.cost.view')->with($notification);
 

    }//End Method

    public function OtherCostEdit($id){
        $data['editData']= AccountOtherCost::find($id);
        return view('backend.account.other_cost.other_cost_edit',$data);     
    }//End Merhod

    public function OtherCostUpdate(Request $request,$id){
        $cost = AccountOtherCost::find($id);
        $cost->date = date('Y-m-d',strtotime($request->date));
        $cost->amount = $request->amount;
        if($request->file('image'))
        {
            $file = $request->file('image');         
            @unlink(public_path('upload/cost_images/'.$cost->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $request->image->move(public_path('upload/cost_images'),$filename); 
            $cost['image'] = $filename;
        }

        $cost->description = $request->description;
        $cost->save();

        $notification = array(
            'alert-type' => 'success',
            'message' => 'Other Cost Upadated Successfully!',
          );
      
         return redirect()->route('other.cost.view')->with($notification);
 

    }//End Method

}
