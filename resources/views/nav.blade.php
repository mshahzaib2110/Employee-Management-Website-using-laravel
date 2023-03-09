<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{route('emp_home')}}"><img src="{{asset('img/lo.png')}}" style="width:3rem;height:3rem; "></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('emp_home')}}">Home <span class="sr-only">(current)</span></a>
        </li>
     
      
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Projects
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            @if( session('Manager') ) 
            <a class="dropdown-item" href="{{url('/assign_project',session('DeptId'))}}">Assign Project</a>
            <a class="dropdown-item" href="{{url('assigned_byme',session('DeptId'))}}">Projects Assigned by me</a>
            @endif
            <a class="dropdown-item" href="{{url('/myprojects',session('Emp_Id'))}}">Projects Assigned to me</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
  
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Leaves
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{url('/apply_leave')}}">Apply for leave</a>
            <a class="dropdown-item" href="{{url('my_leaves',session('Emp_Id'))}}">Leaves Status</a>
          
          </div>
        </li>
     
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Mark Attenance
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{url('/attendance',session('Emp_Id'))}}">Checkin</a>
           <a class="dropdown-item" href="{{url('emp_check_attendance',session('Emp_Id'))}}">My Atendance</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/emp_meetings',session('Emp_Id'))}}">Meetings Scheduled</a>
        </li>
  
        <li class="nav-item">
          <a class="nav-link" href="{{url('/emp_trainings',session('Emp_Id'))}}">Trainings Scheduled</a>
        </li>
        @if (session('Manager'))
        <li class="nav-item">
          <a class="nav-link" href="{{url('/emp_appraisals',session('DeptId'))}}">Appraisals</a>
        </li>
        @endif
  
      </ul>
  
      <ul class="nav navbar-nav navbar-right mr-5">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="{{asset('img/profile.png')}}" style="width:3rem;height:3rem; ">
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="nav-link " href="{{url('/edit',session('Emp_Id'))}}">Edit Profile</a>
            <a class="nav-link" href="{{url('/updatepass',session('Emp_Id'))}}">Update Password</a>
            <a class="nav-link" href="{{route('emp_logout')}}">Logout</a>
          </div>
        </li>
     
      </ul>
  
    </div>
  </nav>