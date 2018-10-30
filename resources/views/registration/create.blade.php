@extends('layouts.master')

@section('content')
  <h1>Register</h1>
  <form method="post" action="/register">
    @csrf
    @include('layouts.errors')
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name"  placeholder="Your name">
    </div>
    <div class="form-group">
      <label for="email">E-mail</label>
      <input type="email" class="form-control" id="email" name="email"  placeholder="Your email">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password"  placeholder="Your password">
    </div>
    <div class="form-group">
      <label for="password_confirmation">Password again</label>
      <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"  placeholder="Your password">
    </div>
    <div class="form-group">
          <button type="submit" class="btn btn-primary">Register</button>
    </div>
  </form>
@endsection
