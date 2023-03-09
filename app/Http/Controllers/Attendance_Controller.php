<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\Attendance;
use Illuminate\Http\Request;
use DateTime;
use Illuminate\Support\Facades\DB;
class Attendance_Controller extends Controller
{
    //Check in Employee
public function attendance($id){
    $status=Attendance::where('emp_id','=',$id)->get();
   if($status){
              foreach($status as $sta){
           $marked = new DateTime($sta->checkin);
          $date = $marked->format('Y-m-d');
            if($date==date('Y-m-d')){
              return redirect('/emp_home')->with('myerror','you have already checked in today');
              }
              }
              $emp=Employee::find($id);
              return view('emp_attendance',['emp'=>$emp]);
        }
        else{
       $emp=Employee::find($id);
       return view('emp_attendance',['emp'=>$emp]);
   }
   
   }
   
       //checkin employee logic after user press checkin
   public function mark_attendance(Request $req, $id){
   $flag=0;
           $time= date("Y-m-d H:i:s");
           $att=new Attendance;
           $att->emp_id=$id;
           $att->checkin=$time;
           $marked = new DateTime($att->checkin);
         $checkin_time = $marked->format('H:i:s');
         if($checkin_time>'09:00:00'){
           $att->late=1;
           $flag=1;
         }
         else{
           $att->late=0;
         }
           $att->save();
           if($flag==1){
               return redirect('emp_home')->with('marked','Atendance maked. you are late today');;
           }
          else{
               return redirect('emp_home')->with('marked','Atendance maked.');;
           }
       
   }

public function admin_check_attendance(){
    $emps=Attendance::join('employee','employee.id','attendance.emp_id')
    ->orderby('attendance.checkin','desc')->paginate(20);
     return view('admin_check_attendance',['emps'=>$emps]);

 }

 public function admin_filter_attendance( Request $req){
    $validate = $req->validate([
        'from' => 'required',
         'to' => 'required',
         'emp_id' => 'required|max:30|min:2',
        ]);
        $emp_fname=Employee::where('f_name','like','%'.$req->emp_id.'%')->get();
         if($emp_fname->count()==0){
            return redirect()->back()->with('myerror','No Employee found');
         }
        if($req->to < $req->from){
            return redirect()->back()->with('myerror','please enter correct range of dates');
        }

      $emps=Attendance::join('employee','employee.id','attendance.emp_id')->
      where('employee.f_name','like','%'.$req->emp_id.'%')->wherebetween('attendance.checkin',[$req->from.' 00:00":00',$req->to.' 23:59:59'])->paginate(20);
      return view('admin_filter_attendance',['emps'=>$emps]);
 }

 public function emp_check_attendance($id){
    $emps=Attendance::join('employee','employee.id','attendance.emp_id')->
    where('attendance.emp_id',$id) ->orderby('attendance.checkin','desc')->paginate(20);
    return view('emp_check_attendance',['emps'=>$emps]);
 }

 public function emp_filter_attendance($id,Request $req){
    $validate = $req->validate([
        'from' => 'required',
         'to' => 'required',
        ]);

        $emp=Attendance::where('emp_id',$id);
        if($emp->count()==0){
           return redirect()->back()->with('myerror','No Employee found');
        }
       if($req->to < $req->from){
           return redirect()->back()->with('myerror','please enter correct range of dates');
       }
     $emps=Attendance::join('employee','employee.id','attendance.emp_id')->
     where('attendance.emp_id',$id)->wherebetween('attendance.checkin',[$req->from.' 00:00":00',$req->to.' 23:59:59'])->paginate(20);
     $lates=Attendance::where('emp_id',$id)->where('late',1)
     ->wherebetween('attendance.checkin',[$req->from.' 00:00":00',$req->to.' 23:59:59'])->count();

     return view('emp_filter_attendance',['emps'=>$emps,'lates'=>$lates]);
 }
}
