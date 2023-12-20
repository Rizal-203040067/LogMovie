<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
<h2>{{ $movie['title'] }}</h2>
    <div>
        <p>{{ $movie['overview'] }}</p>
        <p>Tanggal Rilis: {{ $movie['release_date'] }}</p>
        <p>Nilai Rata-rata: {{ $movie['vote_average'] }}</p>
        <p>Genres: 
            @if(isset($movie['genres']))
                @foreach($movie['genres'] as $genre)
                    {{ $genre['name'] }}
                    @if(!$loop->last)
                        ,
                    @endif
                @endforeach
            @endif
        </p>

        <!-- Anda dapat menambahkan lebih banyak detail sesuai kebutuhan -->

        @if(isset($movie['videos']['results']) && count($movie['videos']['results']) > 0)
        <h3>Video</h3>
        <ul>
            @foreach($movie['videos']['results'] as $video)
            <li>
                        <iframe width="360" height="215" src="https://www.youtube.com/embed/{{ $video['key'] }}" frameborder="0" allowfullscreen></iframe>
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</body>
</html>