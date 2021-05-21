<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;
class TestController extends Controller
{
  public function home(){
    $movies = Movies::all();
    dd($movies);

    //return view('pages.home', compact('ospiti'));
  }
}
