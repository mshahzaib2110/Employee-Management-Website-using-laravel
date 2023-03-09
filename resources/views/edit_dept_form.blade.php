@extends('master')
@section('content')

<div class="container">

    <div class="row justify-content-center">
  
      <div class="col-md-6">
        <form  action="{{ route('edit_dept_form',[ 'id'=>$dept->dept_id ] ) }}" method="post" >
            @csrf
          @method('PUT')
          <div class="form-group col-md-6">
            <label for="dept">Department Name</label>
            <div>
                <input type="text" name='dept_name' value="{{$dept->dept_name}}">
                @error('dept_name')
                <span style="color: red">{{$message}}</span>
             @enderror
        
          </div>
          
        </div>
        <div class="form-group col-md-6">
        <label for="manager">Curent Manager</label>
      <div>
        <p>{{$dept->manager_id}}</p>
        </div>  
        </div>

        <div class="form-group col-md-6">
            <label for="manager">Manager name</label>
            <select name="manager_id" id="manager_id" class="boxstyling">
              <option value="">Select a manager</option>
                @foreach($emps as $emp)
                <option value="{{$emp->id}}">{{$emp->f_name}} {{$emp->l_name}} {{$emp->id}}</option>
                @endforeach
              </select>
              @error('manager_id')
              <span style="color: red">{{$message}}</span>
           @enderror
        </div>

            <button type="submit" class="btn btn-primary mt-2">Submit</button>
          </form>
      </div>
  
    </div>
  </div>

@endsection