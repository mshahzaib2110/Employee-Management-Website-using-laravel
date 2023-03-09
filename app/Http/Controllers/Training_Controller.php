<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Employee;
use App\Models\Training;

use Illuminate\Http\Request;

class Training_Controller extends Controller
{
    public function schedule_training_view(){
        $emps=Employee::all();
            return view('schedule_training',['emps'=>$emps]);
        }
    
        public function train_schedule_form(Request $req){
    $validate = $req->validate([
                'emp_id' => 'required',
                 'topic' => 'required|max:100',
                 'start_date' => 'required',
                'end_date'=>'required',
                 'trainer'=>'required|max:30',
                ]);
                $training=new Training;
                $training->emp_id=$req->emp_id;
                $training->topic=$req->topic;
                $training->start_date=$req->start_date;
                $training->end_date=$req->end_date;
                if($training->end_date<$training->start_date){
                    return redirect('/admin_home')->with('myerror','Could not scheduled Training');
                }

                $training->trainer=$req->trainer;

                $training->save();
                return redirect('/admin_home')->with('pass2','Training Sceduled');
        }

        public function training_scheduled(){
            $emps=Training::join('employee','employee.id','training.emp_id')
            ->where('training.start_date','>=',date('Y-m-d'))->orderby('training.start_date')->get();
           
           return view('training_scheduled',['emps'=>$emps]);
        }

        public function emp_trainings($id){
               //only show Trainins sceduled for future
    $trainings=Training::where('emp_id',$id)->where('start_date','>=',date('Y-m-d'))->get();
    return view('emp_trainings',['trainings'=>$trainings]);
        }
}
