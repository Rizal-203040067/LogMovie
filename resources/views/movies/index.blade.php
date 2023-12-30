<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <h1>Movies</h1>
    <form action="/" method="get">
        @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request("search") }}">
            <button class="btn btn-outline-danger" type="submit">Search</button>
        </div>
    </form>
    <ul>
        @foreach ($movies as $movie)
            <li>
                <a href="/movie/{{ $movie->slug }}">{{ $movie->title }}</a>
                @if ($movie->poster_path && Storage::exists('public/' . $movie->poster_path))
                    <img src="{{ asset('storage/' . $movie->poster_path) }}" alt="{{ $movie->title }}" class="img-fluid">
                @else
                    <img src="https://image.tmdb.org/t/p/w200/{{ $movie->poster_path }}" alt="{{ $movie->title }}">
                @endif

                <img src="https://image.tmdb.org/t/p/w200/{{ $movie->backdrop_path }}" alt="{{ $movie->title }}">
                <p>{{ $movie->overview }}</p>
                <p>{{ $movie->popularity }}</p>
                <p>{{ $movie->release_date }}</p>
                {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $movie->key }}" frameborder="0" allowfullscreen></iframe> --}}
            </li>
        @endforeach
    </ul>

    <ul>
        <a href="{{ url('/login')}}">Login</a>
        <a class="nav-link" href="{{ route('password.update') }}">Update Password</a>
        <a href="{{ url('/logout') }}">Logout</a>
        <a class="nav-link" href="{{ route('account.delete.form') }}">Delete Account</a>

        <form action="/dashboard/{{ $movie->slug }}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger" onclick="return confirm('Are You Sure!!')"><i class="bi bi-x-circle"></i>
                Delete</button>
            <input type="hidden" name="slug" value="{{ $movie->slug }}">
        </form>

        @auth
            <li class="nav-item">
                <a class="nav-link" href="{{ url('dashboard') }}">Dashboard</a>
            </li>
        @endauth
    </ul>
</body>
</html>
