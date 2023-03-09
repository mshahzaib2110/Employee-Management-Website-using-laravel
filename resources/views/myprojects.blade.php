@extends('master')
@section('content')
@include('nav')
<div class="container">
    <center><h1 class="project-title">Projects Assigned by me</h1></center>
@if($projects->count()==0)
<h2>No Projects Assigned to me</h2>
@endif
  <div class="row hidden-md-up">
    @foreach ($projects as $pro)
   
    <div class="col-sm-12 col-md-4">
        <form  action="{{ route('submit_project',[ 'pid'=>$pro->p_id ] ) }}" method="post" >
            @csrf
          @method('PUT')
        <div class="card mr-10 my-5 text-white mycard">
            <div class="card-body bg-primary text-white">
              <h5 class="card-title ">Title: {{$pro->title}}</h5>
              <p class="card-text text-white">{{$pro->description}}</p>
              <p class="card-text text-white">Due Date: {{$pro->deadline}}</p>
              <button type="submit" class="bg-success">Done!</button>
            </div>
          </div>
        </form>
    </div>
 
    @endforeach
  </div>

  

 
</div>



@endsection