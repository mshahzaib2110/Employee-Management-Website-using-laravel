@extends('master') 
@section('content')

@include('nav')

<div class="container">
<h1>My Attendance</h1>
@if($emps->count()==0)
<h2>No Record exist</h2>
@endif

<div id="content">
    <form action="{{url('emp_filter_attendance',session('Emp_Id'))}}" method='post'>
        @csrf
        <div class="row">
    
            <div class="col-sm-12 col-md-12">
    
    
    <label for="">From: </label>
    <input type="date" placeholder="" name="from">
    @error('from')
    <span style="color: red">{{$message}}</span>
    @enderror
    
    <label for="">To: </label>
    <input type="date" placeholder="" name="to">
    @error('to')
    <span style="color: red">{{$message}}</span>
    @enderror
    
    <button type="submit" class="btn btn-outline-primary">Search</button>
            </div>
            
     </div>
    </form>
        
  
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