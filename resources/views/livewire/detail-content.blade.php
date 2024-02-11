<div class="mb-56">
  <livewire:background>    
  <div x-show="showHiddenDiv"  
    x-transition:enter="transition ease-out duration-1000" 
    x-transition:enter-start="opacity-0 scale-90" 
    x-transition:enter-end="opacity-100 scale-100" 
    class="relative sm:py-32 z-20">

    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="grid lg:grid-cols-2">
        <div wire:poll.visible.60000ms>
          <h2 class="text-base font-semibold leading-7 text-indigo-600">{{$event->eventDate}}</h2>
          <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{$event->eventName}}</p>
        </div>
        <div class="hidden lg:block my-5 font-bold uppercase text-2xl text-sky-700 text-center hover:text-sky-400 transition duration-500 hover:drop-shadow-lg">
          <h1>daftar harga</h1>
        </div>

      </div>

      <div class="mx-auto grid max-w-2xl sm:grid-cols-1 gap-x-8 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
        <div class="lg:pr-8">
          <div class="lg:max-w-lg">
            <div class="my-4 py-0 w-full h-custom-42-rem overflow-y-auto">
              <p class="mt-6 text-lg leading-8 text-gray-600">{!!$event->eventDesc!!}</p>
            </div>
          </div>
        </div>
        <dl class="w-full text-base text-gray-600 lg:max-w-none">
          <div class="lg:hidden my-5 font-bold uppercase text-2xl text-sky-700 text-center hover:text-sky-400 transition duration-500 hover:drop-shadow-lg">
            <h1>daftar harga</h1>
          </div>
          <hr class="mb-5">
          <div>
            <livewire:price-list :event="$event"/>
          </div>
        </dl>

        <!-- Foto -->
        <!-- <img src="https://tailwindui.com/img/component-images/dark-project-app-screenshot.png" alt="Product screenshot" class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem] md:-ml-4 lg:-ml-0" width="2432" height="1442"> -->
      
      </div>
    </div>
  </div>
  <livewire:background>
</div>