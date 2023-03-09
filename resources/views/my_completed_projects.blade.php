@extends('master')
@section('content')
@include('nav')
<div class="container">
    <center><h1 class="project-title">Projects Completed by me</h1></center>
@if($projects->count()==0)
<h2>No Projects Comleted Yet</h2>
@endif
  <div class="row hidden-md-up">
    @foreach ($projects as $pro)
   
    <div class="col-sm-12 col-md-4">
        <div class="card mr-10 my-5 text-white mycard">
            <div class="card-body bg-primary text-white">
              <h5 class="card-title ">Title: {{$pro->title}}</h5>
              <p class="card-text text-white">{{$pro->description}}</p>
              <p class="card-text text-white">Deadline: {{$pro->deadline}}</p>
              <p class="card-text text-white">submitted on: {{$pro->updated_at}}</p>
            </div>
          </div>
        
    </div>
 
    @endforeach
  </div>

  

 
</div>



@endsection