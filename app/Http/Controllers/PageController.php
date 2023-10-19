<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  public function index()
  {
    $title = "Benvenut* nell'homepage";
    return view('home', compact('title'));
  }
}