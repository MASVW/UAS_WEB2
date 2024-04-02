<div x-data="{ open: false }" class="bg-white fixed top-0 z-50 w-full h-24 shadow-lg">
  <header class="absolute inset-x-0 top-0 z-50">
    <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
      <div class="flex lg:flex-1">
        <a href="/" wire:navigate class="-m-1.5 p-1.5">
          <span class="sr-only">{{config('APP.NAME')}}</span>
          <p class="text-3xl lg:text-2xl 2xl:text-3xl xl:text-lg font-bold bg-gradient-to-tl from-sky-800  to-sky-400 bg-clip-text text-transparent">Event Hub</p>
        </a>
      </div>
      <div class="flex lg:hidden">
        <button @click="open = ! open" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
          <span class="sr-only">Open main menu</span>
          <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
      <div class="2xl:text-xl lg:text-lg hidden lg:flex lg:gap-x-12">
        @foreach ($this->events as $event)
        <button wire:key="{{ $event->id }}" href="/event/{{$event->slug}}" wire:navigate class="capitalize cursor-pointer
            @if(Route::is('content') && $title == $event->eventName)
              active:bg-sky-800 active:text-white  hover:bg-slate-100 hover:text-black  text-white  bg-sky-500
            @elseif(Route::is('home')  && $title == $event->eventName)
             active:bg-sky-800 active:text-white  hover:bg-slate-100 hover:text-black  text-white  bg-sky-500
              @else
              active:bg-sky-800 active:text-white  hover:bg-sky-500 hover:text-white  text-gray-900
            @endif
            font-semibold leading-6 rounded-full px-5 py-2 transition duration-300 hover:scale-110 hover:shadow-lg">
          {{$event->eventName}}
        </button>
        @endforeach
        <button href="{{route('news')}}" wire:navigate class="hidden xl:block capitalize cursor-pointer
            @if(Route::is('news') || $this->title == 'Agenda Acara')
              active:bg-sky-800 active:text-white  hover:bg-slate-100 hover:text-black  text-white  bg-sky-500
              @else
              active:bg-sky-800 active:text-white  hover:bg-sky-500 hover:text-white  text-gray-900
            @endif
            font-semibold leading-6 rounded-full px-5 py-2 transition duration-300 hover:scale-110 hover:shadow-lg">
          agenda acara
        </button>
        <a href="{{route('about-us')}}" wire:navigate class="hidden xl:block capitalize cursor-pointer
            @if(Route::is('about-us'))
              active:bg-sky-800 active:text-white  hover:bg-slate-100 hover:text-black  text-white  bg-sky-500
              @else
              active:bg-sky-800 active:text-white  hover:bg-sky-500 hover:text-white  text-gray-900
            @endif
            font-semibold leading-6 rounded-full px-5 py-2 transition duration-300 hover:scale-110 hover:shadow-lg">
          Tentang kami</a>
      </div>
      <div class="2xl:text-xl lg:text-lg hidden lg:flex lg:flex-1 lg:justify-end">
        @auth
              <div x-data="{ isOpen: true }" class="relative inline-block">
                  <!-- Dropdown toggle button -->
                  <button @click="isOpen = !isOpen" class="font-semibold capitalize relative z-10 flex items-center p-2 text-lg @if($title == 'Profil') bg-sky-500 text-white hover:bg-sky-600 active:bg-sky-700 @else bg-white text-gray-900 @endif border border-transparent rounded-md focus:outline-none transition">
                      <span class="mx-1">{{auth()->user()->firstName}} {{auth()->user()->lastName}}</span>
                      <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M12 15.713L18.01 9.70299L16.597 8.28799L12 12.888L7.40399 8.28799L5.98999 9.70199L12 15.713Z" fill="currentColor"></path>
                      </svg>
                  </button>

                  <!-- Dropdown menu -->
                  <div x-show="isOpen"
                       @click.away="isOpen = false"
                       x-transition:enter="transition ease-out duration-100"
                       x-transition:enter-start="opacity-0 scale-90"
                       x-transition:enter-end="opacity-100 scale-100"
                       x-transition:leave="transition ease-in duration-100"
                       x-transition:leave-start="opacity-100 scale-100"
                       x-transition:leave-end="opacity-0 scale-90"
                       class="absolute right-0 z-20 w-56 py-2 mt-2 overflow-hidden origin-top-right bg-white rounded-md shadow-xl"
                  >
                      <a href="#" class="flex items-center p-3 -mt-2 text-sm text-gray-600 transform">
                          <img class="flex-shrink-0 object-cover mx-1 rounded-full w-9 h-9" src="https://images.unsplash.com/photo-1523779917675-b6ed3a42a561?ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8d29tYW4lMjBibHVlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=face&w=500&q=200" alt="jane avatar">
                          <div class="mx-1">
                              <h1 class="text-sm font-semibold text-gray-700">{{auth()->user()->firstName}} {{auth()->user()->lastName}}</h1>
                          </div>
                      </a>

                      <hr class="border-gray-200 ">

                      <a href="/profil/{{auth()->user()->firstName}}" class="flex items-center p-3 text-sm text-gray-600 capitalize  hover:bg-slate-100 transition">
                          <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M7 8C7 5.23858 9.23858 3 12 3C14.7614 3 17 5.23858 17 8C17 10.7614 14.7614 13 12 13C9.23858 13 7 10.7614 7 8ZM12 11C13.6569 11 15 9.65685 15 8C15 6.34315 13.6569 5 12 5C10.3431 5 9 6.34315 9 8C9 9.65685 10.3431 11 12 11Z" fill="currentColor"></path>
                              <path d="M6.34315 16.3431C4.84285 17.8434 4 19.8783 4 22H6C6 20.4087 6.63214 18.8826 7.75736 17.7574C8.88258 16.6321 10.4087 16 12 16C13.5913 16 15.1174 16.6321 16.2426 17.7574C17.3679 18.8826 18 20.4087 18 22H20C20 19.8783 19.1571 17.8434 17.6569 16.3431C16.1566 14.8429 14.1217 14 12 14C9.87827 14 7.84344 14.8429 6.34315 16.3431Z" fill="currentColor"></path>
                          </svg>

                          <span class="mx-1">
                              Profil
                          </span>
                      </a>

                      <a href="#" class="flex items-center p-3 text-sm text-gray-600 capitalize  transform hover:bg-slate-100 transition">
                          <svg data-slot="icon" fill="none" stroke-width="1.5" class="w-5 h-5 mx-1 text-stone-900" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                          </svg>

                        <span class="mx-1">
                            Riwayat Pembelian
                        </span>

                      </a><a href="#" class="flex items-center p-3 text-sm text-gray-600 capitalize  transform hover:bg-slate-100 transition">
                          <svg data-slot="icon" fill="none" stroke-width="1.5"class="w-5 h-5 mx-1 text-stone-900" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"></path>
                          </svg>

                          <span class="mx-1">
                              Keranjang
                          </span>
                      </a>



                      <hr class="border-gray-200 ">

                      <a href="{{route('about-us')}}" class="flex items-center p-3 text-sm text-gray-600 capitalize  transform hover:bg-slate-100 transition">
                          <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M12 22C6.47967 21.9939 2.00606 17.5203 2 12V11.8C2.10993 6.30452 6.63459 1.92794 12.1307 2.00087C17.6268 2.07379 22.0337 6.56887 21.9978 12.0653C21.9619 17.5618 17.4966 21.9989 12 22ZM11.984 20H12C16.4167 19.9956 19.9942 16.4127 19.992 11.996C19.9898 7.57928 16.4087 3.99999 11.992 3.99999C7.57528 3.99999 3.99421 7.57928 3.992 11.996C3.98979 16.4127 7.56729 19.9956 11.984 20ZM13 18H11V16H13V18ZM13 15H11C10.9684 13.6977 11.6461 12.4808 12.77 11.822C13.43 11.316 14 10.88 14 9.99999C14 8.89542 13.1046 7.99999 12 7.99999C10.8954 7.99999 10 8.89542 10 9.99999H8V9.90999C8.01608 8.48093 8.79333 7.16899 10.039 6.46839C11.2846 5.76778 12.8094 5.78493 14.039 6.51339C15.2685 7.24184 16.0161 8.57093 16 9.99999C15.9284 11.079 15.3497 12.0602 14.44 12.645C13.6177 13.1612 13.0847 14.0328 13 15Z" fill="currentColor"></path>
                          </svg>

                          <span class="mx-1">
                            Tentang Event Hub
                          </span>
                      </a>

                      <form action="/logout" method="post">
                          @csrf
                          <button type="submit" class="flex items-center p-3 w-full text-sm text-gray-600 capitalize  transform hover:bg-slate-100 transition">
                              <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M19 21H10C8.89543 21 8 20.1046 8 19V15H10V19H19V5H10V9H8V5C8 3.89543 8.89543 3 10 3H19C20.1046 3 21 3.89543 21 5V19C21 20.1046 20.1046 21 19 21ZM12 16V13H3V11H12V8L17 12L12 16Z" fill="currentColor"></path>
                              </svg>

                              <span class="mx-1">
                                Keluar
                              </span>
                          </button>
                      </form>
                  </div>
              </div>

        @else
        <div
            class="rounded-full mx-5 px-5 py-2 hover:bg-slate hover:scale-110 hover:shadow-lg focus:ring focus:ring-sky-300 transition duration-300
            @if($title == 'Masuk')
            bg-sky-500 text-white hover:text-gray-900 hover:bg-white
            @else
            active:bg-sky-800 active:text-white hover:bg-sky-500 hover:text-white text-gray-900
            @endif
            ">
          <a href="/masuk" wire:navigate class="font-semibold leading-6 capitalize">
            Masuk
          </a>
        </div>
        <div
        class="rounded-full  mx-5 px-5 py-2 outline   hover:scale-110
         active:ring-sky-300 trasition duration-300
         @if($title == 'Daftar')
        bg-sky-500 text-white hover:bg-white hover:text-gray-900 hover:outline-none
         @else
         text-sky-500 bg-white outline-sky-100 hover:bg-sky-500 hover:text-white hover:outline-none
         @endif">
          <a href="/daftar" wire:navigate class="font-semibold leading-6 capitalize">Daftar</a>
        </div>
        @endauth
      </div>
    </nav>

    <!-- Mobile menu, show/hide based on menu open state. -->
    <span x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90" class="lg:hidden">
      <!-- Background backdrop, show/hide based on slide-over state. -->
      <div class="fixed inset-0 z-50"></div>
      <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-between">
          <a href="#" class="-m-1.5 p-1.5">
            <!-- <span class="sr-only">Your Company</span>
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt=""> -->
          </a>
          <button @click="open = ! open" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Close menu</span>
            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="mt-6 flow-root">
          <div class="-my-6 divide-y divide-gray-500/10">
            <div class="space-y-2 py-6">
              @foreach ($this->events as $events)
              <a wire:key="{{ $events->id }}" href="{{$events->slug}}" class="cursor-pointer block hover:scale-110 hover:shadow-lg active:bg-sky-800 active:text-white  hover:bg-sky-500 hover:text-white focus:ring focus:ring-sky-300 transition duration-300 rounded-lg px-5 py-2 font-semibold text-gray-900">{{$events->eventName}}</a>
              @endforeach
              <a href="#" class="block hover:scale-110 hover:shadow-lg active:bg-sky-800 active:text-white  hover:bg-sky-500 hover:text-white focus:ring focus:ring-sky-300 transition duration-300 rounded-lg px-5 py-2 font-semibold leading-6 text-gray-900 uppercase">agenda acara</a>
              <a href="#" class="block hover:scale-110 hover:shadow-lg active:bg-sky-800 active:text-white  hover:bg-sky-500 hover:text-white focus:ring focus:ring-sky-300 transition duration-300 rounded-lg px-5 py-2 font-semibold leading-6 text-gray-900">ABOUT US</a>
            </div>
            <div class="flow-root">
              <a href="#" class="block rounded-lg my-3 px-5 py-2 text-gray-900 hover:bg-slate hover:scale-110 hover:shadow-lg active:bg-sky-800 active:text-white  hover:bg-sky-500 hover:text-white focus:ring focus:ring-sky-300 transition duration-300 font-semibold leading-6 uppercase">Masuk</a>
              <a href="#" class="block rounded-lg text-sky-500 my-3 px-5 py-2 bg-white outline outline-sky-100 hover:bg-sky-500 hover:text-white hover:outline-none hover:scale-110 active:ring-sky-300 trasition duration-300 font-semibold leading-6 uppercase">Daftar</a>
            </div>
          </div>
        </div>
      </div>
    </span>
  </header>
</div>
