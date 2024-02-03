<nav class="dark:bg-gray-900 dark:border-gray-700 fixed w-full top-0 z-20" id="navbar">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-10 py-5">
    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="{{ asset('assets/images/logo.png') }}" class="h-12" alt="Flowbite Logo" />
        <div class="hidden md:flex flex-col">
            <span class="text-xs font-light whitespace-nowrap dark:text-white">Yayasan Pendidikan Islam</span>
            <span class="text-2xl font-semibold whitespace-nowrap dark:text-white">Miftahul Ulum</span>
        </div>
    </a>
    <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-dropdown" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
      <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="/" class="block py-2 px-3 rounded md:bg-transparent md:p-0 md:dark:text-green-500 dark:bg-green-600 md:dark:bg-transparent {{ request()->is('/') ? 'md:text-green-600' : 'text-gray-900'}}" aria-current="page">Beranda</a>
        </li>
        <li>
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-green-500 md:p-0 md:w-auto dark:text-white md:dark:hover:text-green-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Pendidikan <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
  </svg></button>
            <!-- Dropdown menu -->
            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                  @foreach ($kategories as $kategori)
                  <li>
                    <a href="{{ route('home.pendidikan', $kategori->slug) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ $kategori->name }}</a>
                  </li>
                  @endforeach
                </ul>
            </div>
        </li>
        <li>
            <a href="{{ route('home.prestasi') }}" class="block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-green-500 md:p-0 dark:text-white md:dark:hover:text-green-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent {{ request()->is('prestasi*') ? 'md:text-green-600' : 'text-gray-900'}} ">Prestasi</a>
        </li>
        <li>
            <a href="{{ route('home.kegiatan') }}" class="block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-green-500 md:p-0 dark:text-white md:dark:hover:text-green-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent {{ request()->is('kegiatan*') ? 'md:text-green-600' : 'text-gray-900'}}">Kegiatan</a>
        </li>
        @if (Auth::user())
        <li>
            <a href="{{ route('dashboard') }}" class="block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-green-500 md:p-0 dark:text-white md:dark:hover:text-green-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent {{ request()->is('kegiatan*') ? 'md:text-green-600' : 'text-gray-900'}}">Admin Panel</a>
        </li>
        @endif
      </ul>
    </div>
  </div>
</nav>
