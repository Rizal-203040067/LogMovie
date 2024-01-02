@foreach ($movies as $movie)
    <h2>{{ $movie['title'] }}</h2>
    <p>{{ $movie['overview'] }}</p>
@endforeach
