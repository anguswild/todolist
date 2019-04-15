@extends('layouts.app')

@section('content')
  <br>
  <a class="btn btn-primary" href="/todo/{{$todo->id}}">Go Back</a>
  <br><br>
  <h1>Edit Todo</h1>
  <form action="{{route('todo.update', $todo->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="name">Name</label>
      <input class="form-control" type="text" name="text" id="text" value="{{$todo->text}}" placeholder="Enter Text">
    </div>
    <div class="form-group">
      <label for="body">Body</label>
      <textarea class="form-control" placeholder="Enter body" name="body" cols="50" rows="10" id="body">{{$todo->body}}</textarea>
    </div>
    <div class="form-group">
      <label for="due">Due Date</label>
      <input class="form-control" type="text" name="due" id="due" value="{{$todo->due}}" placeholder="Enter Due Date">
    </div>
    <div class="form-group">
      <input class="btn btn-primary" type="submit" value="Edit">
    </div>
  </form>
@endsection
