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
<h1 class="text-bold"> <center> Training Sessions Scheduled</center></h1>
@if($emps->count()==0)
<h2>No Scheduled Trainings</h2>
 @endif

 <div class="row hidden-md-up">
    @foreach ($emps as $emp)
   
    <div class="col-sm-12 col-md-12">
        <div class="jumbotron ">
            <h1 class="display-8">{{$emp->f_name}} {{$emp->l_name}}</h1>
            <p class="lead text-dark">Starts: {{$emp->start_date}}</p>
            <hr class="my-4">
            <p class="text-dark">Ends: {{$emp->end_date}}</p>
            <p class="text-dark">For: {{$emp->topic}}</p>
            <p class="text-dark"> By: {{$emp->trainer}}</p>
          </div>
    </div>
 
    @endforeach
  </div>





</div>


@endsection