<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
    @vite('resources/css/app.css')
</head>
<body>
    <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-white">
  <body class="h-full">
  ```
-->
<nav class="bg-emerald-800">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-emerald-400 hover:bg-emerald-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span class="absolute -inset-0.5"></span>
          <span class="sr-only">Open main menu</span>
          <!--
            Icon when menu is closed.

            Menu open: "hidden", Menu closed: "block"
          -->
          <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <!--
            Icon when menu is open.

            Menu open: "block", Menu closed: "hidden"
          -->
          <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex flex-shrink-0 items-center">
          <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
        </div>
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">
            <!-- Current: "bg-emerald-900 text-white", Default: "text-emerald-300 hover:bg-emerald-700 hover:text-white" -->
            <a href="#" class="bg-emerald-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Dashboard</a>
            <a href="#" class="text-emerald-300 hover:bg-emerald-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Team</a>
            <a href="#" class="text-emerald-300 hover:bg-emerald-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Projects</a>
            <a href="#" class="text-emerald-300 hover:bg-emerald-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Calendar</a>
          </div>
        </div>
      </div>
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <button type="button" class="relative rounded-full bg-emerald-800 p-1 text-emerald-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-emerald-800">
          <span class="absolute -inset-1.5"></span>
          <span class="sr-only">View notifications</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
          </svg>
        </button>

        <!-- Profile dropdown -->
        <div class="relative ml-3">
          <div>
            <button type="button" class="relative flex rounded-full bg-emerald-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-emerald-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">Open user menu</span>
              <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </button>
          </div>

          <!--
            Dropdown menu, show/hide based on menu state.

            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"
          -->
          <div class="hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
            <!-- Active: "bg-emerald-100", Not Active: "" -->
            <a href="#" class="block px-4 py-2 text-sm text-emerald-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
            <a href="#" class="block px-4 py-2 text-sm text-emerald-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
            <a href="#" class="block px-4 py-2 text-sm text-emerald-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Mobile menu, show/hide based on menu state. -->
  <div class="sm:hidden" id="mobile-menu">
    <div class="space-y-1 px-2 pb-3 pt-2">
      <!-- Current: "bg-emerald-900 text-white", Default: "text-emerald-300 hover:bg-emerald-700 hover:text-white" -->
      <a href="#" class="bg-emerald-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Dashboard</a>
      <a href="#" class="text-emerald-300 hover:bg-emerald-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Team</a>
      <a href="#" class="text-emerald-300 hover:bg-emerald-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Projects</a>
      <a href="#" class="text-emerald-300 hover:bg-emerald-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Calendar</a>
    </div>
  </div>
</nav>

{{-- Section --}}

<section class="h-98 lg:h-128 group relative">

  <!--Hero Image-->

  <img src="https://www.themoviedb.org/t/p/original/sRLC052ieEzkQs9dEtPMfFxYkej.jpg" alt="" class="h-full w-full object-cover">

  <!--Hero Content-->

  <div class="absolute bottom-0 w-full bg-gradient-to-b from-transparent to-black">

    <!--Hero Content Container-->

    <div class="container pl-10 lg:pl-0 text-white space-x-11">
      <h1 class="ml-10 mb-1 text-4xl lg:text-6xl text-gega-grey group-hover:mb-1 duration-500">
        Rebel Moon - Part One: A Child of Fire (2023)
      </h1>
      <h3 class=" font-semibold text-gega-melon tracking-wider group-hover:mb-1 duration-500">
        15/12/2023 (US)
        2h 14m
      </h3>
      <p class="text-gega-grey group-hover:mb-2 duration-500 text-sm lg:text-base w-3/4 lg:w-2/3 mt-1">
        When a peaceful colony on the edge of the galaxy finds itself threatened by the armies of the tyrannical Regent Balisarius, they dispatch Kora,
        a young woman with a mysterious past, to seek out warriors from neighboring planets to help them take a stand.
      </p>

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
  <div class="flex space-x-3 absolute bottom-5 left-10 opacity-0 group-hover:opacity-100 duration-1000">
    <div class="w-3 h-3 lg:w-4 lg:h-4 rounded-full bg-gega-red"></div>
    <div class="w-3 h-3 lg:w-4 lg:h-4 rounded-full bg-gega-grey"></div>
    <div class="w-3 h-3 lg:w-4 lg:h-4 rounded-full bg-gega-grey"></div>
    <div class="w-3 h-3 lg:w-4 lg:h-4 rounded-full bg-gega-grey"></div>
  </div>
</section>

{{-- Description --}}
<section class="flex flex-row-reverse mx-6 space-x-6 pb-6">
  <div class="basis-3/12 space-y-6">
    <div class="px-4 m-auto mt-10">
        <h1 class="text-left font-semibold text-4xl">Description</h1>
        <ul class="overflow-hidden mt-5">
            <li class="px-4 py-2 bg-white  hover:text-sky-900 last:border-none transition-all duration-300 ease-in-out font-bold">Aktor</li>
            <li class="px-4 py-2 bg-white  hover:text-sky-900 border-b last:border-none border-gray-200 transition-all duration-300 ease-in-out">Sofia Boutella, Michiel Huisman, Ed Skrein, Djimon Hounsou, Bae Doona, Staz Nair, Charlie Hunnam, Ray Fisher, Cleopatra Coleman, Anthony Hopkins, Fra Fee, E. Duffy, Jena Malone, Rhian Rees, Alfonso Herrera, Cary Elwes</li>
            <li class="px-4 py-2 bg-white  hover:text-sky-900  last:border-none border-gray-200 transition-all duration-300 ease-in-out font-semibold">Sutradara</li>
            <li class="px-4 py-2 bg-white  hover:text-sky-900 border-b last:border-none border-gray-200 transition-all duration-300 ease-in-out">Zack Snyder</li>
            <li class="px-4 py-2 bg-white  hover:text-sky-900  last:border-none border-gray-200 transition-all duration-300 ease-in-out font-bold">Studio</li>
            <li class="px-4 py-2 bg-white  hover:text-sky-900 border-b last:border-none border-gray-200 transition-all duration-300 ease-in-out">Grand Electric · The Stone Quarry</li>
            <li class="px-4 py-2 bg-white  hover:text-sky-900 border-b last:border-none border-gray-200 transition-all duration-300 ease-in-out"></li>
        </ul>
    </div>

  {{-- Category --}}

    <div class="px-1 space-x-20">
      <h1 class="text-4xl lg:text-2xl text-gega-grey group-hover:mb-1 duration-500 mt-3 mb-5 ml-3 font-semibold ">
        Category
      </h1>
    </div>
    <button class="middle none center ml-6 mr-4 rounded-lg bg-gray-300  py-3 px-6 font-sans text-xs text-black transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
      data-ripple-light="true">
      Action
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
    <div class="mt-12 border-t-2 dark:border-gray-300">
      <div class="grid grid-cols-7 pt-12">
        <h2 class="text-gray-900 text-3xl lg:text-2xl font-semibold ">Media</h2>
        <a href="#" class="text-gray-900 text-1xl lg:text-2xl">Most Popular</a>
        <a href="#" class="text-gray-900 text-1xl lg:text-2xl text-center">Videos</a>
        <a href="#" class="text-gray-900 text-1xl lg:text-2xl ">Backdrops</a>
        <a href="#" class="text-gray-900 text-1xl lg:text-2xl ">Poster</a>
      </div>

      {{-- Trailler --}}

      <div class="m-auto mt-5 mr-10">
        <div class="grid grid-cols-3 gap-4">
          <div class="flex justify-center">
            <iframe src="https://www.youtube.com/embed/9ndAWly20jw?controls=0" class="w-96 h-64"></iframe>
          </div>
          <div class="flex justify-start">
            <iframe src="https://www.youtube.com/embed/_rHLOXbFZtI?controls=0" class="w-96 h-64"></iframe>
          </div>
          <div class="flex flex-row ">
            <iframe src="https://www.youtube.com/embed/fhr3MzT6exg?controls=0" class="w-96 h-64"></iframe>
          </div>
        </div>
      </div>
    </div>
  </main>
</section>

<script src="js/script.js"></script>
</body>
</html>