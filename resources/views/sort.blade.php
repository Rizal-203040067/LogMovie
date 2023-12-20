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
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
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

<h1 class="text-3xl pl-6 py-6 font-bold">Sort All Movies</h1>

<div class="flex flex-row mx-6 space-x-6 pb-6">
  <aside class="basis-3/12 space-y-6">
    <div>
      <div>
        <button onclick="hide_input()" type="button" class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50" id="menu-button" aria-expanded="true" aria-haspopup="true">
          Sort
          <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
          </svg>
        </button>
      </div>

      <div class="hidden right-0 z-10 mt-2 w-auto origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" id="items-button" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
        <legend>Show Me</legend>
          
        <input id="everything" class="peer/everything" type="radio" name="status" checked />
        <label for="everything" class="peer-checked/everything:text-sky-500">Everything</label><br>
          
        <input id="seen" class="peer/seen" type="radio" name="status" />
        <label for="seen" class="peer-checked/seen:text-sky-500">Movies I Have Seen</label><br>

        <input id="notseen" class="peer/notseen" type="radio" name="status" />
        <label for="notseen" class="peer-checked/notseen:text-sky-500">Movies I Haven't Seen</label>
          
        <div class="hidden peer-checked/everything:block">This is all movies</div>
        <div class="hidden peer-checked/seen:block">This is all movies you had seen</div>
        <div class="hidden peer-checked/notseen:block">This is all movies you hadn't seen</div>

        <button class="inline-flex w-full justify-center gap-x-1.5 rounded-md px-3 py-2 text-sm font-semibold text-white bg-violet-500 hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300">
          Save changes
        </button>
      </div>
    </div>

    

    <div>
      <button onclick="hide_input2()" type="button" class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50" id="menu-button" aria-expanded="true" aria-haspopup="true">
        Sort
        <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
        </svg>
      </button>
    </div>

    <div class="right-0 z-10 mt-2 w-auto origin-top-right divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" id="items-button2" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
      <div class="py-1" role="none">
        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Edit</a>
        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Duplicate</a>
      </div>
      <div class="py-1" role="none">
        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">Archive</a>
        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-3">Move</a>
      </div>
      <div class="py-1" role="none">
        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-4">Share</a>
        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-5">Add to favorites</a>
      </div>
      <div class="py-1" role="none">
        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-6">Delete</a>
      </div>
    </div>
    
    <div class="card shadow grid grid-cols-1 divide-y rounded-lg">
      <header class="text-xl font-bold p-3">Filters</header>
      <div class="divide-y space-y-4">
        <div class="p-3">
          <legend>Show Me</legend>
          
          <input id="everything" class="peer/everything" type="radio" name="status" checked />
          <label for="everything" class="peer-checked/everything:text-sky-500">Everything</label><br>
          
          <input id="seen" class="peer/seen" type="radio" name="status" />
          <label for="seen" class="peer-checked/seen:text-sky-500">Movies I Haven't Seen</label><br>

          <input id="notseen" class="peer/notseen" type="radio" name="status" />
          <label for="notseen" class="peer-checked/notseen:text-sky-500">Movies I Haven't Seen</label>
          
          <div class="hidden peer-checked/everything:block">This is all movies</div>
          <div class="hidden peer-checked/seen:block">This is all movies you had seen</div>
          <div class="hidden peer-checked/notseen:block">This is all moives you hadn't seen</div>
        </div>

        <div class="p-3">
          <legend>Show Me</legend>
          
          <input id="everything" class="peer/everything" type="radio" name="status" checked />
          <label for="everything" class="peer-checked/everything:text-sky-500">Everything</label><br>
          
          <input id="seen" class="peer/seen" type="radio" name="status" />
          <label for="seen" class="peer-checked/seen:text-sky-500">Movies I Haven't Seen</label><br>

          <input id="notseen" class="peer/notseen" type="radio" name="status" />
          <label for="notseen" class="peer-checked/notseen:text-sky-500">Movies I Haven't Seen</label>
          
          <div class="hidden peer-checked/everything:block">This is all movies</div>
          <div class="hidden peer-checked/seen:block">This is all movies you had seen</div>
          <div class="hidden peer-checked/notseen:block">This is all moives you hadn't seen</div>
        </div>
          
        <div class="p-3">
          <legend>Show Me</legend>
          
          <input id="everything" class="peer/everything" type="radio" name="status" checked />
          <label for="everything" class="peer-checked/everything:text-sky-500">Everything</label><br>
          
          <input id="seen" class="peer/seen" type="radio" name="status" />
          <label for="seen" class="peer-checked/seen:text-sky-500">Movies I Haven't Seen</label><br>

          <input id="notseen" class="peer/notseen" type="radio" name="status" />
          <label for="notseen" class="peer-checked/notseen:text-sky-500">Movies I Haven't Seen</label>
          
          <div class="hidden peer-checked/everything:block">This is all movies</div>
          <div class="hidden peer-checked/seen:block">This is all movies you had seen</div>
          <div class="hidden peer-checked/notseen:block">This is all moives you hadn't seen</div>
        </div>

        <div class="p-3">
          <legend>Show Me</legend>
          
          <input id="everything" class="peer/everything" type="radio" name="status" checked />
          <label for="everything" class="peer-checked/everything:text-sky-500">Everything</label><br>
          
          <input id="seen" class="peer/seen" type="radio" name="status" />
          <label for="seen" class="peer-checked/seen:text-sky-500">Movies I Haven't Seen</label><br>

          <input id="notseen" class="peer/notseen" type="radio" name="status" />
          <label for="notseen" class="peer-checked/notseen:text-sky-500">Movies I Haven't Seen</label>
          
          <div class="hidden peer-checked/everything:block">This is all movies</div>
          <div class="hidden peer-checked/seen:block">This is all movies you had seen</div>
          <div class="hidden peer-checked/notseen:block">This is all moives you hadn't seen</div>
        </div>

        <div class="p-3">
          <legend>Show Me</legend>
          
          <input id="everything" class="peer/everything" type="radio" name="status" checked />
          <label for="everything" class="peer-checked/everything:text-sky-500">Everything</label><br>
          
          <input id="seen" class="peer/seen" type="radio" name="status" />
          <label for="seen" class="peer-checked/seen:text-sky-500">Movies I Haven't Seen</label><br>

          <input id="notseen" class="peer/notseen" type="radio" name="status" />
          <label for="notseen" class="peer-checked/notseen:text-sky-500">Movies I Haven't Seen</label>
          
          <div class="hidden peer-checked/everything:block">This is all movies</div>
          <div class="hidden peer-checked/seen:block">This is all movies you had seen</div>
          <div class="hidden peer-checked/notseen:block">This is all moives you hadn't seen</div>
        </div>
      </div>
    </div>
  </aside>
  
  <main class="basis-9/12 grid grid-cols-5 gap-6">
    <div class="card shadow-md rounded-b-lg">
      <img class="rounded-t-lg" src="https://www.themoviedb.org/t/p/original/5qhtTPWNqzM1eo9QIIf5cyIUeAA.jpg" alt="">
      <div class="mx-4 my-2">
        <p class="font-bold">Leave the World Behind</p>
        <p class="text-gray-500 font-medium">Nov 22, 2023</p>
      </div>
    </div>
    <div class="card shadow-md rounded-b-lg">
      <img class="rounded-t-lg" src="https://www.themoviedb.org/t/p/original/5qhtTPWNqzM1eo9QIIf5cyIUeAA.jpg" alt="">
      <div class="mx-4 my-2">
        <p class="font-bold">Leave the World Behind</p>
        <p class="text-gray-500 font-medium">Nov 22, 2023</p>
      </div>
    </div>
    <div class="card shadow-md rounded-b-lg">
      <img class="rounded-t-lg" src="https://www.themoviedb.org/t/p/original/5qhtTPWNqzM1eo9QIIf5cyIUeAA.jpg" alt="">
      <div class="mx-4 my-2">
        <p class="font-bold">Leave the World Behind</p>
        <p class="text-gray-500 font-medium">Nov 22, 2023</p>
      </div>
    </div>
    <div class="card shadow-md rounded-b-lg">
      <img class="rounded-t-lg" src="https://www.themoviedb.org/t/p/original/5qhtTPWNqzM1eo9QIIf5cyIUeAA.jpg" alt="">
      <div class="mx-4 my-2">
        <p class="font-bold">Leave the World Behind</p>
        <p class="text-gray-500 font-medium">Nov 22, 2023</p>
      </div>
    </div>
    <div class="card shadow-md rounded-b-lg">
      <img class="rounded-t-lg" src="https://www.themoviedb.org/t/p/original/5qhtTPWNqzM1eo9QIIf5cyIUeAA.jpg" alt="">
      <div class="mx-4 my-2">
        <p class="font-bold">Leave the World Behind</p>
        <p class="text-gray-500 font-medium">Nov 22, 2023</p>
      </div>
    </div>
    <div class="card shadow-md rounded-b-lg">
      <img class="rounded-t-lg" src="https://www.themoviedb.org/t/p/original/5qhtTPWNqzM1eo9QIIf5cyIUeAA.jpg" alt="">
      <div class="mx-4 my-2">
        <p class="font-bold">Leave the World Behind</p>
        <p class="text-gray-500 font-medium">Nov 22, 2023</p>
      </div>
    </div>
    <div class="card shadow-md rounded-b-lg">
      <img class="rounded-t-lg" src="https://www.themoviedb.org/t/p/original/5qhtTPWNqzM1eo9QIIf5cyIUeAA.jpg" alt="">
      <div class="mx-4 my-2">
        <p class="font-bold">Leave the World Behind</p>
        <p class="text-gray-500 font-medium">Nov 22, 2023</p>
      </div>
    </div>
    <div class="card shadow-md rounded-b-lg">
      <img class="rounded-t-lg" src="https://www.themoviedb.org/t/p/original/5qhtTPWNqzM1eo9QIIf5cyIUeAA.jpg" alt="">
      <div class="mx-4 my-2">
        <p class="font-bold">Leave the World Behind</p>
        <p class="text-gray-500 font-medium">Nov 22, 2023</p>
      </div>
    </div>
    <div class="card shadow-md rounded-b-lg">
      <img class="rounded-t-lg" src="https://www.themoviedb.org/t/p/original/5qhtTPWNqzM1eo9QIIf5cyIUeAA.jpg" alt="">
      <div class="mx-4 my-2">
        <p class="font-bold">Leave the World Behind</p>
        <p class="text-gray-500 font-medium">Nov 22, 2023</p>
      </div>
    </div>
    <div class="card shadow-md rounded-b-lg">
      <img class="rounded-t-lg" src="https://www.themoviedb.org/t/p/original/5qhtTPWNqzM1eo9QIIf5cyIUeAA.jpg" alt="">
      <div class="mx-4 my-2">
        <p class="font-bold">Leave the World Behind</p>
        <p class="text-gray-500 font-medium">Nov 22, 2023</p>
      </div>
    </div>
    <div class="card shadow-md rounded-b-lg">
      <img class="rounded-t-lg" src="https://www.themoviedb.org/t/p/original/5qhtTPWNqzM1eo9QIIf5cyIUeAA.jpg" alt="">
      <div class="mx-4 my-2">
        <p class="font-bold">Leave the World Behind</p>
        <p class="text-gray-500 font-medium">Nov 22, 2023</p>
      </div>
    </div>
    <div class="card shadow-md rounded-b-lg">
      <img class="rounded-t-lg" src="https://www.themoviedb.org/t/p/original/5qhtTPWNqzM1eo9QIIf5cyIUeAA.jpg" alt="">
      <div class="mx-4 my-2">
        <p class="font-bold">Leave the World Behind</p>
        <p class="text-gray-500 font-medium">Nov 22, 2023</p>
      </div>
    </div>
    <div class="card shadow-md rounded-b-lg">
      <img class="rounded-t-lg" src="https://www.themoviedb.org/t/p/original/5qhtTPWNqzM1eo9QIIf5cyIUeAA.jpg" alt="">
      <div class="mx-4 my-2">
        <p class="font-bold">Leave the World Behind</p>
        <p class="text-gray-500 font-medium">Nov 22, 2023</p>
      </div>
    </div>
    <div class="card shadow-md rounded-b-lg">
      <img class="rounded-t-lg" src="https://www.themoviedb.org/t/p/original/5qhtTPWNqzM1eo9QIIf5cyIUeAA.jpg" alt="">
      <div class="mx-4 my-2">
        <p class="font-bold">Leave the World Behind</p>
        <p class="text-gray-500 font-medium">Nov 22, 2023</p>
      </div>
    </div>
    <div class="card shadow-md rounded-b-lg">
      <img class="rounded-t-lg" src="https://www.themoviedb.org/t/p/original/5qhtTPWNqzM1eo9QIIf5cyIUeAA.jpg" alt="">
      <div class="mx-4 my-2">
        <p class="font-bold">Leave the World Behind</p>
        <p class="text-gray-500 font-medium">Nov 22, 2023</p>
      </div>
    </div>
    <div class="card shadow-md rounded-b-lg">
      <img class="rounded-t-lg" src="https://www.themoviedb.org/t/p/original/5qhtTPWNqzM1eo9QIIf5cyIUeAA.jpg" alt="">
      <div class="mx-4 my-2">
        <p class="font-bold">Leave the World Behind</p>
        <p class="text-gray-500 font-medium">Nov 22, 2023</p>
      </div>
    </div>
    <div class="card shadow-md rounded-b-lg">
      <img class="rounded-t-lg" src="https://www.themoviedb.org/t/p/original/5qhtTPWNqzM1eo9QIIf5cyIUeAA.jpg" alt="">
      <div class="mx-4 my-2">
        <p class="font-bold">Leave the World Behind</p>
        <p class="text-gray-500 font-medium">Nov 22, 2023</p>
      </div>
    </div>
    <div class="card shadow-md rounded-b-lg">
      <img class="rounded-t-lg" src="https://www.themoviedb.org/t/p/original/5qhtTPWNqzM1eo9QIIf5cyIUeAA.jpg" alt="">
      <div class="mx-4 my-2">
        <p class="font-bold">Leave the World Behind</p>
        <p class="text-gray-500 font-medium">Nov 22, 2023</p>
      </div>
    </div>
    <div class="card shadow-md rounded-b-lg">
      <img class="rounded-t-lg" src="https://www.themoviedb.org/t/p/original/5qhtTPWNqzM1eo9QIIf5cyIUeAA.jpg" alt="">
      <div class="mx-4 my-2">
        <p class="font-bold">Leave the World Behind</p>
        <p class="text-gray-500 font-medium">Nov 22, 2023</p>
      </div>
    </div>
    <div class="card shadow-md rounded-b-lg">
      <img class="rounded-t-lg" src="https://www.themoviedb.org/t/p/original/5qhtTPWNqzM1eo9QIIf5cyIUeAA.jpg" alt="">
      <div class="mx-4 my-2">
        <p class="font-bold">Leave the World Behind</p>
        <p class="text-gray-500 font-medium">Nov 22, 2023</p>
      </div>
    </div>
    <div class="card shadow-md rounded-b-lg">
      <img class="rounded-t-lg" src="https://www.themoviedb.org/t/p/original/5qhtTPWNqzM1eo9QIIf5cyIUeAA.jpg" alt="">
      <div class="mx-4 my-2">
        <p class="font-bold">Leave the World Behind</p>
        <p class="text-gray-500 font-medium">Nov 22, 2023</p>
      </div>
    </div>
    <div class="card shadow-md rounded-b-lg">
      <img class="rounded-t-lg" src="https://www.themoviedb.org/t/p/original/5qhtTPWNqzM1eo9QIIf5cyIUeAA.jpg" alt="">
      <div class="mx-4 my-2">
        <p class="font-bold">Leave the World Behind</p>
        <p class="text-gray-500 font-medium">Nov 22, 2023</p>
      </div>
    </div>
    <div class="card shadow-md rounded-b-lg">
      <img class="rounded-t-lg" src="https://www.themoviedb.org/t/p/original/5qhtTPWNqzM1eo9QIIf5cyIUeAA.jpg" alt="">
      <div class="mx-4 my-2">
        <p class="font-bold">Leave the World Behind</p>
        <p class="text-gray-500 font-medium">Nov 22, 2023</p>
      </div>
    </div>
  </main>
</div>

<script src="js/script.js"></script>
</body>
</html>