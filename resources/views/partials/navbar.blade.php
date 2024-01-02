<nav class="bg-emerald-800 relative z-50">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-16 items-center justify-between">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <!-- Mobile menu button-->
          <button data-collapse-toggle="navbar-default" type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-emerald-400 hover:bg-emerald-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
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
        <div class="flex items-center justify-center sm:items-stretch sm:justify-start">
          <div class="hidden sm:ml-6 sm:block">
            <div class="flex items-center justify-between">
              <!-- Current: "bg-emerald-900 text-white", Default: "text-emerald-300 hover:bg-emerald-700 hover:text-white" -->
              <a href='/'> <img src='https://i.postimg.cc/7C3qtLGn/Logmovie.png' class="w-[150px] mr-10" border='0' alt='Logmovie'></a>
              <a href="/movie" class="text-emerald-300 hover:bg-emerald-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Movie</a>
              <a href="/actor" class="text-emerald-300 hover:bg-emerald-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Actor</a>
              @auth
              <div x-data="{ open: false }" class="relative ml-auto">
                <button @click="open = !open" class="text-emerald-300 hover:bg-emerald-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium focus:outline-none">
                    {{ Auth::user()->name }}
                </button>
                <ul x-show="open" class="absolute bg-white border rounded-md mt-2 text-gray-800">
                    <li>
                        <a href="/dashboard" class="block px-4 py-2">Dashboard</a>
                    </li>
                    <li>
                        <a href="/change-password" class="block px-4 py-2">Ganti Password</a>
                    </li>
                    <li>
                      <a href="{{ url('/logout') }}" class="block px-4 py-2">logout</a>
                    </li>
                    <li>
                      <a class="block px-4 py-2" href="{{ route('account.delete.form') }}">Hapus Account</a>
                    </li>
                </ul>
            </div>
          @else
              <a href="/login" class="text-emerald-300 hover:bg-emerald-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Login</a>
          @endauth
        </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="hidden" id="navbar-default">
      <div class="space-y-1 px-2 pb-3 pt-2">
        <!-- Current: "bg-emerald-900 text-white", Default: "text-emerald-300 hover:bg-emerald-700 hover:text-white" -->
        <a href="#" class="bg-emerald-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Dashboard</a>
        <a href="#" class="text-emerald-300 hover:bg-emerald-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Team</a>
        <a href="#" class="text-emerald-300 hover:bg-emerald-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Projects</a>
        <a href="#" class="text-emerald-300 hover:bg-emerald-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Calendar</a>
      </div>
    </div>
</nav>
</body>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Inisialisasi Alpine.js
        Alpine.start();
    });
</script>


