<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {
    // return view('home');
    $active = 'home';
    return view('home', compact('active'));
  }
}
