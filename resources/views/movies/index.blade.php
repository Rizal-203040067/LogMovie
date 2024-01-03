@extends('layouts.main')
@section('container')

<body>
  <section class="movie-section">
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-10 overflow-hidden rounded-lg md:h-96">
        @foreach ($movies as $movie)
            <!-- Item 1 -->
            <div class="hidden duration-900 ease-in-out" data-carousel-item>
                <img src="https://www.themoviedb.org/t/p/original/{{ $movie->backdrop_path }}" alt="{{ $movie->title }}" class="absolute block w-full object-top object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2  w-full object-cover object-top max-h-[450px] filter brightness-50" alt="...">
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="container p-10 text-white space-x-11 mt-[10%]">
                        <!-- Tambahkan margin atas di sini -->
                        <h2 id="welcomeText{{$loop->iteration}}" class=" font-bold text-[40px] text-gega-grey group-hover:mb-1 duration-700 text-center">
                        </h2>
                        <!--Container Detail-->
                        <div class="flex space-x-8 opacity-0 group-hover:opacity-100 group-hover:mb-10 lg:group-hover:mb-20 duration-1000">
                            <!--Container/Watch-->
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</section>
  <section  class="px-[8%] mt-10">
    <form action="/" method="get" class="relative">
      <label for="default-search" class="mb-2 p-10 text-sm font-medium text-gray-400 sr-only dark:text-white">Search</label>
      <div class="relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
          <svg class="w-4 h-4 text-gray-400 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
          </svg>
        </div>
        <input name="search" value="{{ request("search") }}" type="search" id="default-search" class="block w-full p-4 ps-10 text-m text-gray-900 border border-gray-400 rounded-full bg-gray-200 focus:ring-gray-500 focus:border-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="Search movie...">
        <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-gray-400 hover:bg-gray-500 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-full text-sm px-4 py-2 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Search</button>
      </div>
    </form>
  </section>
<section class="film-section m-20">
  <h1 class="text-left font-semibold text-3xl m-8">Movie</h1>
  <div class="swiper mySwiper my-5">
    <div class="swiper-wrapper my-5">
    @foreach ($movies as $movie)
    <div class="swiper-slide">
      <a href="/movie/{{ $movie->slug }}" class="inline-block mx-4">
        <div class="group relative p-4">
          <img src="./asset/{{ $movie->poster_path }}" alt="{{ $movie->title }}" class="mr-2 rounded-md object-cover object-center">
          <div class="mt-3">
            <p class="text-sm text-white font-semibold text-gega-melon">{{ $movie->title }}</p>
            <p class="text-sm text-white text-gega-melon mt-2">{{ strftime('%e, %b %Y', strtotime($movie->release_date)) }}</p>
          </div>
        </div>
      </a>
      </div>
    @endforeach
      </div>
    </div>
  </div>
</section>
<section class="film-section mx-20">
  <h1 class="text-left font-semibold text-3xl m-8">Terbaru</h1>
  <div class="swiper mySwiper my-0">
      <div class="swiper-wrapper">
          @php
              $latestMovies = $movies->sortByDesc('release_date');
          @endphp

          @foreach ($latestMovies as $movie)
              <div class="swiper-slide">
                  <a href="/movie/{{ $movie->slug }}" class="inline-block mx-4">
                      <div class="group relative p-4">
                        @if(isset($movie->poster_path))
                            <img src="{{ asset('storage/' . $movie->poster_path) }}" alt="{{ $movie->title }}" class="img-fluid">
                        @else
                            <img src="https://image.tmdb.org/t/p/w200/{{ $movie->poster_path }}" alt="{{ $movie->title }}">
                        @endif

                          <div class="mt-3">
                              <p class="text-sm text-white font-semibold text-gega-melon">{{ $movie->title }}</p>
                              <p class="text-sm text-white text-gega-melon mt-2">{{ strftime('%e, %b %Y', strtotime($movie->release_date)) }}</p>
                          </div>
                      </div>
                  </a>
              </div>
          @endforeach
      </div>
  </div>
</section>

  
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    var speed = 150; // milliseconds per character
    var delay = 1000; // delay between repetitions

    function typeWriter(element, text, i) {
        if (i < text.length) {
            element.innerHTML += text.charAt(i);
            i++;
            setTimeout(function () {
                typeWriter(element, text, i);
            }, speed);
        } else {
            setTimeout(function () {
                element.innerHTML = ''; // reset text
                typeWriter(element, text, 0); // start over
            }, delay);
        }
    }

    var carouselItems = document.querySelectorAll('[data-carousel-item]');

    carouselItems.forEach(function (item, index) {
        var welcomeText = document.getElementById('welcomeText' + (index + 1));
        typeWriter(welcomeText, "Mari menjelajahi dunia film bersama Logmovie", 0);
    });

    // Hapus Swiper lama dan inisialisasi Swiper baru
    var swiperContainer = document.querySelector(".swiper-container");
    swiperContainer.swiper.destroy();
    swiperContainer.swiper.init();
    });

    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 5,
        spaceBetween: 20,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

  </script>

@endsection
</body>

</html>