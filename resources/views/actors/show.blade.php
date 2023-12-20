<!-- resources/views/actors/show.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Actor Detail</title>
</head>
<body>
    <h1>{{ $actor['name'] }}</h1>
    <h5>{{ $actor['biography'] }}</h5>
    <h5>{{ $actor['birthday'] }}</h5>
    <h5>{{ $actor['popularity'] }}</h5>
    <img src="https://image.tmdb.org/t/p/w200/{{ $actor['profile_path'] }}" alt="{{ $actor['name'] }}">
    <div>
        
    </div>

    <!-- Tambahkan informasi lain sesuai kebutuhan -->

</body>
</html>
