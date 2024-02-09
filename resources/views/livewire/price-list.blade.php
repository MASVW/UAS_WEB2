<div x-data="{ price: false}"
    class="text-left mx-auto items-center flex flex-col w-full">
    <!-- Menu Button -->
  <div class="w-full relative">
    <button wire:key="{{$currentPositon}}" @click="price = ! price" type="button" class="focus:ring-blue-500 hover:underline active:bg-sky-700 hover:underline-offset-2 active:text-white transition uppercase inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-sky-400 hover:text-white" id="menu-button" aria-expanded="true" aria-haspopup="true">
      Jenis Harga : {{$currentPositon}}
      <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
      </svg>
    </button>
    <span 
    x-show="price" 
    x-transition:enter="transition ease-out duration-100"
    x-transition:enter-start="opacity-0 scale-95"
    x-transition:enter-end="opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-75"
    x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-95"

    class="w-full absolute right-0 top-10 z-10 origin-top-right divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
    @foreach($this->positions as $position)
    <div class="py-1" role="none">
      <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
      <a @click="price = false" ~~~wire:click.prevent="changePrice({{$position->id}})" class="text-gray-700 block px-4 py-2 text-sm hover:bg-slate-100" role="menuitem" tabindex="-1" id="menu-item-0">{{$position->desc}}</a>
    </div>
    @endforeach
  </span>
  </div>

  <!-- Menu Opsi -->
  <div class="mt-3 relative w-full overflow-y-scroll overflow-hidden h-custom-32-rem max-w-screen-md mx-auto">
    @foreach($this->prices as $price)

      <div class="mx-auto w-price  my-5 p-5 grid grid-cols-2 border rounded-xl hover:shadow-lg hover:ring-2 hover:ring-sky-600 transition hover:scale-110 duration-500 delay-150">
        <div>
          <div class="relative pl-9">
            <dt class="inline font-semibold text-gray-900">
              <svg class="absolute top-1 left-1 w-5 h-5 text-sky-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.1" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
              </svg>
                Tipe Harga : {{$price->priceTag}}
            </dt>
            <div>
              {{$price->priceDesc}}
            </div>
          </div>
          <div class="relative pl-9">
            <dt class="inline font-semibold text-gray-900">
              <svg class="absolute left-1 top-1 text-sky-500 w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path d="M4.5 3.75a3 3 0 0 0-3 3v.75h21v-.75a3 3 0 0 0-3-3h-15Z" />
                <path fill-rule="evenodd" d="M22.5 9.75h-21v7.5a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3v-7.5Zm-18 3.75a.75.75 0 0 1 .75-.75h6a.75.75 0 0 1 0 1.5h-6a.75.75 0 0 1-.75-.75Zm.75 2.25a.75.75 0 0 0 0 1.5h3a.75.75 0 0 0 0-1.5h-3Z" clip-rule="evenodd" />
              </svg>
              <span x-data="{ formattedPrice: formatCurrency('{{ $price->price }}') }" x-text="formattedPrice"></span>
            </dt>
          </div>
        </div>
        <div class="flex justify-end w-full">
        <button class="transition hover:bg-sky-600 active:bg-sky-700 my-auto px-4 py-2 rounded-lg bg-sky-500 border text-white font-semibold uppercase">
          <div class="flex">
              <p class="mr-2">TAMBAH</p>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
              </svg>
          </div>
      </button>
        </div>
      </div>      
      @endforeach
  </div>
</div>
