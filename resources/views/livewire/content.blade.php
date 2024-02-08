  <div>
    <livewire:background>
      <div class="relative isolate px-6 pt-14 lg:px-8 z-20">
        <div class="mx-auto max-w-4xl pt-48 pb-64 sm:py-48 lg:py-56">
          <div class="hidden sm:mb-8 sm:flex sm:justify-center">
            @auth
            <!-- Nothing -->
            @else
            <div class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
              Belum punya akun? <a href="#" class="font-semibold text-indigo-600"><span class="absolute inset-0" aria-hidden="true"></span>Daftar Sekarang! <span aria-hidden="true">&rarr;</span></a>
            </div>
            @endauth
          </div>
          <div wire:key="content-{{ $this->id }}" class="text-center pb-48">
            <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">{{$this->event->eventName}}</h1>
            <p wire:key x-data="{ excerpt: '', maxLength: 350 }"
              x-init="excerpt = $el.innerText.trim().split(' ').slice(0, maxLength).join(' ') + ($el.innerText.length > maxLength ? '...' : '')"
              x-text="excerpt"
              class="mt-6 text-lg leading-8 text-gray-600">{{$this->event->excerpt}}</p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
              <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Masuk</a>
              <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Lebih Lanjut <span aria-hidden="true">→</span></a>
            </div>
          </div>
        </div>
      </div>
      
    
      <!-- Konten Bawah -->
    <livewire:detail-content/>

    <livewire:feed-back-form/>
    
    </livewire:background>

  </div>