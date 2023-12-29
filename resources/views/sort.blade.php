@extends('layouts.main')

@section('container')
    
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

        <button class="inline-flex w-full justify-center gap-x-1.5 rounded-md px-3 py-2 text-sm font-semibold text-white bg-emerald-500 hover:bg-emerald-600 active:bg-emerald-700 focus:outline-none focus:ring focus:ring-emerald-300">
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

@endsection