@extends('master')
@section('content')
@include('nav')
<div class="row">

<div class="col-md-6 col-sm-12 mx-auto">

<form action="apply_leave" method="post">
    @csrf
      <div class="form-group col-md-6">
        <label for="reason">Reason</label>
        <input type="text" class="form-control" id="reason" aria-describedby="reason" name="reason" placeholder="">
        @error('reason')
        <span style="color: red">{{$message}}</span>
     @enderror
    </div>
{{-- Manager Id no need to take input --}}

<div class="form-group col-md-6">
<label for="detail">Details</label>
<input type="textbox" class="form-control" id="detail" aria-describedby="detail" name="detail" placeholder="Description">
@error('detail')
<span style="color: red">{{$message}}</span>
@enderror
</div>


<div class="form-group col-md-6">
<label for="from_date">From:</label>
<input type="date" class="form-control" id="from_date" aria-describedby="from_date" name="from_date" placeholder="">
@error('from_date')
<span style="color: red">{{$message}}</span>
@enderror
</div>

<div class="form-group col-md-6">
    <label for="to_date">To:</label>
    <input type="date" class="form-control" id="to_date" aria-describedby="to_date" name="to_date" placeholder="">
    @error('to_date')
    <span style="color: red">{{$message}}</span>
    @enderror
    </div>
    
    <button type="submit" class="btn btn-primary mt-2">Submit</button>
  </form>
</div>
</div>

@endsection