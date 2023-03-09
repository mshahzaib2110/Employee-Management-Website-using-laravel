@extends('master')
@section("content")
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
<h1 ><center>Employee Details</center></h1>
<div class="container">
    <div class="row justify-content-center">

      <div class="col-6">
        <form action='admin_addemp' method="post">
            @csrf
            <div class="form-group col-md-6">
              <label for="fname">First name</label>
              <input type="text" class="form-control" id="fname" name="f_name" aria-describedby="fname" placeholder="Enter first name">
           
              @error('f_name')
              <span style="color: red">{{$message}}</span>
           @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="lname">Last Name</label>
              <input type="lname" class="form-control" id="lname" name="l_name" placeholder="Enter last name">
           
              @error('l_name')
              <span style="color: red">{{$message}}</span>
           @enderror
            </div>
           
            <div class="form-group col-md-6">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city" aria-describedby="city" name="city" placeholder="city">
                @error('city')
                <span style="color: red">{{$message}}</span>
             @enderror
            </div>
        
              <div class="form-group col-md-6">
                <label for="age">Age</label>
                <input type="number" class="form-control" id="age" aria-describedby="age" name="age" placeholder="age">
             
                @error('age')
                <span style="color: red">{{$message}}</span>
             @enderror
            </div>

            <div class="form-group col-md-6">
              <label for="dept">Department Name</label>
              <div>
              <select name="dept_id" id="dept_id" class="boxstyling">
                @foreach($depts as $dept)
                <option value="{{$dept->dept_id}}">{{$dept->dept_name}}</option>
                @endforeach
              </select>
            </div>
              @error('dept_id')
              <span style="color: red">{{$message}}</span>
           @enderror
          </div>

          <div class="form-group col-md-6">
            <label for="hiredate">Hiredate</label>
            <input type="date" class="form-control" id="hiredate" aria-describedby="hiredate" name="hiredate">
            @error('hiredate')
            <span style="color: red">{{$message}}</span>
         @enderror
        </div>

        <div class="form-group col-md-6">
          <label for="salary">Salary</label>
          <input type="number" class="form-control" id="salary" aria-describedby="hiredate" name="salary">
          @error('salary')
          <span style="color: red">{{$message}}</span>
       @enderror
      </div>

              
        <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email" name="email" placeholder="email">
             
                @error('email')
                <span style="color: red">{{$message}}</span>
             @enderror
            </div>
        
              <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" aria-describedby="password" name="password" placeholder="password">
                @error('password')
                <span style="color: red">{{$message}}</span>
             @enderror
            </div>
        
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
          </form>
      </div>
  
    </div>
  </div>

@endsection