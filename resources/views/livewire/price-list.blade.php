<div x-data="{ price: false}"
    class="relative inline-block text-left w-full mx-auto">
  <div class="w-full">
    <button @click="price = ! price" type="button" class="uppercase inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50" id="menu-button" aria-expanded="true" aria-haspopup="true">
      Student
      <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
      </svg>
    </button>
  </div>

  <!--
    Dropdown menu, show/hide based on menu state.

    Entering: "transition ease-out duration-100"
      From: "transform opacity-0 scale-95"
      To: "transform opacity-100 scale-100"
    Leaving: "transition ease-in duration-75"
      From: "transform opacity-100 scale-100"
      To: "transform opacity-0 scale-95"
  -->
  <span 
    x-show="price" 
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0 scale-90"
    x-transition:enter-end="opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-90"

    class="w-full absolute right-0 z-10 origin-top-right divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
    <div class="py-1" role="none">
      <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
      <a @click="price = false" href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-slate-100" role="menuitem" tabindex="-1" id="menu-item-0">Edit</a>
      </div>
    <div class="py-1" role="none">
      <a @click="price = false" href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-slate-100" role="menuitem" tabindex="-1" id="menu-item-2">Archive</a>
      </div>
    <div class="py-1" role="none">
      <a @click="price = false" href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-slate-100" role="menuitem" tabindex="-1" id="menu-item-4">Share</a>
      </div>
    <div class="py-1" role="none">
      <a @click="price = false" href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-slate-100" role="menuitem" tabindex="-1" id="menu-item-6">Delete</a>
    </div>
</span>
</div>
