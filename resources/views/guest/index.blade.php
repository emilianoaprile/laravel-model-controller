@extends('layouts.app')

@section('content')

<section>
    <div class="container">
        <h1>Movies:</h1>
        <div class="row">
            @foreach ($movies as $movie)

            <div class="col-4 p-3"> 
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        <h2>{{ $movie['title'] }}</h2>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h3>{{ $movie['original_title'] }}</h3>
                        </li>
                        <li class="list-group-item">
                            <p>{{ $movie['nationality'] }}</p>
                        </li>
                        <li class="list-group-item">
                            <p>{{ $movie['date'] }}</p>
                        </li>
                        <li class="list-group-item">
                            <p>{{ $movie['vote'] }}</p>
                        </li>
                    </ul>
                </div>
            </div>
                
            @endforeach
        </div>
    </div>

    
</section>
    
@endsection

@section('title')
    Movies
@endsection