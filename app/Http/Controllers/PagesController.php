<?php

namespace FootySocial\Http\Controllers;

use Illuminate\Http\Request;
use FootySocial\Http\Requests;
use FootySocial\Http\Controllers\Controller;

class PagesController extends Controller
{
  public function home()
  {
      return view('home');
  }

  public function profile()
  {
      return view('profile');
  }
}
