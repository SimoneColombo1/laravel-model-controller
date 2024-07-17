@extends('layouts.app')

@section('page-title', 'Movies')

@section('main-content')
    <h1>
       Movies:
     </h1>
     <section class="movies">
      @foreach ($movies as $movie )
      <div>
      <span> {{$movie->title;}}</span>
          <span> {{$movie->original_title;}}</span>
          <span> {{$movie->nationality;}}</span>
          <span> {{$movie->date;}}</span>
          <span> {{$movie->vote;}}</span>
      </div>

       @endforeach
</section>

@endsection
