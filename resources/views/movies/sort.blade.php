@extends('layouts.main')

@section('container')
    
<h1 class="text-3xl pl-6 py-6 font-bold">Sort All Movies</h1>

<div class="flex flex-row mx-6 space-x-6 pb-6">
  <aside class="basis-3/12 space-y-6">
    <div class="card shadow grid grid-cols-1 divide-y rounded-lg">
      <header class="text-xl font-bold p-3">Filters</header>
      <div class="divide-y space-y-4">
        <div class="p-3">
          <legend>Sort By</legend>
          
          <input id="sortByName" class="peer/sortByName" type="radio" name="sort" {{ request('sort') === 'title' ? 'checked' : '' }} />
          <label for="sortByName" class="peer-checked/sortByName:text-sky-500">
            <a href="{{ route('movies.sort', ['sort' => 'title', 'direction' => request('direction') === 'asc' ? 'desc' : 'asc']) }}">Name</a>
          </label><br>
          
          <input id="sortByDate" class="peer/sortByDate" type="radio" name="sort" {{ request('sort') === 'release_date' ? 'checked' : '' }} />
          <label for="sortByDate" class="peer-checked/sortByDate:text-sky-500">
            <a href="{{ route('movies.sort', ['sort' => 'release_date', 'direction' => request('direction') === 'asc' ? 'desc' : 'asc']) }}">Date</a>
          </label><br>
    
          <div class="hidden peer-checked/sortByName:block">
            <!-- Handle sorting by name logic here -->
            <!-- This is where you display content sorted by name -->
          </div>
          <div class="hidden peer-checked/sortByDate:block">
            <!-- Handle sorting by date logic here -->
            <!-- This is where you display content sorted by date -->
          </div>
        </div>
      </div>
    </div>
  </aside>
  
  <main class="basis-9/12 grid grid-cols-4 gap-6">
    @foreach ($movies as $movie) 
    <a href="/movie/{{ $movie->slug }}" class="flex flex-col items-start card shadow-md rounded-b-lg">
        <img class="rounded-t-lg" src="https://www.themoviedb.org/t/p/original/{{ $movie->poster_path }}" alt="{{ $movie->title }}">
        <div class="mx-4 my-2">
            <p class="text-sm text-white font-semibold text-gega-melon">{{ $movie->title }}</p>
            <p class="text-sm text-white text-gega-melon mt-2">{{ strftime('%e, %b %Y', strtotime($movie->release_date)) }}</p>
        </div>
    </a>
    @endforeach
</main>

</div>
@endsection

