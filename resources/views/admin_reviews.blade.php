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

<h1 class="text-bold"> <center>Employee Reviews</center></h1>
        <div class="row">
            @if($emps->count()==0)
            <h2>No Reviews available</h2>
            @endif
            <div class="col-md-12 col-sm-12">

            <div class="table-responsive">
                <table class="table table-hover ">
                 <thead class="table-danger">
                     <tr class="table-success">
                         <th scope="col">ID</th>
                         <th class="table-info">Employee ID</th>
                         <th class="table-info" >Punctuality Rating</th>
                         <th class="table-info">Performance Rating</th>
                         <th class="table-info">Communication Rating</th>
                         <th class="table-info">Additional Comments</th>
                         <th class="table-info">Actions</th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach ($emps as $emp)
                     <tr>
                         <td scope="row">{{$emp->id}}</td>
                         <td scope="row">{{$emp->emp_id}}</td>
                         <td>{{$emp->punctuality}}</td>
                         <td>{{$emp->performance}}</td>
                         <td>{{$emp->communication}}</td>
                         <td>{{$emp->desc}}</td>
                         <td>
                             <a href="{{url('/delete_review',$emp->id)}}" class="btn btn-danger btn-sm">Delete</a>
                         </td>
                     </tr>
                     @endforeach
                 </tbody>
              
                </table>
               </div>
            </div>
        </div>
        
@endsection