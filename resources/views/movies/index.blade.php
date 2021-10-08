@extends('layouts.main')
{{-- STAMPA TITOLO + SPAGINA ATTUALE --}}
@section('title', 'List')

@section('content')
    <section id="cards" class="container">
        <div class="row my-5">
            {{-- CICLO PER STAMPA FILM --}}
            @forelse($movies as $movie)
                <div class="card m-2" style="width: 18rem;">
                    <div class="card-header">
                        <h3>{{ $movie->title }}</h3>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Titolo originale: </strong>{{ $movie->original_title }}</li>
                        <li class="list-group-item"><strong>Nazionalità: </strong>{{ $movie->nationality }}</li>
                        <li class="list-group-item"><strong>Data: </strong>{{ $movie->date }}</li>
                        <li class="list-group-item"><strong>Voto: </strong> {{ $movie->vote }}</li>
                    </ul>
                </div>
            @empty
                <h2>Nessun Film disponibile</h2>
            @endforelse
        </div>
    </section>
@endsection
