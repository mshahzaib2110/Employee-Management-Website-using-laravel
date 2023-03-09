<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Employee;
use App\Models\Department;
use App\Models\Leaves;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Empty_;

class AdminController extends Controller
{
    public function admin_login()
    {
        return view('adminlogin');
    }

    public function login(Request $req)
    {
        //  $validate = $req->validate([
        //    'email' => 'required|max:30',
        //    'password' => 'required',
        // ]);
        $res = Admin::where(['email' => $req->email])->first();
        if ($res) {
            if (hash::check($req->password, $res->password)) {
                $req->session()->put('Admin_Login', True);
                $req->session()->put('Admin_Id', $res->admin_id);
                return redirect('admin_home');
            } else {
                return redirect('admin_login');
            }
        } else {
            // return redirect()->back()->with('error', 'wrong details');
            return redirect('admin_login');
        }
    }

    public function home()
    {
       // $emps=Employee::paginate(4);
        $emps=Employee::join('department','department.dept_id','=','employee.dept_id')->orderby('id','asc')->paginate(3);
        // ->get(['employee.id','employee.f_name','employee.l_name','employee.city',
        //'department.dept_id','department.dept_name','employee.email'])
     
        return view('admin_home',['emps'=>$emps]);
    }


    public function add(){
      $depts= Department::all();
 
        return view('admin_addemp',['depts'=>$depts,]);
    }

   public function store_new_emp(Request $req){
    
    // return $req->input();
      $validate = $req->validate([
       'f_name' => 'required|max:30',
        'l_name' => 'required|max:30',
        'city' => 'required|max:30',
       'age'=>'required|numeric|min:18',
        'email'=>'required|max:30|unique:employee',
        'password' =>'required|max:20',
        'dept_id'=> 'required|numeric',
        'hiredate'=>'required',
        'salary'=>'required|numeric|min:0'
       ]);
         $depart= Department::where('dept_id',$req->dept_id)->first();
        
    
        $emp=new Employee;
        $emp->f_name=$req->f_name;
        $emp->l_name=$req->l_name;
        $emp->city=$req->city;
        $emp->age=$req->age;
        $emp->email=$req->email;
        $emp->dept_id=$req->dept_id;

        
        $emp->hiredate=$req->hiredate;
        $emp->salary=$req->salary;
        $pass=Hash::make($req->password);
        $emp->password=$pass;
         $emp->save();
        return redirect('admin_home');
   }



    public function admin_logout()
    {
        //  session()->forget('Admin_login');
      //  session()->forget('Admin_id');
        session()->flush();
        return redirect('admin_login');
    }


  //go to edit emploee page
  public function edit_emp($id){
    $emp=Employee::find($id);
    $depts= Department::all();
    return view('admin_edit_emp',['emp'=>$emp,'depts'=>$depts]);
  }

//edit empoloyee form submit
  public function edit_emp_form(Request $req,$id){
    $validate = $req->validate([
        'dept_id' => 'required',
         'salary' => 'required|numeric|min:1'
        ]);
     
        $manager= Department::where('dept_id',$req->dept_id)->first();
        $update=Employee::find($id);
        $update->dept_id=$req->dept_id;
    
        $update->salary=$req->salary;
       
        $update->save();
        return redirect('/admin_home')->with('pass2','Record Updated');
  }

  public function delete_emp($id){
    $emp=Employee::where('id',$id)->delete();
    return redirect('/admin_home')->with('pass2','Record Deleted');
  }

    // public function list(){
        
    //     $managers=Employee::join('department','department.manager_id','=','employee.id')->get();

    //     return view('list_managers',['managers'=>$managers]);
    // }

    public function departs(){
       $dept=Department::leftjoin('employee','employee.id','department.manager_id')
       ->get(['employee.f_name','department.dept_id','department.dept_name','employee.l_name']);
      
        return view('departs',['dept'=>$dept]);
         
    }


