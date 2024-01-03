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
            <div class="bg-white rounded flex items-center w-full max-w-xl mr-4 p-2 shadow-sm border border-gray-200">
              <button class="outline-none focus:outline-none">
                <svg class="w-5 text-gray-600 h-5 cursor-pointer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
              </button>
              <input type="search" name="" id="" placeholder="Search" class="w-full pl-3 text-sm text-black outline-none focus:outline-none bg-transparent" />
            </div>
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
                <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
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
          <a href="{{ route('dashboard.create') }}" ><button type="button" class="ml-5 text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-6 py-3 text-center me-2 mb-2 ">Add Movie</button></a>
        <!-- Client Table -->
          <div class="mt-4 mx-4 flex">
            <div class="w-full  overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <table class="w-full ">
                  <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                      <th class="px-4 py-3">No</th>
                      <th class="px-4 py-3">TITLE</th>
                      <th class="px-4 py-3">RELEASE</th>
                      <th class="px-4 py-3">CATEGORY</th>
                      <th class="px-4 py-34">ACTION</th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @foreach($movies as $movie)
                <tr>
                    <td class="px-4 py-3">{{ $loop->iteration }}</td>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->release_date}}</td>
                    <td>{{ $movie->category->name}}</td>
                    <td>
                       
                        <button type="button" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-3 py-1 text-center me-2 mb-2"><a href="{{ route('dashboard.show', $movie->slug) }}" class="btn btn-info">View</a></button>
                        <button type="button" class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-3 py-1 text-center me-2 mb-2"><a href="{{ route('dashboard.edit', $movie->slug)}}">Edit</a></button>
                        <form action="/dashboard/{{ $movie->id }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf         
                              <button type="button" onclick="return confirm('Yakin ingin dihapus!!')" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-3 py-1 text-center me-2 mb-2">Delete</button>
                            <input type="hidden" name="slug" value="{{ $movie }}">
                        </form>
                    </td>
                </tr>
            @endforeach
                  </tbody>
                </table>
              </div>
              <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                <!-- Pagination -->
                <div class="col-span-4">
                    <div class="mt-4">
                        {{ $movies->links() }}
                    </div>
                </div>
            </div>            
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>    
  
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