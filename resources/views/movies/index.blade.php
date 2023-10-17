@extends('layouts.app')

@section('main-content')
    <section class="container mt-5">
        <div class="row">
            @forelse ($movies as $movie)
                <div class="col-3 mx-2 my-3 border">
                    <h2> Titolo:{{ $movie->title }} </h2>
                    <h4> Titolo Originale: {{ $movie->original_title }}</h4>
                    <p>durata: {{ $movie->date }} </p>
                    <p>voto: {{ $movie->vote }} </p>
                </div>
            @empty
                <h2>Non ci sono Films</h2>
            @endforelse
        </div>
    </section>
@endsection
