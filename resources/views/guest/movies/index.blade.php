@extends('layouts.app')

@section('page-title', 'Movies')

@section('main-content')
    <h1>
       Movies:
       @foreach ($movies as $movie )
           {{$movie->title;}}
       @endforeach
    </h1>

@endsection
