@extends('master')
@section("content")
@include('nav')
@if (Session::has('passerror'))
<div class="alert alert-danger ">
    {!! Session::get('passerror') !!}

</div>

<div class="container">

@endif
    <div class="row justify-content-center">
  
      <div class="col-6">
        <form  action="{{ route('pass_update',[ 'id'=>$emp->id ] ) }}" method="post" >
            @csrf
          @method('PUT')
            <div class="form-group col-md-6">
              <label for="currentpass">Current password</label>
              <input type="password" class="form-control" id="currentpass" name="currentpass" aria-describedby="currentpass">
              @error('currentpass')
              <span style="color: red">{{$message}}</span>
           @enderror
            </div>

            <div class="form-group col-md-6">
                <label for="updatedpass">Updated password</label>
                <input type="password" class="form-control" id="updatedpass" name="updatedpass" aria-describedby="updatedpass">
                @error('updatedpass')
                <span style="color: red">{{$message}}</span>
             @enderror
              </div>

            <button type="submit" class="btn btn-primary mt-2">Submit</button>
          </form>
      </div>
  
    </div>
  </div>

@endsection
