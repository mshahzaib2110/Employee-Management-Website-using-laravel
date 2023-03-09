<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Attendance;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use DateTime;

//use Illuminate\View\Middleware\ErrorBinder;
//use Illuminate\Validation\Validator;


class Emp_Controller extends Controller
{
    // public function emp_welcome(){
    //     return view('emp_login');
    // }
     public function emp_welcome(){
        return view('emp_welcome');
     }

     public function emp_login(){
        return view('emp_login');
     }

    public function emp_home(){
        return view('emp_home');
    }

    public function emplogin(request $req){
        
         $validate = $req->validate([
            'email' => 'required',
          'password' => 'required',
             ]);
        
             // ->get(['employee.id','employee.f_name','employee.l_name','employee.city',
             $res = Employee::where(['email' => $req->email])->first();
             if ($res) {

                 if (hash::check($req->password, $res->password)) {
                     $req->session()->put('Emp_Login', True);
                     $req->session()->put('Emp_Id', $res->id);
                     $req->session()->put('Emp_Name', $res->f_name);
                     $check_man=Employee::join('department','department.manager_id','=','employee.id')
                     ->where('department.manager_id',$res->id)->first();
                     
                     if($check_man){
                        //the person is manager
                        $req->session()->put('Manager', True);
                        $req->session()->put('DeptId', $check_man->dept_id);
                     }
                      return redirect()->route('emp_home');
                 } 
                 else {
                     return redirect('/emp_login')->with('myerror','Invalid login details');
                 }
             }
             else{
                return redirect('/emp_login')->with('myerror','Invalid login details');
             }
}

public function edit($id){
    $emp=Employee::find($id);
    return view('edit_form',['emp'=>$emp]);
}
//updaing profile
public function updateform(Request $req,$id){
    $validate = $req->validate([
        'f_name' => 'required|max:30',
         'l_name' => 'required|max:30',
         'city' => 'required|max:30',
         'address'=>'required|max:50',
        'age'=>'required|numeric|min:18',
        ]);
   $updated=Employee::find($id);
   $updated->f_name=$req->f_name;
   $updated->l_name=$req->l_name;
   $updated->city=$req->city;
   $updated->address=$req->address;
   $updated->age=$req->age;
   $updated->save();
   return redirect('emp_home');

}


public function updatepass($id){
$emp=Employee::find($id);
return view('emp_updatepass',['emp'=>$emp]);
}

//update password logic
public function updatedpass(Request $req,$id){
    $validate = $req->validate([
        'currentpass' => 'required|max:30',
         'updatedpass' => 'required|max:30'
        ]);
   $updated=Employee::find($id);
   if (hash::check($req->currentpass, $updated->password) )
   {
    $pass=Hash::make($req->updatedpass);
    $updated->password=$pass;
    $updated->save();
    session()->flush();
    return redirect('/')->with('pass2','Password Updated. Please login Again');
   // return redirect('emp_home')->with('pass','Password Updated');
   }
   else{
    return redirect(url('/updatepass',session('Emp_Id')))->with('pass','Current password not matched');
   }
}

//Check in Employee
// public function attendance($id){
//  $status=Attendance::where('emp_id','=',$id)->get();
// if($status){
//            foreach($status as $sta){
//         $marked = new DateTime($sta->checkin);
//        $date = $marked->format('Y-m-d');
//          if($date==date('Y-m-d')){
//            return redirect('/emp_home')->with('myerror','you have already checked in today');
//            }
//            }
//            $emp=Employee::find($id);
//            return view('emp_attendance',['emp'=>$emp]);
//      }
//      else{
//     $emp=Employee::find($id);
//     return view('emp_attendance',['emp'=>$emp]);
// }

// }

    //checkin employee logic ar user press checkin
// public function mark_attendance(Request $req, $id){
// $flag=0;
//         $time= date("Y-m-d H:i:s");
//         $att=new Attendance;
//         $att->emp_id=$id;
//         $att->checkin=$time;
//         $marked = new DateTime($att->checkin);
//       $checkin_time = $marked->format('H:i:s');
//       if($checkin_time>'08:00:00'){
//         $att->late=1;
//         $flag=1;
//       }
//       else{
//         $att->late=0;
//       }
//         $att->save();
//         if($flag==1){
//             return redirect('emp_home')->with('marked','Atendance maked. you are late today');;
//         }
//        else{
//             return redirect('emp_home')->with('marked','Atendance maked.');;
//         }
    

// }

//emp logout
 public function emp_logout(){
  session()->flush();
    return redirect('/');
}


}
