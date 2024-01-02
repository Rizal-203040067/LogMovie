@extends('layouts.main')
@section('container')

<head>
{{-- Section --}}

<section class="h-98 lg:h-128 group relative">

  <!--Hero Image-->

  <img src="https://www.themoviedb.org/t/p/original/{{ $movie->backdrop_path }}" alt="{{ $movie->title }}" class="w-full object-cover object-top max-h-[600px]">

  <!--Hero Content-->
  <div class="absolute bottom-0 w-full bg-gradient-to-b from-transparent to-black">

    <!--Hero Content Container-->
    
    <div class="container p-10 flex items-center">
    <div class="ml-[10%] mb-[10%] max-w-[15%] border-2 rounded-md group-hover:opacity-80 max-h-70 overflow-hidden">
        <img src="https://www.themoviedb.org/t/p/original/{{ $movie->poster_path }}" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full rounded-lg">
      </div>
    
      <div class="pl-10 lg:pl-0 text-white space-x-11 mb-[6%]"> <!-- Tambahkan margin atas di sini -->
        <h1 class="ml-10 mb-1 text-3xl lg:text-6xl text-gega-grey group-hover:mb-1 duration-500">
          <a href="/movie/{{ $movie->slug }}">{{ $movie->title }}</a>
        </h1>
        <h3 class="font-semibold text-gega-melon tracking-wider group-hover:mb-1 duration-500">
          {{ strftime('%e %B %Y', strtotime($movie->release_date)) }}
        </h3>   
        <button class="bg-transparen rounden-full border-2 middle m-3 none center mr-4 rounded-xl px-2 shadow-md transition-all"  data-ripple-light="true">
          <a href="/movie?category={{ $movie->category->name}}" class="text-gega-melon text-white text-sm ">{{ $movie->category->name}}</a>
        </button>       

        </h3>   
        <h2 class="font-bold text-gega-melon-10 tracking-wider group-hover:mb-1 duration-500">Overview :</h2>     
        <p class="text-gega-grey group-hover:mb-2 duration-500 text-sm lg:text-base w-3/4 lg:w-2/3 mt-1">{{ $movie->overview }}</p>
        <!--Container Detail-->
        <div class="flex space-x-8 opacity-0 group-hover:opacity-100 group-hover:mb-10 lg:group-hover:mb-20 duration-1000">
          <!--Container/Watch-->
          <div class="flex space-x-2 items-center cursor-pointer">
            <a href="https://www.youtube.com/watch?v=fhr3MzT6exg&pp=ygUTcmViZWwgbW9vbiB0cmFpbGVyIA%3D%3D" class="text-gega-grey uppercase lg:text-lg hover:text-gega-red duration-500"> Watch Trailer</a>
            <!--Watch Trailer Button-->
            <div class="flex h-8 w-8 text-center items-center rounded-full justify-center bg-gega-red text-gega-grey">
              <i class="fas fa-play"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>

</section>

{{-- Description --}}
<section class="flex flex-row-reverse mx-6 space-x-6 pb-6">
  <div class="basis-3/12 space-y-6">
    <div class="px-4 m-auto mt-10">
        <h1 class="text-left font-semibold text-3xl">Description</h1>
        <ul class="overflow-hidden mt-5">
            <li class="px-4 py-2 hover:text-sky-900 last:border-none transition-all duration-300 ease-in-out font-bold">Aktor</li>
            <li class="px-4 py-2 hover:text-sky-900 border-b last:border-none border-gray-200 transition-all duration-300 ease-in-out">Sofia Boutella, Michiel Huisman, Ed Skrein, Djimon Hounsou, Bae Doona, Staz Nair, Charlie Hunnam, Ray Fisher, Cleopatra Coleman, Anthony Hopkins, Fra Fee, E. Duffy, Jena Malone, Rhian Rees, Alfonso Herrera, Cary Elwes</li>
            <li class="px-4 py-2 hover:text-sky-900  last:border-none border-gray-200 transition-all duration-300 ease-in-out font-semibold">Sutradara</li>
            <li class="px-4 py-2 hover:text-sky-900 border-b last:border-none border-gray-200 transition-all duration-300 ease-in-out">Zack Snyder</li>
            <li class="px-4 py-2 hover:text-sky-900  last:border-none border-gray-200 transition-all duration-300 ease-in-out font-bold">Studio</li>
            <li class="px-4 py-2 hover:text-sky-900 border-b last:border-none border-gray-200 transition-all duration-300 ease-in-out">Grand Electric · The Stone Quarry</li>
            <li class="px-4 py-2 hover:text-sky-900 border-b last:border-none border-gray-200 transition-all duration-300 ease-in-out"></li>
        </ul>
    </div>

  {{-- Category --}}
  
    <div class="px-1 space-x-20">
      <h1 class="text-4xl lg:text-2xl text-gega-grey group-hover:mb-1 duration-500 mt-3 mb-5 ml-3 font-semibold ">
        Category
      </h1>
    </div>
    <button class="bg-transparen rounden-full border-2 middle m-3 none center mr-4 rounded-xl px-2 shadow-md transition-all"  data-ripple-light="true">
      <a href="/category={{ $movie->category->name}}" class="text-gega-melon text-white text-sm ">{{ $movie->category->name}}</a>
    </button>
    <button class="middle none center mr-4 rounded-lg bg-gray-300 py-3 px-6 font-sans text-xs  text-black shadow-md transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
      data-ripple-light="true">
      Adventure
    </button>
    <button class="middle none center mr-4 rounded-lg bg-gray-300 py-3 px-6 font-sans text-xs   text-black shadow-md  transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
      data-ripple-light="true">
      Drama
    </button>
    <button class="middle none center ml-6  rounded-lg bg-gray-300 py-3 px-6 font-sans text-xs   text-black shadow-md  transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
      data-ripple-light="true">
      Fantasy
    </button>
    <button class="middle none center ml-3 rounded-lg bg-gray-300 py-3 px-6 font-sans text-xs   text-black shadow-md  transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
      data-ripple-light="true">
      Sci-Fi
    </button>
  </div>
  
  <main class="basis-9/12 gap-6">
    <div class="mt-10 border-t-2 dark:border-gray-200">
      {{-- Trailler --}}
      <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 lg:max-w-7xl lg:px-8">
        <h1 class="text-left mb-4 font-semibold text-3xl">Movie</h1>
          
        <div class="flex gap-4">
          @foreach ($movies as $movie) 
            <a href="/movie/{{ $movie->slug }}">  
              <div class="group relative">
                <img src="https://www.themoviedb.org/t/p/original/{{ $movie->poster_path }}" alt="{{ $movie->title }}" class="h-98 w-full rounded-md object-cover object-center">
                <div class="mt-3">
                  <p class="text-sm text-white font-semibold text-gega-melon">{{ $movie->title }}</p>
                  <p class="text-sm text-white text-gega-melon mt-2">{{ strftime('%e, %b %Y', strtotime($movie->release_date)) }}</p>
                </div>
              </div>
            </a>
          @endforeach
        </div>
      </div>
    </div>
        </div>
    </div>         
            <!-- More products... -->
          </div>
        </div>
      </div>
    </div>
  </main>
  
</section>
@endsection
</body>
</html>
