
@csrf
    <div class="container">
        <h1>{{ $movie->title }}</h1>
        <p>Release Date: {{ $movie->release_date }}</p>
        
        <p>Overview: {{ $movie->overview }}</p>
        <!-- Add more details as needed -->

        <img src="{{ asset('storage/' . $movie->poster_path) }}" alt="Movie Poster" width="200">
        <!-- Adjust the path to the poster based on your storage configuration -->
        
        {{-- Example of a back button to the index page --}}
        <a href="{{ route('dashboard.index') }}">Back to List</a>
    </div>
