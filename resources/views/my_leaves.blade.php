@extends('master')
@section('content')
@include('nav')
<div class="container">
    <center><h1 class="project-title">My leave Requests</h1></center>
    @if($emps->count()==0)
<h2>No Leaves Requests</h2>
 @endif
    <div class="row hidden-md-up">
        @foreach ($emps as $emp)
        <div class="col-sm-12 col-md-4">
            <div class="card mr-10 my-5 mycard" style="">
                <div class="card-body bg-dark text-white">
                  <h5 class="card-title ">Reason: {{$emp->reason}}</h5>
                  <h6 class="card-subtitle mb-2"> Description: {{$emp->detail}}</h6>
                  <p class="card-text text-white">From:{{$emp->from_date}}</p>
                  <p class="card-text text-white">to:{{$emp->to_date}}</p>
                  @if($emp->status==0)
                  <p class="card-text text-danger">Not approved</p>
                  @endif

                  @if($emp->status==1)
                  <p class="card-text text-success">Approved</p>
                  @endif

                </div>
              </div>
        </div>
     
        @endforeach
      </div>

</div>


@endsection