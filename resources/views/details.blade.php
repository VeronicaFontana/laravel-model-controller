@extends("layouts.main")

@section("content")

    <h1 class="text-center">Dettagli</h1>
    <div class="container d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $movie->title }}</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie->original_title }}</h6>

                @if(($movie->nationality) == "american")
                    <p class="card-text"><b>Nazionalità:</b> Americana</p>
                @else
                <p class="card-text"><b>Nazionalità:</b> Americana/Inglese </p>
                @endif

                <p class="card-text"><b>Data d'uscita:</b> {{ $movie->date }}</p>
                <p class="card-text"><b>Voto:</b> {{ $movie->vote }}</p>
            </div>
        </div>
    </div>

@endsection
