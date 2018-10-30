@extends('layouts.master')

@section('content')
  <h1>
    {{$post->title}}
  </h1>
  <p>
    {{$post->body}}
  </p>
  <br>
  <form method="post" action="/posts/{{$post->id}}">
    @csrf
    @include('layouts.errors')
    <div class="form-group">
      <textarea class="form-control" id="body" name="body"  placeholder="Add a comment..."></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Comment</button>
    </div>
  </form>
  <hr>
  <div class="container mt-2" id="comments">
    @foreach ($comments as $comment)
      <article class="comment">
        <strong>{{$comment->created_at->diffForHumans() }}</strong>
        {{$comment->body}}
      </article>
      <br>
    @endforeach
  </div>
@endsection
