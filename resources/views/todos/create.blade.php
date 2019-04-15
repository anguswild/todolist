@extends('layouts.app')

@section('content')
  <h1>Create Todo</h1>
  <form action="{{route('todo.store') }}" method="post">
    @csrf
    <div class="form-group">
      <label for="name">Name</label>
      <input class="form-control" type="text" name="text" id="text" placeholder="Enter Text">
    </div>
    <div class="form-group">
      <label for="body">Body</label>
      <textarea class="form-control" placeholder="Enter body" name="body" cols="50" rows="10" id="body"></textarea>
    </div>
    <div class="form-group">
      <label for="due">Due Date</label>
      <input class="form-control" type="text" name="due" id="due" placeholder="Enter Due Date">
    </div>
    <div class="form-group">
      <input class="btn btn-primary" type="submit" value="Submit">
    </div>
  </form>
@endsection
