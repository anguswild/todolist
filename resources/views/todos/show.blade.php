@extends('layouts.app')

@section('content')

  <h1>{{$todo->text}}</h1>
  <div class="badge badge-danger">{{$todo->due}}</div>
  <hr>
  <p>{{$todo->body}}</p>
  <hr>
  <a class="btn btn-primary" href="/">Go Back</a>
@endsection
