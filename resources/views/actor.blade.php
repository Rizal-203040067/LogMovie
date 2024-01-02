@extends('layouts.main')
@section('container')
<body>
    <section class="m-20 grid grid-cols-5 gap-8">
        <h1 class="text-left font-semibold text-3xl m-8 col-span-full">Actor</h1>
        @foreach ($actors as $actor)
            <div class="group relative p-4">
                <img src="https://www.themoviedb.org/t/p/original/{{ $actor['profile_path'] }}" alt="{{ $actor['name'] }}" class="mr-2 w-full h-50 rounded-md object-cover object-center">
                <div class="mt-3">
                    <p class="text-sm text-white font-semibold text-gega-melon">Name: {{ $actor['name'] }}</p>
                    <p class="text-sm text-white font-semibold text-gega-melon">Popularity: {{ $actor['popularity'] }}</p>
                </div>
            </div>
        @endforeach
    </section>    
    
</body>
</html>
@endsection