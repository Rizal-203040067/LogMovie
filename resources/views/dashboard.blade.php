@extends('layouts.main')

@section('container')
<head>
  
  <h1>Welcome</h1>
  <h2>Millions of movies in all time is ready to discover. Explore now.</h2>

  <form>   
      <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
      <div class="relative">
          <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
              <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
              </svg>
          </div>
          <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required>
          <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
      </div>
  </form>

</head>

<main class="space-y-10">
  <section>
    <h1>Trending</h1>
    <div class="flex overflow-x-scroll">
        <img class="w-60 mr-2 " src="https://www.themoviedb.org/t/p/original/l2bqoY9rgPAgugPkOTowIPIv61j.jpg" alt="" >
        <img class="w-60 mr-2 " src="https://www.themoviedb.org/t/p/original/l2bqoY9rgPAgugPkOTowIPIv61j.jpg" alt="" >
        <img class="w-60 mr-2 " src="https://www.themoviedb.org/t/p/original/l2bqoY9rgPAgugPkOTowIPIv61j.jpg" alt="" >
        <img class="w-60 mr-2 " src="https://www.themoviedb.org/t/p/original/l2bqoY9rgPAgugPkOTowIPIv61j.jpg" alt="" >
        <img class="w-60 mr-2 " src="https://www.themoviedb.org/t/p/original/l2bqoY9rgPAgugPkOTowIPIv61j.jpg" alt="" >
        <img class="w-60 mr-2 " src="https://www.themoviedb.org/t/p/original/l2bqoY9rgPAgugPkOTowIPIv61j.jpg" alt="" >
        <img class="w-60 mr-2 " src="https://www.themoviedb.org/t/p/original/l2bqoY9rgPAgugPkOTowIPIv61j.jpg" alt="" >
        <img class="w-60 mr-2 " src="https://www.themoviedb.org/t/p/original/l2bqoY9rgPAgugPkOTowIPIv61j.jpg" alt="" >
    </div>
  </section>

  <section>
    <h1>Trending</h1>
    <div class="flex overflow-x-scroll">
        <img class="w-60 mr-2 " src="https://www.themoviedb.org/t/p/original/l2bqoY9rgPAgugPkOTowIPIv61j.jpg" alt="" >
        <img class="w-60 mr-2 " src="https://www.themoviedb.org/t/p/original/l2bqoY9rgPAgugPkOTowIPIv61j.jpg" alt="" >
        <img class="w-60 mr-2 " src="https://www.themoviedb.org/t/p/original/l2bqoY9rgPAgugPkOTowIPIv61j.jpg" alt="" >
        <img class="w-60 mr-2 " src="https://www.themoviedb.org/t/p/original/l2bqoY9rgPAgugPkOTowIPIv61j.jpg" alt="" >
        <img class="w-60 mr-2 " src="https://www.themoviedb.org/t/p/original/l2bqoY9rgPAgugPkOTowIPIv61j.jpg" alt="" >
        <img class="w-60 mr-2 " src="https://www.themoviedb.org/t/p/original/l2bqoY9rgPAgugPkOTowIPIv61j.jpg" alt="" >
        <img class="w-60 mr-2 " src="https://www.themoviedb.org/t/p/original/l2bqoY9rgPAgugPkOTowIPIv61j.jpg" alt="" >
        <img class="w-60 mr-2 " src="https://www.themoviedb.org/t/p/original/l2bqoY9rgPAgugPkOTowIPIv61j.jpg" alt="" >
    </div>
  </section>

  <section>
    <h1>Trending</h1>
    <div class="flex overflow-x-scroll">
        <img class="w-60 mr-2 " src="https://www.themoviedb.org/t/p/original/l2bqoY9rgPAgugPkOTowIPIv61j.jpg" alt="" >
        <img class="w-60 mr-2 " src="https://www.themoviedb.org/t/p/original/l2bqoY9rgPAgugPkOTowIPIv61j.jpg" alt="" >
        <img class="w-60 mr-2 " src="https://www.themoviedb.org/t/p/original/l2bqoY9rgPAgugPkOTowIPIv61j.jpg" alt="" >
        <img class="w-60 mr-2 " src="https://www.themoviedb.org/t/p/original/l2bqoY9rgPAgugPkOTowIPIv61j.jpg" alt="" >
        <img class="w-60 mr-2 " src="https://www.themoviedb.org/t/p/original/l2bqoY9rgPAgugPkOTowIPIv61j.jpg" alt="" >
        <img class="w-60 mr-2 " src="https://www.themoviedb.org/t/p/original/l2bqoY9rgPAgugPkOTowIPIv61j.jpg" alt="" >
        <img class="w-60 mr-2 " src="https://www.themoviedb.org/t/p/original/l2bqoY9rgPAgugPkOTowIPIv61j.jpg" alt="" >
        <img class="w-60 mr-2 " src="https://www.themoviedb.org/t/p/original/l2bqoY9rgPAgugPkOTowIPIv61j.jpg" alt="" >
    </div>
  </section>

  <section>
    <h1>Trending</h1>
    <div class="flex overflow-x-scroll">
        <img class="w-60 mr-2 " src="https://www.themoviedb.org/t/p/original/l2bqoY9rgPAgugPkOTowIPIv61j.jpg" alt="" >
        <img class="w-60 mr-2 " src="https://www.themoviedb.org/t/p/original/l2bqoY9rgPAgugPkOTowIPIv61j.jpg" alt="" >
        <img class="w-60 mr-2 " src="https://www.themoviedb.org/t/p/original/l2bqoY9rgPAgugPkOTowIPIv61j.jpg" alt="" >
        <img class="w-60 mr-2 " src="https://www.themoviedb.org/t/p/original/l2bqoY9rgPAgugPkOTowIPIv61j.jpg" alt="" >
        <img class="w-60 mr-2 " src="https://www.themoviedb.org/t/p/original/l2bqoY9rgPAgugPkOTowIPIv61j.jpg" alt="" >
        <img class="w-60 mr-2 " src="https://www.themoviedb.org/t/p/original/l2bqoY9rgPAgugPkOTowIPIv61j.jpg" alt="" >
        <img class="w-60 mr-2 " src="https://www.themoviedb.org/t/p/original/l2bqoY9rgPAgugPkOTowIPIv61j.jpg" alt="" >
        <img class="w-60 mr-2 " src="https://www.themoviedb.org/t/p/original/l2bqoY9rgPAgugPkOTowIPIv61j.jpg" alt="" >
    </div>
  </section>

  <div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
    <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-y=.8&w=2830&h=1500&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center">
    <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl" aria-hidden="true">
      <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu" aria-hidden="true">
      <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto max-w-2xl lg:mx-0">
        <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Join Today</h2>
        <p class="mt-6 text-lg leading-8 text-gray-300">Get access to maintain your own custom personal lists, track what you've seen and search and filter for what to watch next—regardless if it's in theatres, on TV or available on popular streaming services like Netflix, iflix, Viu, Hotstar, and Catchplay.</p>
      </div>
      <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
        <div class="grid grid-cols-1 gap-x-8 gap-y-6 text-base font-semibold leading-7 text-white sm:grid-cols-2 md:flex lg:gap-x-10">
          <a href="#">Sign Up<span aria-hidden="true">&rarr;</span></a>
        </dl>
      </div>
    </div>
  </div>
</main>

@endsection