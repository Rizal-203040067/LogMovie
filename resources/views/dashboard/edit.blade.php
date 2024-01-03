@extends('layouts.main')

@section('container')
<head>
  
  <style>
    /* Compiled dark classes from Tailwind */
    .dark .dark\:divide-gray-700 > :not([hidden]) ~ :not([hidden]) {
      border-color: rgba(55, 65, 81);
    }
    .dark .dark\:bg-gray-50 {
      background-color: rgba(249, 250, 251);
    }
    .dark .dark\:bg-gray-100 {
      background-color: rgba(243, 244, 246);
    }
    .dark .dark\:bg-gray-600 {
      background-color: rgba(75, 85, 99);
    }
    .dark .dark\:bg-gray-700 {
      background-color: rgba(55, 65, 81);
    }
    .dark .dark\:bg-gray-800 {
      background-color: rgba(31, 41, 55);
    }
    .dark .dark\:bg-gray-900 {
      background-color: rgba(17, 24, 39);
    }
    .dark .dark\:bg-red-700 {
      background-color: rgba(185, 28, 28);
    }
    .dark .dark\:bg-green-700 {
      background-color: rgba(4, 120, 87);
    }
    .dark .dark\:hover\:bg-gray-200:hover {
      background-color: rgba(229, 231, 235);
    }
    .dark .dark\:hover\:bg-gray-600:hover {
      background-color: rgba(75, 85, 99);
    }
    .dark .dark\:hover\:bg-gray-700:hover {
      background-color: rgba(55, 65, 81);
    }
    .dark .dark\:hover\:bg-gray-900:hover {
      background-color: rgba(17, 24, 39);
    }
    .dark .dark\:border-gray-100 {
      border-color: rgba(243, 244, 246);
    }
    .dark .dark\:border-gray-400 {
      border-color: rgba(156, 163, 175);
    }
    .dark .dark\:border-gray-500 {
      border-color: rgba(107, 114, 128);
    }
    .dark .dark\:border-gray-600 {
      border-color: rgba(75, 85, 99);
    }
    .dark .dark\:border-gray-700 {
      border-color: rgba(55, 65, 81);
    }
    .dark .dark\:border-gray-900 {
      border-color: rgba(17, 24, 39);
    }
    .dark .dark\:hover\:border-gray-800:hover {
      border-color: rgba(31, 41, 55);
    }
    .dark .dark\:text-white {
      color: rgba(255, 255, 255);
    }
    .dark .dark\:text-gray-50 {
      color: rgba(249, 250, 251);
    }
    .dark .dark\:text-gray-100 {
      color: rgba(243, 244, 246);
    }
    .dark .dark\:text-gray-200 {
      color: rgba(229, 231, 235);
    }
    .dark .dark\:text-gray-400 {
      color: rgba(156, 163, 175);
    }
    .dark .dark\:text-gray-500 {
      color: rgba(107, 114, 128);
    }
    .dark .dark\:text-gray-700 {
      color: rgba(55, 65, 81);
    }
    .dark .dark\:text-gray-800 {
      color: rgba(31, 41, 55);
    }
    .dark .dark\:text-red-100 {
      color: rgba(254, 226, 226);
    }
    .dark .dark\:text-green-100 {
      color: rgba(209, 250, 229);
    }
    .dark .dark\:text-blue-400 {
      color: rgba(96, 165, 250);
    }
    .dark .group:hover .dark\:group-hover\:text-gray-500 {
      color: rgba(107, 114, 128);
    }
    .dark .group:focus .dark\:group-focus\:text-gray-700 {
      color: rgba(55, 65, 81);
    }
    .dark .dark\:hover\:text-gray-100:hover {
      color: rgba(243, 244, 246);
    }
    .dark .dark\:hover\:text-blue-500:hover {
      color: rgba(59, 130, 246);
    }
  
    /* Custom style */
    .header-right {
        width: calc(100% - 3.5rem);
    }
    
    @media only screen and (min-width: 768px) {
        .header-right {
            width: calc(100% - 16rem);
        }        
    }

    .sidebar{
      position: ;
    }

    .main-content {
      position: absolute;
      margin-left: 14rem; /* Sidebar width */
      margin-bottom: 20rem; /* Adjust as needed */
      padding: 1rem;
    }
    @media screen and (min-width: 768px) {
      .sidebar {
        position: fixed;
      }
    }

  </style>
  <div x-data="setup()" :class="{ 'dark': isDark }">
      <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white">
  
        <!-- Header -->
        <div class="position-fixed w-full flex items-center justify-between h-14 text-white z-10">
          <div class="flex items-center justify-start md:justify-center pl-3 w-14 md:w-64 h-14 bg-blue-800 dark:bg-gray-800 border-none">
            <img class="w-7 h-7 md:w-10 md:h-10 mr-2 rounded-md overflow-hidden" src="https://therminic2018.eu/wp-content/uploads/2018/07/dummy-avatar.jpg" />
            <span class="hidden md:block">ADMIN</span>
          </div>
          <div class="flex justify-between items-center h-14 bg-blue-800 dark:bg-gray-800 header-right">
            <form action="">
            <div class=" rounded flex items-center w-full max-w-xl mr-4 p-2 shadow-sm border-gray-200">
                <input name="search" value="{{ request("search") }}" type="search" id="default-search" class="block w-full p-4 ps-10 text-m text-gray-900 border border-gray-400 rounded-full bg-gray-200 focus:ring-gray-500 focus:border-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="Search movie...">
            </div>
        </form>
            <ul class="flex items-center">
              <li>
                <button
                  aria-hidden="true"
                  @click="toggleTheme"
                  class="group p-2 transition-colors duration-200 rounded-full shadow-md bg-blue-200 hover:bg-blue-200 dark:bg-gray-50 dark:hover:bg-gray-200 text-gray-900 focus:outline-none"
                >
                  <svg
                    x-show="isDark"
                    width="24"
                    height="24"
                    class="fill-current text-gray-700 group-hover:text-gray-500 group-focus:text-gray-700 dark:text-gray-700 dark:group-hover:text-gray-500 dark:group-focus:text-gray-700"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke=""
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"
                    />
                  </svg>
                  <svg
                    x-show="!isDark"
                    width="24"
                    height="24"
                    class="fill-current text-gray-700 group-hover:text-gray-500 group-focus:text-gray-700 dark:text-gray-700 dark:group-hover:text-gray-500 dark:group-focus:text-gray-700"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke=""
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"
                    />
                  </svg>
                </button>
              </li>
              <li>
                <div class="block w-px h-6 mx-3 bg-gray-400 dark:bg-gray-700"></div>
              </li>
              <li>
                <a  href="{{ url('/logout') }}" class="flex items-center mr-4 hover:text-blue-100">
                  <span class="inline-flex mr-1">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                  </span>
                  Logout
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- ./Header -->
      
        <!-- Sidebar -->
     
        <div class="sidebar">
        <div class=" position-fixed flex flex-col top-20 left-0 w-14 hover:w-64 md:w-64 bg-blue-900 dark:bg-gray-900 h-[500px] text-white transition-all duration-300 border-none sidebar">
          <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
            <ul class="flex flex-col py-4 space-y-1">
              <li class="px-5 hidden md:block">
                <div class="flex flex-row items-center h-8">
                  <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Main</div>
                </div>
              </li>
              <li>
                <a href="/dashboard" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                  <span class="inline-flex justify-center items-center ml-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                  </span>
                  <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
                </a>
              </li>
              <li>
                <a href="{{ route('dashboard.create') }}" class="px-10 relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">Add Movie</a>
              </li>
            </ul>
          </div>
        </div>
        </div>
      </main>
        <!-- ./Sidebar -->
        <div class="ml-15 mt-10 mb-10 md:ml-64"> 
        <!-- Client Table -->
        <h1 class="ml-10 mb-10 text-left font-semibold text-3xl">EDIT MOVIE</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="max-w-sm m-auto" action="/dashboard" method="POST" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-5">
      <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title/Nama Film</label>
      <input type="text" name="title"  id="title" value="{{ old('title', $movie->title) }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"  required>
    </div>
    <div class="mb-5">
      <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" >Slug</label>
      <input type="text" id="slug" name="slug" value="{{ old('slug', $movie->slug) }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"  required>
    </div>
    <div class="mb-5">
      <label for="overview" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Overview/Deskripsi</label>
      <input type="text" id="overview" name="overview" value="{{ old('overview', $movie->overview) }}" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
    </div>
    <div class="mb-5">
      <label for="popularity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Popularity</label>
      <input type="text" id="popularity" value="{{ old('popularity', $movie->popularity) }}" name="popularity" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"  required>
    </div>
    
    <div class="mb-5">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="poster_path">Poster</label>
        <input type="file" id="poster_path" name="poster_path" value="{{ old('poster_path', $movie->poster_path) }}" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">PNG Or JPG.</p>
    </div>
    <div class="mb-5">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="backdrop_path">Backrop</label>
        <input type="file"  id="backdrop_path" name="backdrop_path" value="{{ old('backdrop_path', $movie->backdrop_path) }}" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">PNG Or JPG.</p>
    </div>
    <div class="mb-5">        
        <div class="relative max-w-sm">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
            <svg class="mt-5 w-4 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
            </svg>
            </div>
            <label for="release_date">Release Date:</label>
            <input datepicker type="date" id="release_date" name="release_date" value="{{ old('release_date', $movie->release_date) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
        </div>
        <div class="mb-5">
            <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categori</label>
            <input type="text"  id="category_id" name="category_id" value="{{ old('category_id', $movie->category_id) }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"  required>
          </div>
    </div>
    <button type="submit" class="mb-10 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit Movie</button>
  </form>
 
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
    <script>
      const setup = () => {
        const getTheme = () => {
          if (window.localStorage.getItem('dark')) {
            return JSON.parse(window.localStorage.getItem('dark'))
          }
          return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
        }
  
        const setTheme = (value) => {
          window.localStorage.setItem('dark', value)
        }
  
        return {
          loading: true,
          isDark: getTheme(),
          toggleTheme() {
            this.isDark = !this.isDark
            setTheme(this.isDark)
          },
        }
      }
    </script>
</body>
</html>
@endsection