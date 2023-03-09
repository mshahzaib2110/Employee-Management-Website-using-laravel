@extends('master')
@section("content")

@include('nav')
    <div class="container">
        <center><h1 class="project-title">My meetings Scheduled</h1></center>
 @if($trainings->count()==0)
<h2>No Trainings Scheduled</h2>
 @endif

      <div class="row hidden-md-up">
        @foreach ($trainings as $meet)
       
        <div class="col-sm-12 col-md-4">
            <div class="card mr-10 my-5 mycard" style="">
                <div class="card-body bg-primary text-white">
                  <h5 class="card-title ">Topic: {{$meet->topic}}</h5>
                  <h6 class="card-title ">By: {{$meet->trainer}}</h5>
                  <h6 class="card-subtitle mb-2"> Starts: {{$meet->start_date}}</h6>
                  <p class="card-text text-white">Ends: {{$meet->end_date}}</p>
                </div>
              </div>
        </div>
     
        @endforeach
      </div>
  
      

     
    </div>

    @endsection



