<div class="fixed z-50 bottom-10 right-10 w-12 h-12 lg:w-16 lg:h-16">
   <a @click.window="window.scrollTo(0,0);" 
   class=" shadow-xl p-2 text-xs lg:text-md font-semibold text-white  bg-sky-500 hover:bg-sky-600 active:bg-sky-700 transition rounded-full h-full w-full flex">
      <span class="m-auto w-6 h-6 lg:w-8 lg:h-8">
         <svg data-slot="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M9.47 6.47a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 1 1-1.06 1.06L10 8.06l-3.72 3.72a.75.75 0 0 1-1.06-1.06l4.25-4.25Z"></path>
         </svg>
      </span>
   </a>
</div>