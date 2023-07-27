<?php

namespace App\Http\Controllers\Backend\Report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\EmployeeAttendance;
use App\Models\User;

use niklasravnsborg\LaravelPdf\Facades\Pdf as PDF;

class AttendanceReportController extends Controller
{
    public function AttendanceReportView(){
        $data['employees'] = User::where('usertype','Employee')->get();
        return view('backend.report.attend_report.attend_report_view',$data);

    }//End method
    public function AttendanceReportGet(Request $request){

        $employee_id = $request->employee_id;

        if($employee_id != ''){
            $where[] = ['employee_id',$employee_id];
        }

        $date=date('Y-m',strtotime($request->date));

        if($date){
            $where[] = ['date','like',$date.'%'];
        }
        

        $singleAttendance = EmployeeAttendance::with(['user'])->where($where)->get();

        if($singleAttendance == true){
            $data['allData'] = EmployeeAttendance::with(['user'])->where($where)->get();
           
            $data['absents'] =  EmployeeAttendance::with(['user'])->where($where)
            ->where('attend_status','Absent')->get()->count();

            $data['leaves'] =  EmployeeAttendance::with(['user'])->where($where)
            ->where('attend_status','Leave')->get()->count();

            $data['month'] = date('m-Y',strtotime($request->date));

            $pdf = PDF::loadView('backend.report.attend_report.attend_report_pdf', $data);
            $pdf->setProtection(['copy','print'], '', 'pass');
	        return $pdf->stream('document.pdf');


        }
        else{
            $notification = array(
                'alert-type' => 'error',
                'message' => 'Sorry! This Criteria Does not Match:)',
              );
          
             return redirect()->back()->with($notification);
        }


    }//ENd method


}
