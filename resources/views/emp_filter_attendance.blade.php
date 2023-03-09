@extends('master') 
@section('content')
@include('nav')
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

<h2>Total lates: {{$lates}}</h2>
    </div>
</div>
</div>
@endsection