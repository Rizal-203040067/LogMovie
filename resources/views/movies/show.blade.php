<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <a href="/movie/{{ $movie->slug }}">{{ $movie->title }}</a>
    <a href="/movie?category={{ $movie->category->name}}" class="text-decoration-none">{{ $movie->category->name}}</a>
    <p>{{ $movie->overview }}</p>
    <p>{{ $movie->popularity }}</p>
    @if ($movie->poster_path || Storage::exists('public/' . $movie->poster_path))
        <img src="{{ asset('storage/' . $movie->poster_path) }}" alt="{{ $movie->title }}" class="img-fluid">
    @else
        <img src="https://image.tmdb.org/t/p/w200/{{ $movie->poster_path }}" alt="{{ $movie->title }}">
    @endif
</body>
</html>
