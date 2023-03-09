<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Employee;
use App\Models\Department;
use App\Models\Meeting;


// use Psy\TabCompletion\Matcher\FunctionsMatcher;

class Meeting_Controller extends Controller
{
    public function schedule_view(){
        $emps=Employee::all();
        return view('schedule_meeting',['emps'=>$emps]);
    }

    public function meet_schedule_form(Request $req){
        $validate = $req->validate([
            'emp_id' => 'required',
             'meeting_day' => 'required',
             'start_time' => 'required',
            'end_time'=>'required',
             'meeting_with'=>'required|max:30',
             'agenda' =>'required|max:100',
            ]);
            $meeting=new Meeting;
            $meeting->emp_id=$req->emp_id;
            $meeting->meeting_day=$req->meeting_day;
            $meeting->start_time=$req->start_time;
            $meeting->end_time=$req->end_time;
            if($meeting->end_time<$meeting->start_time){
                return redirect('/admin_home')->with('myerror','Could not scheduled Meeting');
            }
            $meeting->meeting_with=$req->meeting_with;
            $meeting->agenda=$req->agenda;
            $meeting->save();
            return redirect('/admin_home')->with('pass2','Meeting Sceduled');

    }

    public function meetings_scheduled(){
        //only show meetins sceduled in future and not the nes already done
         $emps=Meeting::join('employee','employee.id','meetings.emp_id')
         ->where('meetings.meeting_day','>=',date('Y-m-d'))->orderby('meetings.meeting_day')->get();
        return view('meetings_scheduled',['emps'=>$emps]);
    }

    public Function emp_meetings($id){
        //only show meetins sceduled for future
    $meetings=Meeting::where('emp_id',$id)->where('meeting_day','>=',date('Y-m-d'))->get();
    return view('emp_meetings',['meetings'=>$meetings]);
    }



    
}
