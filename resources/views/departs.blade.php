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
<div id="content">
    <form action="{{url('filter_emp_by_dept')}}" method='post'>
        @csrf
        <div class="row my-3 mx-5">
    
            <div class="col-sm-6 col-md-6">
                <label for="dept_id">Filter Number of Employees in Department ID</label>
              <input type="number" name='dept_id'>
                @error('dept_id')
                <span style="color: red">{{$message}}</span>
             @enderror
    
        <button type="submit" class="btn btn-outline-primary">Filter</button>

            </div>
    
            
     </div>
    </form>
<div class="row mx-5">
    <div class="col-md-12 col-sm-12">

    <div class="table-responsive">
        <table class="table table-hover table-bordered">
         <thead>
             <tr>
                 <th scope="col" class="table-info">Deparment ID</th>
                 <th class="table-info">Department Name</th>
                 <th class="table-info">Manager Name</th>
                 <th class="table-info" >Actions</th>
             </tr>
         </thead>
         <tbody>
             @foreach ($dept as $d)
             <tr>
                 <td scope="row">{{$d->dept_id}}</td>
                 <td>{{$d->dept_name}}</td>
                 <td>{{$d->f_name}} {{$d->l_name}}</td>
                 <td>
                   <a href="{{url('edit_dept',$d->dept_id)}}" class="btn btn-primary btn-sm">Edit</a>
                     <a href="{{route('delete_dept',['id'=>$d->dept_id])}}" class="btn btn-danger btn-sm">Delete</a>
                 </td>
             </tr>
             @endforeach
         </tbody>
      
        </table>
       </div>
    </div>
      

 </div>
</div>
</div>

@endsection