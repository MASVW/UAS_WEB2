  <div>
    <div class="relative isolate px-6 pt-14 lg:px-8 z-20">
      <div class="mx-auto max-w-4xl pt-48 pb-64 sm:py-48 lg:py-56">
        <div class="hidden sm:mb-8 sm:flex sm:justify-center">
          @auth
            <!-- something -->
            @if($event->status == 'Upcoming')
            <div href="/daftar" wire:navigate class="cursor-pointer transition delay-100 hover:ring-sky-600 hover:shadow-lg relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
              Belum punya akun? <span class="font-semibold text-sky-500"><span class="absolute inset-0" aria-hidden="true"></span>Daftar Sekarang! <span aria-hidden="true">&rarr;</span></span>
            </div>
            @elseif($event->status == 'Active')
            <div class="transition delay-100 hover:ring-sky-600 hover:shadow-lg relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
              {{$event->eventName}} sedang berlangsung</a>
            </div>
            @else
            <div class="transition delay-100 hover:ring-sky-600 hover:shadow-lg relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
              {{$event->eventName}} telah berlalu pada {{$event->eventDate}}</a>
            </div>
            @endif
          @else
            @if($event->status == 'Upcoming')
            <div href="/daftar" wire:navigate class="cursor-pointer transition delay-100 hover:ring-sky-600 hover:shadow-lg relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
              Belum punya akun? <span class="font-semibold text-sky-500"><span class="absolute inset-0" aria-hidden="true"></span>Daftar Sekarang! <span aria-hidden="true">&rarr;</span></span>
            </div>
            @elseif($event->status == 'Active')
            <div class="transition delay-100 hover:ring-sky-600 hover:shadow-lg relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
              {{$event->eventName}} sedang berlangsung</a>
            </div>
            @else
            <div class="transition delay-100 hover:ring-sky-600 hover:shadow-lg relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
              {{$event->eventName}} telah berlalu pada {{$event->eventDate}}</a>
            </div>
            @endif
          @endauth
        </div>
        <div class="text-center pb-48">
          <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">{!!$event->eventName!!}</h1>
          <p x-data="{ excerpt: '', maxLength: 350 }" x-init="excerpt = $el.innerText.trim().split(' ').slice(0, maxLength).join(' ') + ($el.innerText.length > maxLength ? '...' : '')" x-text="excerpt" class="mt-6 text-lg leading-8 text-gray-600">{!!$event->excerpt!!}</p>
          <div class="mt-10 flex items-center justify-center gap-x-6">
            @auth
            <!-- Somthing -->
            @else
            <a href="/masuk" wire:navigate class="transition duration-300 rounded-md hover:ring-sky-600 hover:ring hover:scale-105 bg-sky-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-white hover:text-gray-900 hover:shadow-lg focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Masuk</a>
            @endauth
            <a @click="const element = document.getElementById('detailContent'); element.scrollIntoView({ behavior: 'smooth', block: 'start' });" class="cursor-pointer transition duration-300 hover:translate-x-5 hover:border-b-2 hover:border-sky-600 hover:scale-110 text-sm font-semibold leading-6 text-gray-900">Lebih Lanjut <span aria-hidden="true">→</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>