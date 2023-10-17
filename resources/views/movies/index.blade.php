@extends('layouts.app')

@section('main-content')
    <section class="container mt-5">
        <div class="row justify-content-around">
            @forelse ($movies as $movie)
                <div class="col-2 mx-2 my-3">
                    <h2> {{ $movie->title }} </h2>
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
