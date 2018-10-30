@extends('layouts.master')

@section('content')
  <h1>Create a Post</h1>
  <hr>
  <form method="POST" action="/posts">
    @csrf
    @include('layouts.errors')
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title"  placeholder="Post's title here">
    </div>
    <div class="form-group">
      <label for="body">Body</label>
      <textarea class="form-control" id="body" name="body"  placeholder="Post's body here"></textarea>
    </div>
    <div class="form-group">
          <button type="submit" class="btn btn-primary">Post</button>
    </div>
  </form>

@endsection
