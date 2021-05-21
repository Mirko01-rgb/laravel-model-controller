@extends('layouts.main-layout')
@section('content')
    <h1>Movies:</h1>
    <ul>
      @foreach ($movies as  $movie)
        <li>
          <a href="{{route('movie', $movie->id)}}">
            <h3>
              [{{$movie->id}}]
              {{$movie->title }}
            </h3>
          </a>
        </li>
      @endforeach
    </ul>
@endsection
