@extends("layouts.main")

@section("content")

    <h1>Movies</h1>
    <div class="container d-flex flex-wrap">
        @foreach ($movies as $movie)
            <div class="card m-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <p class="card-text">Voto: {{ $movie->vote }}</p>
                    <a href="{{ route("details", ["id" => $movie->id]) }}" class="btn btn-primary">Info</a>
                </div>
            </div>
        @endforeach
    </div>

@endsection
