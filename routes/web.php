<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\AdminController;
use App\Http\Controllers\Appraisal_Controller;
use App\Http\Controllers\Emp_Controller;
use App\Http\Controllers\Project_Controller;
use App\Http\Controllers\Leave_Controller;
use App\Http\Controllers\Meeting_Controller;
use App\Http\Controllers\Training_Controller;
use App\Http\Controllers\Attendance_Controller;


Route::get('/admin_login', [AdminController::class,'admin_login']);
Route::post('/admin_login', [AdminController::class,'login']);
//for admin loggedin
Route::middleware(['admin_auth'])->group(function () {
    Route::get('/admin_home', [AdminController::class,'home'])->name('admin_home');
    Route::get('/updatepass', [AdminController::class,'updatepass']);
    Route::get('/admin_logout', [AdminController::class,'admin_logout'])->name('adminlogout');
    Route::get('/admin_addemp', [AdminController::class,'add'])->name('add');
    Route::post('/admin_addemp', [AdminController::class,'store_new_emp']);
    Route::get('edit_emp/{id}', [AdminController::class,'edit_emp'])->name('edit_emp');
    Route::get('delete_emp/{id}', [AdminController::class,'delete_emp'])->name('delete_emp');
    Route::put('/edit_emp_form/{id}', [AdminController::class,'edit_emp_form'])->name('edit_emp_form');
    Route::get('/departs', [AdminController::class,'departs'])->name('departs');
    Route::get('/edit_dept/{id}', [AdminController::class,'edit_dept'])->name('edit_dept');
    Route::put('/edit_dept_form/{id}', [AdminController::class,'edit_dept_form'])->name('edit_dept_form');
    Route::get('/add_depart', [AdminController::class,'add_depart'])->name('add_depart');
    Route::post('/add_depart', [AdminController::class,'add_dept_form']);
    Route::get('/delete_dept/{id}', [AdminController::class,'delete_dept'])->name('delete_dept');
    Route::get('/approve_leaves', [AdminController::class,'approve_leaves'])->name('approve_leaves');
    Route::put('/approve_leave/{l_id}', [AdminController::class,'approve_leave']);
    Route::get('/schedule_view', [Meeting_Controller::class,'schedule_view'])->name('schedule_view');
    Route::post('/meet_schedule_form', [Meeting_Controller::class,'meet_schedule_form'])->name('meet_schedule_form');
    Route::get('/meetings_scheduled', [Meeting_Controller::class,'meetings_scheduled'])->name('meetings_scheduled');
    Route::get('/schedule_training_view', [Training_Controller::class,'schedule_training_view'])->name('schedule_training_view');
    Route::post('/train_schedule_form', [Training_Controller::class,'train_schedule_form'])->name('train_schedule_form');
    Route::get('/training_scheduled', [Training_Controller::class,'training_scheduled'])->name('training_scheduled');
    Route::get('/admin_check_attendance', [Attendance_Controller::class,'admin_check_attendance'])->name('admin_check_attendance');
    Route::post('/admin_filter_attendance', [Attendance_Controller::class,'admin_filter_attendance'])->name('admin_filter_attendance');
    Route::get('/add_new_admin', [AdminController::class,'add_new_admin'])->name('add_new_admin');
    Route::post('/new_admin_form', [AdminController::class,'new_admin_form'])->name('new_admin_form');
    Route::get('/admin_check_salaries', [AdminController::class,'admin_check_salaries'])->name('admin_check_salaries');
    Route::post('/filter_sal_dept', [AdminController::class,'filter_sal_dept'])->name('filter_sal_dept');
    Route::post('/filter_emp_by_dept', [AdminController::class,'filter_emp_by_dept'])->name('filter_emp_by_dept');

    Route::get('/check_reviews',[Appraisal_Controller::class,'check_all_reviews']);
    Route::get('delete_review/{id}', [Appraisal_Controller::class,'delete_review']);
   

    
   

});

//logedin emloyees
Route::middleware(['employee_auth'])->group(function () {
    Route::get('/emp_home', [Emp_Controller::class,'emp_home'])->name('emp_home');
    Route::get('edit/{id}', [Emp_Controller::class,'edit'])->name('edit');
    Route::put('/edit_form/{id}', [Emp_Controller::class,'updateform'])->name('updateput');
    Route::get('/updatepass/{id}', [Emp_Controller::class,'updatepass'])->name('updatepass');
    Route::put('/edit_pass/{id}', [Emp_Controller::class,'updatedpass'])->name('pass_update');
    Route::get('/attendance/{id}', [Attendance_Controller::class,'attendance'])->name('attendance');
    Route::post('/mark_attendance/{id}', [Attendance_Controller::class,'mark_attendance'])->name('mark_attendance');
    Route::get('/emp_logout', [Emp_Controller::class,'emp_logout'])->name('emp_logout');
    Route::get('/assign_project/{deptid}', [Project_Controller::class,'assign_project'])->name('assign_project');
    Route::post('/assign_project', [Project_Controller::class,'assign_logic']);
    Route::get('/assigned_byme/{deptid}', [Project_Controller::class,'assigned_byme'])->name('assigned_byme');
    Route::get('/myprojects/{id}', [Project_Controller::class,'myprojects'])->name('myprojects');
    // Route::put('/submit_project/{pid}', [Project_Controller::class,'submit_project'])->name('submit_project');
    Route::get('/apply_leave', [Leave_Controller::class,'apply_leave'])->name('apply_leave');
    Route::post('/apply_leave', [Leave_Controller::class,'apply_leave_logic']);
    Route::get('/my_leaves/{id}', [Leave_Controller::class,'my_leaves'])->name('my_leaves');
    Route::get('/emp_meetings/{id}', [Meeting_Controller::class,'emp_meetings'])->name('emp_meetings');
    Route::get('/emp_trainings/{id}', [Training_Controller::class,'emp_trainings'])->name('emp_trainings');
    Route::get('/emp_check_attendance/{id}', [Attendance_Controller::class,'emp_check_attendance'])->name('emp_check_attendance');
    Route::post('/emp_filter_attendance/{id}', [Attendance_Controller::class,'emp_filter_attendance']);
    Route::get('/emp_appraisals/{id}', [Appraisal_Controller::class,'emp_app_view'])->name('emp_app_view');
    Route::post('/emp_appraisals', [Appraisal_Controller::class,'emp_app']);
    Route::get('/my_pending_projects/{id}', [Project_Controller::class,'my_pending_projects'])->name('my_pending_projects');
    Route::put('/submit_project/{pid}', [Project_Controller::class,'submit_project'])->name('submit_project');
    Route::get('/my_completed_projects/{id}', [Project_Controller::class,'my_completed_projects'])->name('my_completed_projects');

     
    

    
  
} );
Route::get('/', [Emp_Controller::class,'emp_welcome'])->name('land');
Route::get('/emp_login', [Emp_Controller::class,'emp_login'])->name('emp_login');
Route::post('/emp_login', [Emp_Controller::class,'emplogin']);
//  Route::get('/', [Emp_Controller::class,'emp_welcome']);
//Route::post('/', [Emp_Controller::class,'emplogin']);


 //testing
Route::get('/list', [AdminController::class,'list']);

// Route::get('/test',[Leave_Controller::class,'test']);



