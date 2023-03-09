@extends('master')
@section("content")
<div class="container">
    <div class="row justify-content-center">
  
      <div class="col-6">
        <form  action="{{ route('updateput',[ 'id'=>$emp->id ] ) }}" method="post" >
            @csrf
          @method('PUT')
            <div class="form-group col-md-6">
              <label for="fname">First name</label>
              <input type="text" class="form-control" id="fname" name="f_name" aria-describedby="fname" value="{{$emp->f_name}}">
           
              @error('f_name')
              <span style="color: red">{{$message}}</span>
           @enderror
            </div>

            <div class="form-group col-md-6">
              <label for="lname">Last Name</label>
              <input type="lname" class="form-control" id="lname" name="l_name" value="{{$emp->l_name}}">
           
              @error('l_name')
              <span style="color: red">{{$message}}</span>
           @enderror
            </div>
           
            <div class="form-group col-md-6">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city" aria-describedby="city" name="city" value="{{$emp->city}}">
                @error('city')
                <span style="color: red">{{$message}}</span>
             @enderror
            </div>

            <div class="form-group col-md-6">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" aria-describedby="address" name="address" value="{{$emp->address}}">
              @error('address')
              <span style="color: red">{{$message}}</span>
           @enderror
          </div>
      
        
              <div class="form-group col-md-6">
                <label for="age">Age</label>
                <input type="number" class="form-control" id="age" aria-describedby="age" name="age" value="{{$emp->age}}">
             
                @error('age')
                <span style="color: red">{{$message}}</span>
             @enderror
            </div>


    
        
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
          </form>
      </div>
  
    </div>
  </div>

@endsection