<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Employee;
use App\Models\Department;
use App\Models\Leaves;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Leave_Controller extends Controller
{
   public function apply_leave(){
      return view('leave_form');

   }
   public function apply_leave_logic(Request $req){

    $validate = $req->validate([
        'reason' => 'required|max:30',
         'detail' => 'required|max:100',
         'from_date'=>'required',
         'to_date'=>'required',
        ]);

       $leave=new Leaves;
       $leave->emp_id=session('Emp_Id');
       $leave->reason=$req->reason;
       $leave->detail=$req->detail;
       $leave->from_date=$req->from_date;
       $leave->to_date=$req->to_date;
       $leave->status=0;
       $leave->save();
       return redirect('/emp_home')->with('pass2','Applied for leave successfully');
   }

   public function my_leaves($id){
     $emp=Leaves::where('emp_id',$id)->get();
     return view('my_leaves',['emps'=>$emp]);
   }

  
}
