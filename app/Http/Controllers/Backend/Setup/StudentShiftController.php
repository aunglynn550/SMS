<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentShift;

class StudentShiftController extends Controller
{
    //
    public function ViewShift(){
        $data['allData'] = StudentShift::all();
        return view('backend.setup.shift.view_shift', $data);
    }
    public function StudentShiftAdd(){
        return view('backend.setup.shift.add_shift');
    }

    public function StudentShiftStore(Request $request){
       
        $validateData = $request->validate([        
            'name' => 'required|unique:student_shifts,name',
          ]);

        $data = new StudentShift();
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'alert-type' => 'success',
            'message' => 'Student Shift Inserted Successfully!',
          );
      
          return redirect()->route('student.shift.view')->with($notification);
    }
    public function StudentShiftEdit($id){
        $editData = StudentShift::find($id);
       
        return view('backend.setup.shift.edit_shift', compact('editData'));
    }

    public function StudentShiftUpdate(Request $request,$id){

        $data = StudentShift::find($id);
        $validateData = $request->validate([        
            'name' => 'required|unique:student_shifts,name,'.$data->id
          ]);

       
       
        $data->name =$request->name;

        $data->save();
  
        $notification = array(
          'alert-type' => 'info',
          'message' => 'Student Shift Updated Successfully!',
        );
    
        return redirect()->route('student.shift.view')->with($notification);
       
        
    }

    public function StudentShiftDelete($id){
        $user = StudentShift::find($id);
        $user->delete();

        $notification = array(
            'alert-type' => 'info',
            'message' => 'Student Shift Deleted Successfully!',
          );
      
          return redirect()->route('student.shift.view')->with($notification);
    }
}
