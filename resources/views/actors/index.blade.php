<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actors</title>
</head>
<body>
    <h1>Popular Actors</h1>

    <ul>
        @foreach ($actors as $actor)
        <li>
            <a href="{{ route('actors.show', ['id' => $actor['id']]) }}">
                {{ $actor['name'] }}
            </a>
            <img src="https://image.tmdb.org/t/p/w200/{{ $actor['profile_path'] }}" alt="{{ $actor['profile_path'] }}">
            <p>{{ $actor['known_for_department'] }}</p>
        </li>
        @endforeach
    </ul>
</body>
</html>
