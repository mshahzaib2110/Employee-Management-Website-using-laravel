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
    <form action='/meet_schedule_form' method="post">
        @csrf
        <div class="form-group col-md-6">
            <label for="emp_id">Select Employee to Schedule Meeting</label>
            <div>
            <select name="emp_id" id="emp_id" class="boxstyling">
                <option>Select an employee</option>
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
            <label for="meeting_day">Meeting_day</label>
            <input type="date" class="form-control" id="meeting_day" aria-describedby="meeting_day" name="meeting_day" placeholder="Day of meeting">
            @error('meeting_day')
            <span style="color: red">{{$message}}</span>
         @enderror
        </div>
{{-- Manager Id no need to take input --}}
   
<div class="form-group col-md-6">
    <label for="start_time">Meeting Starts at:</label>
    <input type="time" class="form-control" id="start_time" aria-describedby="start_time" name="start_time" placeholder="">
    @error('start_time')
    <span style="color: red">{{$message}}</span>
 @enderror
</div>
<div class="form-group col-md-6">
    <label for="end_time">Meeting ends at:</label>
    <input type="time" class="form-control" id="end_time" aria-describedby="end_time" name="end_time" placeholder="">
    @error('end_time')
    <span style="color: red">{{$message}}</span>
 @enderror
</div>

<div class="form-group col-md-6">
    <label for="meeting_with">Meeting with</label>
    <input type="text" class="form-control" id="meeting_with" aria-describedby="meeting_with" name="meeting_with" placeholder="">
    @error('meeting_with')
    <span style="color: red">{{$message}}</span>
 @enderror
</div>

<div class="form-group col-md-6">
    <label for="agenda">Agenda</label>
    <input type="text" class="form-control" id="agenda" aria-describedby="agenda" name="agenda" placeholder="">
    @error('agenda')
    <span style="color: red">{{$message}}</span>
 @enderror
</div>
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
      </form>
  </div>
</div>
</div>
@endsection