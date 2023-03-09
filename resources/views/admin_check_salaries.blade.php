@extends('master') 
@section('content')

<div class="container">
<h1>Salaries</h1>

<div id="content">
<form action="{{url('filter_sal_dept')}}" method='post'>
    @csrf
    <div class="row">

        <div class="col-sm-6 col-md-6">
            <label for="dept_id">Filter by Department Name</label>
           
            <select name="dept_id" id="dept_id" class="boxstyling">
              @foreach($depts as $dept)
              <option value="{{$dept->dept_id}}">{{$dept->dept_name}}</option>
              @endforeach
            </select>
       
            @error('dept_id')
            <span style="color: red">{{$message}}</span>
         @enderror


    <button type="submit" class="btn btn-outline-primary">Filter</button>


        </div>

        
 </div>
</form>
@if($emps->count()==0)
<h2>No Employees to Show</h2>
@endif

    <div class="row mx-5 ">
        <div class="col-md-12 col-sm-12">

            <div class="table-responsive">
                <table class="table table-hover table-bordered ">
                    <thead>
                        <tr>
                            <th scope="col" class="table-info">Employee ID</th>
                            <th class="table-info">Employee Name</th>
                            <th class="table-info">Salary</th>
                            <th class="table-info">Department ID</th>
                            <th class="table-info">Department Name</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($emps as $emp)
                        <tr>
                            <td scope="row">{{$emp->id}}</td>
                            <td>{{$emp->f_name}} {{$emp->l_name}}</td>
                            <td>{{$emp->salary}}</td>
                            <td>{{$emp->dept_id}}</td>
                            <td>{{$emp->dept_name}}</td>

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