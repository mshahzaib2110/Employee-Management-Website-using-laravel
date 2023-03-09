{{-- @extends('master')
@section("content")

<div class="center">
  <h1>Login</h1>
  <form action="emp_login" method="post">
    @csrf 
    <div class="txt_field">
      <input type="text" name='email' >
      <span></span>
      <label>Email</label>
      @error('email')
      <span style="color: red">{{$message}}</span>
   @enderror
    </div>
    <div class="txt_field">
      <input type="password" name='password'>
      <span></span>
      <label>Password</label>
      @error('password')
      <span style="color: red">{{$message}}</span>
   @enderror
    </div>
    <input type="submit" value="Login">
  
  </form>
</div>

@endsection --}}

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style1.css')}}">

  </head>
  <body>
    @if (Session::has('myerror'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {!! Session::get('myerror') !!}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
@endif
    <div class="center">
      <h1>Employee Login</h1>
      <form action="emp_login" method="post">
        @csrf 
        <div class="txt_field">
          <input type="text" name='email' >
          <span></span>
          <label>Email</label>
          @error('email')
          <span style="color: red">{{$message}}</span>
       @enderror
        </div>
        <div class="txt_field">
          <input type="password" name='password'>
          <span></span>
          <label>Password</label>
          @error('password')
          <span style="color: red">{{$message}}</span>
       @enderror
        </div>
       
        <input type="submit" value="Login">
        
      </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  </body>
</html>
