@extends('master')
@section('content')
@include('nav')
<div class="col-6 mx-auto">
    <form action='/assign_project' method="post">
        @csrf
        <div class="form-group col-md-6">
            <label for="emp_id">Select Employee to assign Project</label>
            <div>
            <select name="emp_id" id="emp_id" class="boxstyling">
              @foreach($emps as $emp)
              <option value="{{$emp->id}}">{{$emp->f_name}} {{$emp->l_name}}</option>
              @endforeach
            </select>
          </div>
            @error('emp_id')
            <span style="color: red">{{$message}}</span>
         @enderror
        </div>
       
          <div class="form-group col-md-6">
            <label for="p_id">Project Id</label>
            <input type="number" class="form-control" id="p_id" aria-describedby="p_id" name="p_id" placeholder="">
            @error('p_id')
            <span style="color: red">{{$message}}</span>
         @enderror
        </div>
{{-- Manager Id no need to take input --}}
   
<div class="form-group col-md-6">
    <label for="title">Project Title</label>
    <input type="text" class="form-control" id="title" aria-describedby="title" name="title" placeholder="">
    @error('title')
    <span style="color: red">{{$message}}</span>
 @enderror
</div>
<div class="form-group col-md-6">
    <label for="description">Project Description</label>
    <input type="text" class="form-control" id="description" aria-describedby="description" name="description" placeholder="">
    @error('description')
    <span style="color: red">{{$message}}</span>
 @enderror
</div>

<div class="form-group col-md-6">
    <label for="deadline">Project Deadline</label>
    <input type="date" class="form-control" id="deadline" aria-describedby="deadline" name="deadline" placeholder="">
    @error('description')
    <span style="color: red">{{$message}}</span>
 @enderror
</div>

    
          
  
    
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
      </form>
  </div>

@endsection