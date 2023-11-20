@extends("layouts.main")

@section("content")

    <h1 class="text-center">Dettagli</h1>
    <div class="container d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $movie->title }}</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie->original_title }}</h6>
                <p class="card-text">Nazionalità: {{ $movie->nationality }}</p>
                <p class="card-text">Data d'uscita: {{ $movie->date }}</p>
                <p class="card-text">Voto: {{ $movie->vote }}</p>
            </div>
        </div>
    </div>

@endsection
