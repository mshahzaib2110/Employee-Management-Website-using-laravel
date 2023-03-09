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
<h1>Attendance</h1>

<div id="content">
<form action="{{url('admin_filter_attendance')}}" method='post'>
    @csrf
    <div class="row">

        <div class="col-sm-12 col-md-12">
<label for="Search">Search Employee First Name</label>
<input type="text" placeholder="Atleast 2 characters" name="emp_id">
@error('emp_id')
<span style="color: red">{{$message}}</span>
@enderror

<label for="">From: </label>
<input type="date" placeholder="" name="from">
@error('from')
<span style="color: red">{{$message}}</span>
@enderror

<label for="">To: </label>
<input type="date" placeholder="" name="to">
@error('to')
<span style="color: red">{{$message}}</span>
@enderror

<button type="submit" class="btn btn-outline-primary">Search</button>
        </div>

        
 </div>
</form>

    <div class="row mx-5">
        <div class="col-md-12 col-sm-12">

            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" class="table-info">Employee ID</th>
                            <th class="table-info">Employee Name</th>
                            <th class="table-info">Checkin</th>
                            <th class="table-info">Late</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($emps as $emp)
                        <tr>
                            <td scope="row">{{$emp->emp_id}}</td>
                            <td>{{$emp->f_name}} {{$emp->l_name}}</td>
                            <td>{{$emp->checkin}}</td>
                            @if($emp->late==1)
                            <td class="text-danger">Late</td>
                            @else
                            <td> </td>
                            @endif
                        </tr>

                        @endforeach
                    </tbody>

                </table>
                {{$emps->links()}}
            </div>
        </div>


    </div>
</div>
</div>
@endsection