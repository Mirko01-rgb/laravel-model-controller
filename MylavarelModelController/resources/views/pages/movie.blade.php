@extends('layouts.main-layout')
@section('content')
    <h1>Movie:</h1>
     <ul>
       <li>
         <h3>Id --> {{$movie->id}}</h3>
         <h3>Titolo -->  {{$movie->title }}</h3>
         <h3>Titolo originale --> {{$movie->original_title}}</h3>
         <h3>Nazionalità --> {{$movie->nationality}}</h3>
         <h3>Data di uscita --> {{$movie->date}}</h3>
         <h3>Votp del film --> {{$movie->vote}}</h3>
       </li>
     </ul>
@endsection