    public function edit_dept($id){
      $dept=Department::find($id);
       $emps=Employee::all(); //changed here
      if($dept){
        return view('edit_dept_form',['dept'=>$dept,'emps'=>$emps]);
      }
    }

    public function edit_dept_form($id,Request $req){
      $validate = $req->validate([
        'dept_name' => 'required|max:30',
        'manager_id'=>'unique:department',
        ]);
   
        $dept=Department::find($id);
        $dept->dept_name=$req->dept_name;
       $dept->manager_id=$req->manager_id; 
        $dept->save();
      return redirect('/admin_home')->with('pass2','Record updated');

    }
    public function add_depart(){
     $emps=Employee::all();
     
      return view('depart_add',['emps'=>$emps]);
    }
   public function add_dept_form(Request $req){
    $validate = $req->validate([
      'dept_name' => 'required|max:30|unique:department|regex:/^[a-zA-Z ]+$/',
      'manager_id'=>'unique:department',
      ]);

    $new=new Department;
    $new->dept_name=$req->dept_name;
    $new->manager_id=$req->manager_id;
    $new->save();

    return redirect('/admin_home')->with('pass2','Department Added');
   }

   public function delete_dept($id){
    $dept=Department::where('dept_id',$id)->delete();
    return redirect('/admin_home')->with('pass2','Department deleted');
   }
 
   public function approve_leaves(){

   $emps=Employee::join('leaves','leaves.emp_id','employee.id')->where('leaves.status',0)->orderby('leaves.from_date')->get();
 return view('admin_approve_leaves',['emps'=>$emps]);
   }
   public function approve_leave($l_id){
    $user = DB::table('leaves')->where('l_id',$l_id)->limit(1)->update(['status'=>1] );
    return redirect('/admin_home')->with('pass2','Leave Approved');

   }


   public function add_new_admin(){
    return view('add_new_admin');
   }

   public function new_admin_form(Request $req){
    $validate = $req->validate([
      'name' => 'required|max:30',
      'email'=>'required|max:30',
      'password'=>'required|max:30',
      ]);
  $admin=new Admin;
  $admin->name=$req->name;
  $admin->email=$req->email;
  $hashpass=Hash::make($req->password);
  $admin->password=$hashpass;
  $admin->save();
  return redirect('/admin_home')->with('pass2','New admin Added');
   }



   public function admin_check_salaries(){
    $depts=Department::all();
    $emps=Employee::join('department','department.dept_id','employee.dept_id')->paginate(10);
    return view('admin_check_salaries',['emps'=>$emps,'depts'=>$depts]);
   }

   public function filter_sal_dept(Request $req){
    $validate = $req->validate([
      'dept_id' => 'required',
      ]);
      $emps=Employee::join('department','department.dept_id','employee.dept_id')
      ->where('employee.dept_id',$req->dept_id)->get();
      return view('admin_filter_sal',['emps'=>$emps]);

   }

   public function filter_emp_by_dept(Request $req){
    $validate = $req->validate([
      'dept_id' => 'required|numeric',
      ]);
      $check=Department::where('dept_id',$req->dept_id)->first();
      if(!$check){
        return redirect()->back()->with('myerror','Pease enter correct Department ID');
      }
      $emps=DB::table('employee')
      ->select('employee.dept_id','department.dept_name', DB::raw('count(*) as total'))->join('department','department.dept_id','employee.dept_id')
      ->groupBy(['employee.dept_id','department.dept_name'])->having('employee.dept_id',$req->dept_id)->first();
      if(!$emps){
        return redirect()->back()->with('myerror','No Employees are currently in this Department');
      }
      return view('filter_emp_by_dept',['emps'=>$emps]);
     }
   

  
   
    // public function updatepass(){
    //  $r=Admin::find(1);
    //  $r->password=Hash::make('12345');
    //  $r->save();
    // }

    

}
