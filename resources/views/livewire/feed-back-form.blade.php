<div>
    <livewire:background/>
    
    <span x-show="showForm" x-transition:enter="transition ease-out duration-3000" x-transition:enter-start="opacity-0 scale-80" x-transition:enter-end="opacity-100 scale-100" class="relative px-6 py-24 sm:py-32 lg:px-8 z-30">
        <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
            <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Umpan Balik</h2>
            <p class="mt-2 text-lg leading-8 text-gray-600">Umpan Balik Anda Sangat Berarti Bagi Kami!</p>
        </div>
        <form wire:poll.visible wire:submit.prevent="sendFeedback" class="mx-auto mt-16 max-w-xl sm:mt-20">
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                
            <div>
                <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">Nama Depan</label>
                <div class="mt-2.5">
                <input type="text" wire:model.blur="firstName" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                @error('firstName')
                    <label class="text-xs text-red-600 font-semibold">{{$message}}</label>
                @enderror    
                </div>
            </div>
            <div>
                <label for="lastName" class="block text-sm font-semibold leading-6 text-gray-900">Nama Belakang</label>
                <div class="mt-2.5">
                <input type="text" wire:model.blur="lastName" id="lastName" autocomplete="family-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                @error('lastName')
                    <label class="text-xs text-red-600 font-semibold">{{$message}}</label>
                @enderror  
                </div>
            </div>
            <div class="sm:col-span-2">
                <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Alamat Surel</label>
                <div class="mt-2.5">
                <input type="email" wire:model.blur="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                @error('email')
                    <label class="text-xs text-red-600 font-semibold">{{$message}}</label>
                @enderror   
                </div>
            </div>
            <div class="sm:col-span-2">
                <label for="subject" class="block text-sm font-semibold leading-6 text-gray-900">Subjek</label>
                <div class="mt-2.5">
                <input type="text" wire:model.blur="subject" id="subject" autocomplete="organization" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                @error('subject')
                    <label class="text-xs text-red-600 font-semibold">{{$message}}</label>
                @enderror  
                </div>
            </div>
            <div class="sm:col-span-2">
                <label for="phone" class="block text-sm font-semibold leading-6 text-gray-900">Nomor Telepon</label>
                <div class="relative mt-2.5">
                    <div class="absolute inset-y-0 opacity-50 flex items-center left-3 text-sm">
                        <span>ID (+62)</span>
                    </div>
                    <input type="tel" wire:model.blur="phone" id="phone" autocomplete="tel" class="block w-full rounded-md border-0 px-3.5 py-2 pl-20 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                @error('phone')
                    <label class="text-xs text-red-600 font-semibold">{{$message}}</label>
                @enderror  
            </div>
            <div class="sm:col-span-2">
                <label for="message" class="block text-sm font-semibold leading-6 text-gray-900">Pesan</label>
                <div class="mt-2.5">
                <textarea wire:model.blur="message" id="message" rows="4" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                @error('message')
                    <label class="text-xs text-red-600 font-semibold">{{$message}}</label>
                @enderror  
                </div>
            </div>
            </div>
            <div class="mt-10">
            <button type="submit" class="transition block w-full rounded-md bg-sky-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-sky-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Kirim</button>
            </div>
        </form>
        
    </span>
</div>
