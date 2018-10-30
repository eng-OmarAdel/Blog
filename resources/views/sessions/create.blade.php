@extends('layouts.master')

@section('content')
  <h1>Login</h1>
  <form method="post" action="/login">
    @csrf
    @include('layouts.errors')
    <div class="form-group">
      <label for="email">E-mail</label>
      <input type="email" class="form-control" id="email" name="email"  placeholder="Your email">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password"  placeholder="Your password">
    </div>
    <div class="form-group">
          <button type="submit" class="btn btn-primary">Login</button>
    </div>
  </form>
@endsection
