<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <h1>Movies</h1>
    <ul>
        @foreach ($movies as $movie)
            <a href="{{ route('movies.show', ['id' => $movie['id']]) }}">{{ $movie['title'] }}</a>
            <img src="https://image.tmdb.org/t/p/w200/{{ $movie['poster_path'] }}" alt="{{ $movie['title'] }}">
            <img src="https://image.tmdb.org/t/p/w200/{{ $movie['backdrop_path'] }}" alt="{{ $movie['title'] }}">
            <li>{{ $movie['overview']}}</li>
            <li>{{ $movie['popularity']}}</li>
            <li>{{ $movie['release_date']}}</li>
            {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $movie['key'] }}" frameborder="0" allowfullscreen></iframe> --}}
        @endforeach
        {{-- Tampilkan video dari data yang diterima --}}
    </ul>
    <ul>
    <a class="nav-link" href="{{ route('password.update') }}">Update Password</a>
    <a href="{{ url('/logout') }}">logout</a>
    <a class="nav-link" href="{{ route('account.delete.form') }}">Delete Account</a>
    </ul>
</body>
</html>
