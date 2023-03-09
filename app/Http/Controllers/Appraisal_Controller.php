<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\Attendance;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Appraisal_Controller extends Controller
{
    public function emp_app_view($id){
        $emps=Employee::where('id','!=',session('Emp_Id'))->where('dept_id',$id)->get();//retrieving all emps in that department except for the manager
        return view('appraisals',['emps'=>$emps]);    
    }

    public function emp_app(Request $req){
        $validate = $req->validate([
            'punctuality' => 'required|numeric|min:0|max:10',
          'performance' => 'required|numeric|min:0|max:10',
          'communication'=>'required|numeric|min:0|max:10',
           'comments' => 'required|max:100',   
             ]);
        
        DB::table('appraisals')->insert([
        'emp_id' => $req->emp_id,
        'punctuality' => $req->punctuality,
        'performance' => $req->performance,
        'communication' => $req->communication,
        'desc' => $req->comments
    ]);
    return redirect('/emp_home')->with('pass2','Appraisal added succesfully');
        
    } 

    public function check_all_reviews(){
        $emps = DB::table('appraisals')->get();
        return view('admin_reviews',['emps'=>$emps]);
      }

      public function delete_review($id){
        DB::table('appraisals')->where('ID',$id)->delete();
        return redirect('/admin_home')->with('pass2','Review Removed');
      }
}
