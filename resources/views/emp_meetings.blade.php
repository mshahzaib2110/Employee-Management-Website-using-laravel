@extends('master')
@section("content")

@include('nav')
    <div class="container">
        <center><h1 class="project-title">My meetings Scheduled</h1></center>
 @if($meetings->count()==0)
<h2>No Meetings Scheduled</h2>
 @endif

      <div class="row hidden-md-up">
        @foreach ($meetings as $meet)
       
        <div class="col-sm-12 col-md-4">
            <div class="card mr-10 my-5 mycard" style="">
                <div class="card-body bg-primary text-white">
                  <h5 class="card-title ">With: {{$meet->meeting_with}}</h5>
                  <h6 class="card-title ">Agenda: {{$meet->agenda}}</h5>
                  <h6 class="card-subtitle mb-2"> Day: {{$meet->meeting_day}}</h6>
                  <p class="card-text text-white">from: {{$meet->start_time}}</p>
                  <p class="card-text text-white">To: {{$meet->end_time}}</p>
                </div>
              </div>
        </div>
     
        @endforeach
      </div>
  
      

     
    </div>

    @endsection



