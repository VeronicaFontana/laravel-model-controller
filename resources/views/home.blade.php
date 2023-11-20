@extends("layouts.main")

@section("content")

    <h1>Home</h1>
    <div class="container d-flex flex-wrap">
        @foreach ($movies as $movie)
            <div class="card m-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <p class="card-text">{{ $movie->nationality }}</p>
                    <p class="card-text">{{ $movie->vote }}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        @endforeach

    </div>

@endsection
