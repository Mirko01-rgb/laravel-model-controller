<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;
class TestController extends Controller
{
  //   GOAL: come detto a lezione, l'obbiettivo e' quello di replicare il
  //   comportamento visto sulle tabelle ospiti e paganti, sulla tabella movies del db condiviso; si avranno quindi 2 pagine:
  // - home: che lista tutti i film con il solo id + titolo
  // - film/{id}: che mostrera' tutti i dettagli del singolo film cliccato dall'utente
  public function home(){
    $movies = Movies::all();
    //dd($movies);

    return view('pages.home', compact('movies'));
  }

  public function movie($id){
    $movie = Movies::findOrFail($id);
    //dd($id);
    //dd($movie);
    return view('pages.movie', compact('movie'));

  }
}
