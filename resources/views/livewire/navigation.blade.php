<div x-data="{ open: false }" class="bg-white fixed top-0 z-50 w-full h-24 shadow-lg">
  <header class="absolute inset-x-0 top-0 z-50">
    <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
      <div class="flex lg:flex-1">
        <a href="/" wire:navigate class="-m-1.5 p-1.5">
          <span class="sr-only">Simposium Manado</span>
          <p class="text-3xl lg:text-2xl 2xl:text-3xl xl:text-lg font-bold bg-gradient-to-tl from-sky-800  to-sky-400 bg-clip-text text-transparent">Simposium Manado</p>
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
        <div class="rounded-full mx-5 px-5 py-2 text-gray-900 hover:bg-slate hover:scale-110 hover:shadow-lg active:bg-sky-800 active:text-white  hover:bg-sky-500 hover:text-white focus:ring focus:ring-sky-300 hover:rounded-full transition duration-300">
          <a href="/" wire:navigate class="font-semibold leading-6 uppercase">
            {{auth()->user()->firstName}}
          </a>
        </div>
        <div class="rounded-full mx-5 px-5 py-2 text-gray-900 hover:bg-slate hover:scale-110 hover:shadow-lg active:bg-sky-800 active:text-white  hover:bg-sky-500 hover:text-white focus:ring focus:ring-sky-300 hover:rounded-full transition duration-300">
          <form action="/logout" method="post">
            @csrf
            <button type="submit" class="font-semibold leading-6 uppercase">
              KELUAR
            </button>
          </form>
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