@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @forelse ($movies as $movie)
                <div class="col-2">
                    <h2>{{$movie->title}}</h2>
                    <p>{{$movie->original_title}}</p>
                </div>
            @empty
                
            @endforelse
        </div>
    </div>
@endsection