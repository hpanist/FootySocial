<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
  public function home()
  {
    return view('home');
  }

  public function enter()
  {
    return view('enter');
  }

  public function profile()
  {
    return view('profile');
  }
}
