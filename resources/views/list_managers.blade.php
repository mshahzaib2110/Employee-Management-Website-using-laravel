@extends('master')
@section("content")

@foreach($managers as $man)

<p>{{$man->manager_id}}</p>
<p>{{$man->f_name}}</p>
@endforeach
@endsection