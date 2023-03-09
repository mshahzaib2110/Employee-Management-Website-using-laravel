@extends('master')
@section("content")
<div class="container">

        <div class="row justify-content-center">
      
          <div class="col-6">
            <form  action="{{ route('edit_emp_form',[ 'id'=>$emp->id ] ) }}" method="post" >
                @csrf
              @method('PUT')
              <div class="form-group col-md-6">
                <label for="dept">Department Name</label>
                <div>
                <select name="dept_id" id="dept_id" class="boxstyling">
                  @foreach($depts as $dept)
                  <option value="{{$dept->dept_id}}">{{$dept->dept_name}}</option>
                  @endforeach
                </select>
              </div>
                @error('dept_id')
                <span style="color: red">{{$message}}</span>
             @enderror
            </div>
            
            <div class="form-group col-md-6">
                <label for="salary">Salary</label>
                <input type="number" class="form-control" id="salary" aria-describedby="hiredate" name="salary" value="{{$emp->salary}}">
                @error('salary')
                <span style="color: red">{{$message}}</span>
             @enderror
            </div>
    
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
              </form>
          </div>
      
        </div>
      </div>

@endsection