@extends('master')
@section('content')

<div class="container">
    <H1>Your search Results</H1>
    
    @if(!$emps)
    <H2>No Results</H2>
    @endif
    <div id="content ">
    
        <div class="row mx-5">
            <div class="col-md-12 col-sm-12">
    
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" class="table-info">Dept ID</th>
                                <th class="table-info">Dept Name</th>
                                <th class="table-info">Total Employees</th>
    
                            </tr>
                        </thead>

                        <tbody>
                           
                            <tr>
                                <td>{{$emps->dept_id}}</td>
                                <td>{{$emps->dept_name}}</td>
                                <td>{{$emps->total}}</td>
                               
                            </tr>

                        </tbody>
    
                    </table>

                </div>
            </div>
    
    
        </div>
    </div>
    </div>
@endsection