@extends('master')
@section("content")
@include('nav')
<div class="container">
<div class="col-md-12">
    <form action='/emp_appraisals' method="post">
        @csrf
        <div class="form-group col-md-6">
            <label for="emp_id">Select Employee to add review</label>
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
            <label for="punctuality">Punctuality</label>
            <input type="number" class="form-control" id="punctuality" aria-describedby="punctuality" name="punctuality" placeholder="">
            @error('punctuality')
            <span style="color: red">{{$message}}</span>
         @enderror
        </div>
{{-- Manager Id no need to take input --}}
<div class="form-group col-md-6">
    <label for="performance">Performance</label>
    <input type="number" class="form-control" id="performance" aria-describedby="performance" name="performance" placeholder="">
    @error('performance')
    <span style="color: red">{{$message}}</span>
 @enderror
</div>
<div class="form-group col-md-6">
    <label for="punctuality">Communication</label>
    <input type="number" class="form-control" id="communication" aria-describedby="communication" name="communication" placeholder="">
    @error('communication')
    <span style="color: red">{{$message}}</span>
 @enderror
</div>
<div class="form-group col-md-6">
    <label for="description">Additional Comments</label>
    <input type="text" class="form-control" id="comments" aria-describedby="comments" name="comments" placeholder="">
    @error('comments')
    <span style="color: red">{{$message}}</span>
 @enderror
</div>

   
          
    
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
      </form>
  </div>
</div>
@endsection