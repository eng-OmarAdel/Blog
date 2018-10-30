<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
  public function __construct()
  {
    $this->middleware('guest')->except('delete');
  }

  public function create()
  {
    return view('sessions.create');
  }

  public function store()
  {
    $valid=auth()->attempt(request(['email','password']));
    if(!$valid)
    {
      return back()->withErrors([
        'message'=>'Please check your credentials and try again.'
      ]);
    }
    return redirect('/');
  }

  public function delete()
  {
    auth()->logout();
    return redirect('/');
  }
}
