@extends('master')
@section("content")
@include('nav')

    <div class="container">
        <center><h1 class="project-title">Projects Assigned by me</h1></center>
 @if($emps->count()==0)
<h2>No Projects Assigned</h2>
 @endif
      <div class="row hidden-md-up">
        @foreach ($emps as $emp)
       
        <div class="col-sm-12 col-md-4">
            <div class="card mr-10 my-5 mycard" style="">
                <div class="card-body bg-primary text-white">
                  <h5 class="card-title ">Employee Name: {{$emp->f_name}} {{$emp->l_name}}</h5>
                  <h6 class="card-subtitle mb-2"> Project title: {{$emp->title}}</h6>
                  <p class="card-text text-white">{{$emp->description}}</p>
                  <p class="card-text text-white">Submit by: {{$emp->deadline}}</p>
                </div>
              </div>
        </div>
     
        @endforeach
      </div>
  
      

     
    </div>

    @endsection



