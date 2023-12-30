<div>
    @csrf
    <h1>{{ $movie->title }}</h1>
    <p><strong>Overview:</strong> {{ $movie->overview }}</p>
    <p><strong>Popularity:</strong> {{ $movie->popularity }}</p>
    <p><strong>Release Date:</strong> {{ $movie->release_date }}</p>
    <p>{{ $movie->category->name}}</p>

    @if($movie->poster_path)
        <img src="{{ asset('storage/' . $movie->poster_path) }}" alt="{{ $movie->title }}" class="img-fluid">
    @else
        <img src="https://image.tmdb.org/t/p/w200/{{ $movie->poster_path }}" alt="{{ $movie->title }}">
    @endif
    <!-- Tambahkan elemen HTML atau informasi lain sesuai kebutuhan -->
</div>
