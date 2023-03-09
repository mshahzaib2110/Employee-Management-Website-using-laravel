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
    <div class="row justify-content-center">

        <div class="col-md-6">
            <form  action="add_depart" method="post" >
                @csrf
                <div class="form-group col-md-6">
                    <label for="dname">Department name</label>
                    <input type="text" class="form-control" id="dept_name" name="dept_name" aria-describedby="dept_name" placeholder="Enter Department name">
                 
                    @error('dept_name')
                    <span style="color: red">{{$message}}</span>
                 @enderror
                  </div>

                  <div class="form-group col-md-6">
                    <label for="manager">Manager name</label>
                    <select name="manager_id" id="manager_id" class="boxstyling">
                    <option value="">Select Manager</option>
                        @foreach($emps as $emp)
                        
                        <option value="{{$emp->id}}">{{$emp->f_name}} {{$emp->l_name}} {{$emp->id}}</option>
                        @endforeach
                      </select>
                    
                </div>
            
                <button type="submit" class="btn btn-primary mt-2">Add</button>
            </form>
            @error('manager_id')
            <span style="color: red">{{$message}}</span>
         @enderror
          </div>

        </div>
    </div>



</div>
@endsection