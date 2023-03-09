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
<H1>Your search Results</H1>

@if($emps->count()==0)
<H2>No Results</H2>
@endif
<div id="content">

    <div class="row mx-5">
        <div class="col-md-12 col-sm-12">

            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" class="table-info">Employee Name</th>
                            <th class="table-info">Checkin</th>
                            <th class="table-info">Late</th>
                          

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($emps as $emp)
                        <tr>
                            <td>{{$emp->f_name}} {{$emp->l_name}}</td>
                            <td>{{$emp->checkin}}</td>
                            @if($emp->late==1)
                            <td class="text-danger">Late</td>
                            @else
                            <td> </td>
                            @endif
                        </tr>

                        @endforeach
                    </tbody>

                </table>
           {{$emps->links()}}
            </div>
        </div>


    </div>
</div>
</div>
@endsection