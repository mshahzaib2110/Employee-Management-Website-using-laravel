@extends('master') 
@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
  
        {{-- <button type="button" id="sidebarCollapse" class="btn btn-info">
            <i class="fas fa-align-left"></i>
            <span></span>
        </button> --}}
        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-align-justify"></i>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                 <a class="nav-link" href="{{route('admin_home')}}">Home</a>
                </li>
              
                
            </ul>
        </div>
    </div>
  </nav>
<div class="container">
<h1>Salaries</h1>

<div id="content">

@if($emps->count()==0)
<h2>No Employees to Show</h2>
@endif

    <div class="row mx-5 ">
        <div class="col-md-12 col-sm-12">

            <div class="table-responsive">
                <table class="table table-hover table-bordered ">
                    <thead>
                        <tr>
                            <th scope="col" class="table-info">Employee ID</th>
                            <th class="table-info">Employee Name</th>
                            <th class="table-info">Salary</th>
                            <th class="table-info">Department ID</th>
                            <th class="table-info">Department Name</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($emps as $emp)
                        <tr>
                            <td scope="row">{{$emp->id}}</td>
                            <td>{{$emp->f_name}} {{$emp->l_name}}</td>
                            <td>{{$emp->salary}}</td>
                            <td>{{$emp->dept_id}}</td>
                            <td>{{$emp->dept_name}}</td>

                        </tr>

                        @endforeach
                    </tbody>

                </table>
            
            </div>
        </div>


    </div>
</div>
</div>
@endsection