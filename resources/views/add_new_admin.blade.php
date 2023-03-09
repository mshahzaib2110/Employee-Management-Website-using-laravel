@extends('master')
@section('content')


<div class="row justify-content-center">
  
    <div class="col-6">
      <form  action="{{ route('new_admin_form') }}" method="post" >
          @csrf
          <div class="form-group col-md-6">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="name">
            @error('name')
            <span style="color: red">{{$message}}</span>
         @enderror
          </div>

          <div class="form-group col-md-6">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" name="email" aria-describedby="email">
              @error('email')
              <span style="color: red">{{$message}}</span>
           @enderror
            </div>

            <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" aria-describedby="password">
                @error('email')
                <span style="color: red">{{$message}}</span>
             @enderror
              </div>

          <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>

  </div>





@endsection