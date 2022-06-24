<header class="bg-gray-900">
  <div
    class="flex items-center h-16 max-w-screen-xl gap-8 px-4 mx-auto sm:px-6 lg:px-8"
  >


    <div class="flex items-center justify-end flex-1 md:justify-between">
      <nav class="hidden md:block" aria-labelledby="header-navigation">
        <h2 class="sr-only" id="header-navigation">Header navigation</h2>

        <ul class="flex items-center gap-6 text-sm">
          <li>
            <a class="text-white transition hover:text-white/75" href="/">
              Home
            </a>
          </li>

          {{-- <li>
            <a class="text-white transition hover:text-white/75" href="/">
              Careers
            </a>
          </li>

          <li>
            <a class="text-white transition hover:text-white/75" href="/">
              History
            </a>
          </li>

          <li>
            <a class="text-white transition hover:text-white/75" href="/">
              Services
            </a>
          </li>

          <li>
            <a class="text-white transition hover:text-white/75" href="/">
              Projects
            </a>
          </li>

          <li>
            <a class="text-white transition hover:text-white/75" href="/">
              Blog
            </a>
          </li> --}}
        </ul>
      </nav>

      <div class="flex items-center gap-4">
        <div class="sm:gap-4 sm:flex">
          <a
            class="block px-5 py-2.5 text-sm font-medium text-white bg-rose-600 hover:bg-gray-500 transition rounded-md shadow"
            href="/"
          >
            Login
          </a>

          <a
            class="hidden sm:block px-5 py-2.5 text-sm font-medium text-white bg-gray-800 rounded-md hover:text-white/75 transition"
            href="/signup"
          >
            Register
          </a>
        </div>

        <button
          class="block p-2.5 text-white bg-gray-800 rounded md:hidden hover:text-white/75 transition"
        >
          <span class="sr-only">Toggle menu</span>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="w-5 h-5"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M4 6h16M4 12h16M4 18h16"
            />
          </svg>
        </button>
      </div>
    </div>
  </div>
</header>
