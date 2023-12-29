@extends('layouts.main')

@section('container')

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
            <a href="#" class="bg-emerald-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Movies</a>
            <a href="#" class="text-emerald-300 hover:bg-emerald-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Tv Show</a>
            <a href="#" class="text-emerald-300 hover:bg-emerald-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">People</a>
            <a href="#" class="text-emerald-300 hover:bg-emerald-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">More</a>
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
<section class="inner_content_new_index">
  <div id="media_v4" class="media discoverx">
    <div class="column_wrapoer">
      <div class="content_wrapper wrap">
        <div class="title">
          <h1>Welcome.</h1>
          <h2>Million of movies, TV show and people to discover. Explore now</h2>
        </div>
        <div class ="search">
          <form id="inner_search_from" action="/search" method="get" accept-charset="utf-8">
            <label>
              <input dir="auto" id="inner_search_4" name="query" type="text" tabindex="1" autocorrect="off" autofill="off" autocomplete="off" spellcheck="false" placeholder="Search for a movie, TV show, person......" value>
            </label>
            <input type="submit" value="search">
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

</nav>

<head>
  <br>
    <h1>Trending</h1>
      <div class="selector_wrap">
        <div class="selector">
          <div class="anchor selected">
            <h2>
              <a href="#" class="no_click" data-panel="trending_scroller" data-group="today">
                "Today"
                <span class="glyphicons_v2 chevron-down"></span>
              </a>
            </h2>
            <div class="background" style="left: 0px; width: 81.5938px">
            </div>
          </div>
        </div>
        <div class="anchor">
          <h2>
            <a href="#" class="no_click" data-panel="trending_scroller" data-group="this-week">
              "This Week"
              <span class="glyphicons_v2 chevron-down"></span>
            </a>
          </h2>
        </div>
      </div>

</head>


<br>
</head>

<main>
  <section>
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

  <br>
  <br>
  <br>
  <br>

<head>
  <br>
    <h1>Latest Trailer</h1>
      <div class="selector_wrap">
        <div class="selector">
          <div class="anchor selected">
            <h2>
              <a href="#" class="no_click" data-panel="trending_scroller" data-group="popular">
                "Popular"
                <span class="glyphicons_v2 chevron-down"></span>
              </a>
            </h2>
            <div class="background" style="left: 0px; width: 81.5938px">
          </div>
        </div>
        <div class="anchor">
          <h2>
            <a href="#" class="no_click" data-panel="trending_scroller" data-group="trending">
              "Trending"
              <span class="glyphicons_v2 chevron-down"></span>
            </a>
          </h2>
          <div class="anchor">
            <h2>
              <a href="#" class="no_click" data-panel="trending_scroller" data-group="on-tv">
                "On TV"
                <span class="glyphicons_v2 chevron-down"></span>
              </a>
            </h2>
            <div class="anchor">
              <h2>
                <a href="#" class="no_click" data-panel="trending_scroller" data-group="for-rent">
                  "For rent"
                  <span class="glyphicons_v2 chevron-down"></span>
                </a>
              </h2>
              <div class="anchor">
                <h2>
                  <a href="#" class="no_click" data-panel="trending_scroller" data-group="in-theaters">
                    "In Theaters"
                    <span class="glyphicons_v2 chevron-down"></span>
                  </a>
                </h2>
      </div>

<br>
</head>
<br>
  <section>
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

  <br>
  <br>
  <br>
  <br>

  <head>
    <br>
      <h1>What`s Popular</h1>
        <div class="selector_wrap">
          <div class="selector">
            <div class="anchor selected">
              <h2>
                <a href="#" class="no_click" data-panel="trending_scroller" data-group="streaming">
                  "Streaming"
                  <span class="glyphicons_v2 chevron-down"></span>
                </a>
              </h2>
              <div class="background" style="left: 0px; width: 81.5938px">
            </div>
          </div>
          <div class="anchor">
            <h2>
              <a href="#" class="no_click" data-panel="trending_scroller" data-group="on-tv">
                "On TV"
                <span class="glyphicons_v2 chevron-down"></span>
              </a>
            </h2>
            <div class="anchor">
              <h2>
                <a href="#" class="no_click" data-panel="trending_scroller" data-group="for-rent">
                  "For Rent"
                  <span class="glyphicons_v2 chevron-down"></span>
                </a>
              </h2>
              <div class="anchor">
                <h2>
                  <a href="#" class="no_click" data-panel="trending_scroller" data-group="in-theaters">
                    "In Theaters"
                    <span class="glyphicons_v2 chevron-down"></span>
                  </a>
                </h2>
        </div>
  <br>
  </head>
  <br>
  <section>
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

  <br>
  <br>
  <br>
  <br>

  <head>
    <br>
      <h1>Free To Watch</h1>
        <div class="selector_wrap">
          <div class="selector">
            <div class="anchor selected">
              <h2>
                <a href="#" class="no_click" data-panel="trending_scroller" data-group="movies">
                  "Movies"
                  <span class="glyphicons_v2 chevron-down"></span>
                </a>
              </h2>
              <div class="background" style="left: 0px; width: 81.5938px">
            </div>
          </div>
          <div class="anchor">
            <h2>
              <a href="#" class="no_click" data-panel="trending_scroller" data-group="tv">
                "TV"
                <span class="glyphicons_v2 chevron-down"></span>
              </a>
            </h2>
        </div>

  <br>
  </head>
  <br>
  <section>
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