<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Employee;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Project_Controller extends Controller
{
    public function assign_project($deptid){
    
        $emps=Employee::where('id','!=',session('Emp_Id'))->where('dept_id',$deptid)->get();//retrieving all emps in that department except for the manager
        return view('assign_project',['emps'=>$emps]);
    }

    public function assign_logic(Request $req){
        $validate = $req->validate([
            'emp_id' => 'required',
          'p_id' => 'required',
          'title'=>'required|regex:/^[a-zA-Z ]+$/|max:30',
           'description'=>'required|max:200',
           'deadline'=>'required',
             ]);
        try{
            $pro=new Project;
            $pro->emp_id=$req->emp_id;
            $pro->p_id=$req->p_id;
            $pro->manager_id=session('Emp_Id');
            $pro->title=$req->title;
            $pro->description=$req->description;
            $pro->deadline=$req->deadline;
            $pro->status=0;
            $pro->save();
        }catch(\Illuminate\Database\QueryException $e){
            if($e->getCode() == "23000"){ //23000 is sql code for integrity constraint violation
            
                return redirect('/emp_home')->with('myerror','Couldnt Assigned Project.Please try again');
            }
              
           }

 return redirect('/emp_home')->with('pass2','Project Assigned');
        
    }

    public function assigned_byme($deptid){
        $emp=Project::join('employee','employee.id','project.emp_id')->where('employee.dept_id',$deptid)->where('project.status',0)->get();
        return view('projects_assigned',['emps'=>$emp]);
    }

    public function myprojects($id){
        $projects= Project::where('emp_id',$id)->where('project.status',0)->get(); //prjects not submitted
        return view('myprojects',['projects'=>$projects]);
    }

    public function my_pending_projects($id){
        $projects= Project::where('emp_id',$id)->where('project.status',0)->where('deadline','>=',date('Y-m-d'))
        ->get();
        return view('my_pending_projects',['projects'=>$projects]);
    }

    public function my_completed_projects($id){
        $projects= Project::where('emp_id',$id)->where('project.status',1)->get();
        return view('my_completed_projects',['projects'=>$projects]);

    }

    public function submit_project($pid){

        $user = DB::table('project')->where('emp_id',session('Emp_Id'))->where('p_id',$pid)->limit(1)->update(['status'=>1] );
        return redirect('/emp_home')->with('pass2','Project Submited');
        
    }


}
