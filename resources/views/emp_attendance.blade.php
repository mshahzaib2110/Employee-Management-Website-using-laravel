@extends('master')
@section("content")
@include('nav')
<div class="container">

  <h2 class="text-center"> Mark your attenance Employee: {{session('Emp_Id')}} </h2> 


<div class="row ">

  <div class="col-md-6">
    <form  action="{{ route('mark_attendance',[ 'id'=>$emp->id ] ) }}" method="post" >
      @csrf
      <div class="form-group col-md-6">
        
        <input type="hidden" class="form-control" id="checkin" name="checkin" aria-describedby="checkin">
        @error('checkin')
        <span style="color: red">{{$message}}</span>
     @enderror
      </div>
        <h2>Checking in {{date("Y-m-d H:i:s")}}</h2>
    
      <button type="submit" class="btn btn-primary mt-10 mb-10">Checkin</button>
    </form>
  </div>

  <div class="col-md-6">
    <img src="{{asset('img/check_in.jpg')}}" style="width:30rem;height:25rem; ">
  </div>

</div>


</div>


{{-- <div class="row justify-content-center">
  
    <div class="col-6">
      <h2> Mark your attenance  {{session('Emp_Id')}} </h2> 
      <form  action="{{ route('mark_attendance',[ 'id'=>$emp->id ] ) }}" method="post" >
          @csrf
          <div class="form-group col-md-6">
            
            <input type="hidden" class="form-control" id="checkin" name="checkin" aria-describedby="checkin">
            @error('checkin')
            <span style="color: red">{{$message}}</span>
         @enderror
          </div>
            <h2>Checking in {{date("Y-m-d H:i:s")}}</h2>
        
          <button type="submit" class="btn btn-primary mt-2">Checkin</button>
        </form>
    </div>

  </div> --}}


@endsection