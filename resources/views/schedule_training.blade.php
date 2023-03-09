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
<div class="container">


<div class="row">

<div class="col-12 mx-auto">
    <form action='/train_schedule_form' method="post">
        @csrf
        <div class="form-group col-md-6">
            <label for="emp_id">Select Employee to Schedule Training</label>
            <div>
            <select name="emp_id" id="emp_id" class="boxstyling">
              @foreach($emps as $emp)
           
              <option value="{{$emp->id}}">{{$emp->f_name}} {{$emp->l_name}}</option>
              @endforeach
            </select>
          </div>
            @error('emp_id')
            <span style="color: red">{{$message}}</span>
         @enderror
        </div>
       
          <div class="form-group col-md-6">
            <label for="topic">Topic</label>
            <input type="text" class="form-control" id="topic" aria-describedby="topic" name="topic" placeholder="">
            @error('topic')
            <span style="color: red">{{$message}}</span>
         @enderror
        </div>
{{-- Manager Id no need to take input --}}
   
<div class="form-group col-md-6">
    <label for="start_date">Traning Starts from:</label>
    <input type="date" class="form-control" id="start_date" aria-describedby="start_date" name="start_date" placeholder="">
    @error('start_date')
    <span style="color: red">{{$message}}</span>
 @enderror
</div>
<div class="form-group col-md-6">
    <label for="end_date">Training ends at:</label>
    <input type="date" class="form-control" id="end_date" aria-describedby="end_date" name="end_date" placeholder="">
    @error('end_date')
    <span style="color: red">{{$message}}</span>
 @enderror
</div>

<div class="form-group col-md-6">
    <label for="trainer">Trainer</label>
    <input type="text" class="form-control" id="trainer" aria-describedby="trainer" name="trainer" placeholder="">
    @error('trainer')
    <span style="color: red">{{$message}}</span>
 @enderror
</div>
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
      </form>
  </div>
</div>
</div>
@endsection