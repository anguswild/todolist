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
  <div class="container">
    <div class="row">
      <div class="col align-self-start">
        <a href="/todo/{{$todo->id}}/edit" class="btn btn-primary">Edit</a>
      </div>
      <div class="col align-self-end">
        <form action="{{route('todo.destroy', $todo->id) }}" method="post">
          @csrf
          @method('DELETE')
          <input class="btn btn-danger float-right" type="submit" value="Delete">
        </form>
      </div>
    </div>
  </div>



@endsection
