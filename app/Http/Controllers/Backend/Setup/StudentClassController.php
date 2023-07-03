<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentClass;

class StudentClassController extends Controller
{
    //
    public function ViewStudent(){
        $data['allData'] = StudentClass::all();
        return view('backend.setup.student_class.view_class', $data);
    }

    public function StudentClassAdd(){
       
        return view('backend.setup.student_class.add_class');
    }
    public function StudentClassStore(Request $request){
       
        $validateData = $request->validate([        
            'name' => 'required|unique:student_classes,name',
          ]);

        $data = new StudentClass();
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'alert-type' => 'success',
            'message' => 'Student Class Inserted Successfully!',
          );
      
          return redirect()->route('student.class.view')->with($notification);
    }

    public function StudentClassEdit($id){
        $editData = StudentClass::find($id);
       
        return view('backend.setup.student_class.edit_class', compact('editData'));
    }

    public function StudentClassUpdate(Request $request,$id){

        $data = StudentClass::find($id);
        $validateData = $request->validate([        
            'name' => 'required|unique:student_classes,name,'.$data->id
          ]);

       
       
        $data->name =$request->name;

        $data->save();
  
        $notification = array(
          'alert-type' => 'info',
          'message' => 'Student Class Updated Successfully!',
        );
    
        return redirect()->route('student.class.view')->with($notification);
       
        
    }


    public function StudentClassDelete($id){
        $user = StudentClass::find($id);
        $user->delete();

        $notification = array(
            'alert-type' => 'info',
            'message' => 'Student Class Deleted Successfully!',
          );
      
          return redirect()->route('student.class.view')->with($notification);
    }
}
