@extends('master')
@section("content")

<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Admin Panel</h3>
        </div>
      
        <ul class="list-unstyled components">
            <h3>Welcome, {{session('Admin_Id')}} </h3>
            <li class="active">
                <a href="{{route('admin_home')}}">Home</a>
            </li>
    
            <li>
                <a href="{{route('add')}}">Add employee</a>
            </li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Departments</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="{{route('departs')}}">All Departments</a>
                    </li>
                    <li>
                        <a href="{{route('add_depart')}}">Add department</a>
                    </li>
                   
                </ul>
            </li>
            <li>
                <a href="/admin_check_attendance">Employee Attendance</a>
            </li>
            <li>
                <a href="/approve_leaves">Approve Leaves</a>
            </li>
            <li>
                <a href="/check_reviews">Check Employee Reviews</a>
            </li>

            <li>
                <a href="#page_meeting" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Meetings</a>
                <ul class="collapse list-unstyled" id="page_meeting">
                    <li>
                        <a href="/schedule_view">Schedule Meeting</a>
                    </li>
                    <li>
                        <a href="{{route('meetings_scheduled')}}">Meetings Sceduled</a>
                    </li>
                   
                </ul>
            </li>

            <li>
                <a href="#page_train" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Training</a>
                <ul class="collapse list-unstyled" id="page_train">
                    <li>
                        <a href="/schedule_training_view">Schedule Training Session</a>
                    </li>
                    <li>
                        <a href="{{route('training_scheduled')}}">Trainings Sceduled</a>
                    </li>
                   
                </ul>
            </li>
            <li>
                <a href="/admin_check_salaries">Salary</a>
            </li>
        

        </ul>
      
        <ul class="list-unstyled CTAs">
            <li>
                <a href="{{url('add_new_admin')}}" class="download">Add new admin</a>
            </li>
            <li>
                <a href="{{route('adminlogout')}}" class="download">Logout</a>
              </li>
        </ul>
      </nav>
    <!-- Page Content  -->
    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span></span>
                </button>
                {{-- <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button> --}}

                {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Page</a>
                        </li>
                    </ul>
                </div> --}}
            </div>
        </nav>
 

        <h1 class="text-bold"> <center>Employees</center></h1>
        <div class="row">
            <div class="col-md-12 col-sm-12">

            <div class="table-responsive">
                <table class="table table-hover ">
                 <thead class="table-danger">
                     <tr class="table-success">
                         <th scope="col">ID</th>
                         <th class="table-info">First Name</th>
                         <th class="table-info" >Last Name</th>
                         <th class="table-info">City</th>
                         <th class="table-info">Dept Id</th>
                         <th class="table-info">Dept Name</th>
                         <th class="table-info">Salary</th>
                         <th class="table-info">Manager ID</th>
                         <th class="table-info">Email</th>
                         <th class="table-info">Actions</th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach ($emps as $emp)
                     <tr>
                         <td scope="row">{{$emp->id}}</td>
                         <td>{{$emp->f_name}}</td>
                         <td>{{$emp->l_name}}</td>
                         <td>{{$emp->city}}</td>
                         <td>{{$emp->dept_id}}</td>
                         <td>{{$emp->dept_name}}</td>
                         <td>{{$emp->salary}}</td>
                         @if($emp->id==$emp->manager_id)
                         <td> Manager</td>
                         @endif
                         @if($emp->id!=$emp->manager_id)
                         <td>{{$emp->manager_id}}</td>
                         @endif
                       
                         <td>{{$emp->email}}</td>
                         <td>
                           <a href="{{url('/edit_emp',$emp->id)}}" class="btn btn-primary btn-sm">Edit</a>
                             
                             <a href="{{url('/delete_emp',$emp->id)}}" class="btn btn-danger btn-sm">Delete</a>
                         </td>
                     </tr>
                     @endforeach
                 </tbody>
              
                </table>
               </div>
            </div>
            <div class="col-md-12">
                {{$emps->links()}}
            </div>
              
       
         </div>
         
<div class="row my-5">
    <div class="col-sm-1 col-md-4">
        <div class="card meet_card bg-primary" style="width: 19rem;height:20rem;">
            <div class="card-body">
              <h5 class="card-title font-weight-bold">Meetings</h5>
              <h6 class="card-subtitle mb-2 ">Scheduled Meetings</h6>
              <p class="card-text text-dark">Meetings are scheduled by Admin for employees which can be seen on Employee's Dashboard.</p>
              <a href="{{route('meetings_scheduled')}}" class="btn btn-md btn-success">Meetings Sceduled</a>
            </div>
          </div>
    </div>

    <div class="col-sm-1 col-md-4">
        <div class="card meet_card bg-warning" style="width: 19rem;height:20rem;">
            <div class="card-body">
              <h5 class="card-title font-weight-bold">Training</h5>
              <h6 class="card-subtitle mb-2 ">Scheduled Sessions</h6>
              <p class="card-text text-dark">Training sessions are scheduled by Admin for employees which can be seen on Employee's Dashboard.</p>
              <a href="{{route('training_scheduled')}}" class="btn btn-md btn-primary">Sessions Sceduled</a>
            </div>
          </div>
    </div>


    <div class="col-sm-1 col-md-4">
        <div class="card meet_card bg-secondary" style="width: 19rem;height:20rem;">
            <div class="card-body">
              <h5 class="card-title font-weight-bold">Attendance</h5>
              <h6 class="card-subtitle mb-2 "> Attendance of employees</h6>
              <p class="card-text text-dark">Training sessions are scheduled by Admin for employees which can be seen on Employee's Dashboard.</p>
              <a href="/admin_check_attendance" class="btn btn-md btn-primary">Atendance</a>
            </div>
          </div>
    </div>
</div>






    </div>
</div>


 @endsection