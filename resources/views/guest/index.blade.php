@extends('layouts.app')

@section('content')

<section>
    <div class="container">
        <h1>Movies</h1>
        <div class="row">
            @foreach ($movies as $movie)

            <div class="col"> 
                <h2>{{ $movie['title'] }}</h2>
                <p>{{ $movie['original_title'] }}</p>
                <p>{{ $movie['nationality'] }}</p>
                <p>{{ $movie['date'] }}</p>
                <p>{{ $movie['vote'] }}</p>
            </div>
                
            @endforeach
        </div>
    </div>
</section>
    
@endsection

@section('title')
    Movies
@endsection