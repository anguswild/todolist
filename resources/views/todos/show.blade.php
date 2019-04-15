@extends('layouts.app')

@section('content')
  <br>
  <a class="btn btn-primary" href="/">Go Back</a>
  <br><br>
  <h1>{{$todo->text}}</h1>

  <div class="badge badge-danger">{{$todo->due}}</div>
  <hr>
  <p>{{$todo->body}}</p>
  <br><br>
  <a href="/todo/{{$todo->id}}/edit" class="btn btn-primary">Edit</a>

@endsection
