<div >
    @if($halaman == 1)
    <div>
        <div class="relative isolate px-6 lg:px-8 z-20">
            <div class="mx-auto pt-48 sm:pt-48 lg:pt-48 ">
                <div class="flex min-h-full flex-col justify-center ">
                    <div class="mx-auto shadow-lg rounded-lg px-20 py-10 w-full bg-white">
                        {{-- <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                            <h2 class="mt-5 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900 capitalize my-5">Konfirmasi Pesanan</h2>
                        </div> --}}
    
                        <div class="mt-2 sm:mx-auto sm:w-full ">
                                <div class="grid grid-cols-1  gap-x-4 ">
                                        <ol class="items-center flex py-4">
                                            <li class="relative mb-6 sm:mb-0 w-full">
                                                <div class="flex items-center justify-center">
                                                    <div class="z-10 flex items-center justify-center w-8 h-8 bg-sky-500  rounded-full ring-8 ring-white sm:ring-8 shrink-0 text-white ">
                                                        1
                                                    </div>
                                                    {{-- <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div> --}}
                                                </div>
                                                <div class="text-center">
                                                    <h3 class=" my-3 text-lg font-semibold text-gray-900 text-center hidden sm:block ">Konfirmasi Pesanan</h3>
                                                    {{-- <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on December 2, 2021</time>
                                                    <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with dozens of web components and interactive elements.</p> --}}
                                                </div>
                                            </li>
                                            <li class="relative mb-6 sm:mb-0 w-full opacity-20">
                                                <div class="flex items-center justify-center">
                                                    <div class="z-10 flex items-center justify-center w-8 h-8 bg-sky-500 rounded-full ring-8 ring-white sm:ring-8 shrink-0 text-white  ">
                                                        2
                                                    </div>
                                                    {{-- <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div> --}}
                                                </div>
                                                <div class="text-center">
                                                    <h3 class="my-3 text-lg font-semibold text-gray-900 hidden sm:block">Mengisi History</h3>
                                                    {{-- <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on December 23, 2021</time>
                                                    <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with dozens of web components and interactive elements.</p> --}}
                                                </div>
                                            </li>
                                            <li class="relative mb-6 sm:mb-0 w-full opacity-20">
                                                <div class="flex items-center justify-center">
                                                    <div class="z-10 flex items-center justify-center w-8 h-8 bg-sky-500 rounded-full ring-8 ring-white sm:ring-8 shrink-0 text-white  ">
                                                        3
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <h3 class="my-3 text-lg font-semibold text-gray-900 hidden sm:block">Pembayaran</h3>
                                                    {{-- <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on January 5, 2022</time>
                                                    <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with dozens of web components and interactive elements.</p> --}}
                                                </div>
                                            </li>
                                        </ol>
    
                                        
                                @foreach($this->item as $a)
                                <div class="flex w-full border-2 h-full rounded-lg p-8 items-center">
                                    <div class="flex-1">
                                        <div class="mb-4">
                                            <h4 class="text-xl font-semibold text-sky-500">{{$a->events->eventName}}</h4>
                                        </div>
                                        <div>
                                            <p class="">
                                                Posisi: {{$a->prices->positions->desc}}
                                            </p>
                                        </div>
                                        <div>
                                            <p class="">
                                                Paket: {{$a->prices->priceTag}}
                                            </p>
                                        </div><div>
                                            <p class="">
                                                Harga: {{$a->prices->price}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="">
                                        <button class="w-full justify-center rounded-md bg-red-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-red-600 active:bg-red-700 transition focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-700 ">
                                        Hapus
                                        </button>
                                    </div>
                                </div>  
                                @endforeach
                                        
                                <div class="flex justify-end py-8">
                                    {{-- <div class="">
                                        <button type="submit" 
                                        wire:click="prevPage"
                                        class="flex w-full justify-center rounded-md border border-sky-500 text-sky-500 px-3 py-1.5 text-sm font-semibold leading-6  shadow-sm hover:bg-sky-500 hover:text-white active:bg-sky-700 transition focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-700">Kembali</button>
                                    </div> --}}
                                    <div class="ps-4">
                                        <button type="submit" 
                                        wire:click="nextPage"
                                        class="flex  w-full justify-center rounded-md bg-sky-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-sky-600 active:bg-sky-700 transition focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-700">Isi Formulir</button>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
    @elseif($halaman == 2)

    <div>
        <div class="relative isolate px-6 lg:px-8 z-20">
            <div class="mx-auto pt-48 sm:pt-48 lg:pt-48 ">
                <div class="flex min-h-full flex-col justify-center ">
                    <div class="mx-auto shadow-lg rounded-lg px-20 py-10 w-full bg-white">
                        {{-- <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                            <h2 class="mt-5 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900 capitalize my-5">Konfirmasi Pesanan</h2>
                        </div> --}}
    
                        <div class="mt-2 sm:mx-auto sm:w-full ">
                                <div class="grid grid-cols-1  gap-x-4 ">
                                        <ol class="items-center flex py-4">
                                            <li class="relative mb-6 sm:mb-0 w-full">
                                                <div class="flex items-center justify-center opacity-20">
                                                    <div class="z-10 flex items-center justify-center w-8 h-8 bg-blue-800 rounded-full ring-8 ring-white sm:ring-8 shrink-0 text-white ">
                                                        1
                                                    </div>
                                                    {{-- <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div> --}}
                                                </div>
                                                <div class="text-center">
                                                    <h3 class=" my-3 text-lg font-semibold text-gray-900 text-center hidden sm:block">Konfirmasi Pesanan</h3>
                                                    {{-- <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on December 2, 2021</time>
                                                    <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with dozens of web components and interactive elements.</p> --}}
                                                </div>
                                            </li>
                                            <li class="relative mb-6 sm:mb-0 w-full ">
                                                <div class="flex items-center justify-center">
                                                    <div class="z-10 flex items-center justify-center w-8 h-8 bg-blue-800 rounded-full ring-8 ring-white sm:ring-8 shrink-0 text-white  ">
                                                        2
                                                    </div>
                                                    {{-- <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div> --}}
                                                </div>
                                                <div class="text-center">
                                                    <h3 class="my-3 text-lg font-semibold text-gray-900 hidden sm:block">Mengisi Formulir</h3>
                                                    {{-- <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on December 23, 2021</time>
                                                    <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with dozens of web components and interactive elements.</p> --}}
                                                </div>
                                            </li>
                                            <li class="relative mb-6 sm:mb-0 w-full opacity-20">
                                                <div class="flex items-center justify-center">
                                                    <div class="z-10 flex items-center justify-center w-8 h-8 bg-blue-800 rounded-full ring-8 ring-white sm:ring-8 shrink-0 text-white  ">
                                                        3
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <h3 class="my-3 text-lg font-semibold text-gray-900 hidden sm:block">Pembayaran</h3>
                                                    {{-- <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on January 5, 2022</time>
                                                    <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with dozens of web components and interactive elements.</p> --}}
                                                </div>
                                            </li>
                                        </ol>
    
                                @foreach($this->item as $a)
                                <div class="flex w-full border-2 h-full rounded-lg p-8 items-center">
                                    <div class="flex-1">
                                        <div class="mb-4">
                                            <h4 class="text-xl font-semibold text-sky-500">{{$a->events->eventName}}</h4>
                                        </div>
                                        <div>
                                            <p class="">
                                                Posisi: {{$a->prices->positions->desc}}
                                            </p>
                                        </div>
                                        <div>
                                            <p class="">
                                                Paket: {{$a->prices->priceTag}}
                                            </p>
                                        </div><div>
                                            <p class="">
                                                Harga: {{$a->prices->price}}
                                            </p>
                                        </div>
                                        <form class=" mt-8">
                                            <div class="w-full">
                                                <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                                                    <div>
                                                        <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">Nama Depan</label>
                                                        <div class="mt-2.5">
                                                            <input type="text" wire:model.blur="firstName" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 ">
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
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    {{-- <div class="">
                                        <button class="w-full justify-center rounded-md bg-red-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-red-600 active:bg-red-700 transition focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-700 ">
                                        Hapus
                                        </button>
                                    </div> --}}
                                </div>  
                                @endforeach
                                
                                        
                                <div class="flex justify-end py-8">
                                    <div class="">
                                        <button type="submit" 
                                        wire:click="prevPage"
                                        class="flex w-full justify-center rounded-md border border-sky-500 text-sky-500 px-3 py-1.5 text-sm font-semibold leading-6  shadow-sm hover:bg-sky-500 hover:text-white active:bg-sky-700 transition focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-700">Kembali</button>
                                    </div>
                                    <div class="ps-4">
                                        <button type="submit" 
                                        wire:click="nextPage"
                                        class="flex  w-full justify-center rounded-md bg-sky-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-sky-600 active:bg-sky-700 transition focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-700">Lanjut</button>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </div>

    @else

    <div>
        <div class="relative isolate px-6 lg:px-8 z-20">
            <div class="mx-auto pt-48 sm:pt-48 lg:pt-48 ">
                <div class="flex min-h-full flex-col justify-center ">
                    <div class="mx-auto shadow-lg rounded-lg px-20 py-10 w-full bg-white">
                        {{-- <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                            <h2 class="mt-5 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900 capitalize my-5">Konfirmasi Pesanan</h2>
                        </div> --}}
    
                        <div class="mt-2 sm:mx-auto sm:w-full ">
                                <div class="grid grid-cols-1  gap-x-4 ">
                                        <ol class="items-center flex py-4">
                                            <li class="relative mb-6 sm:mb-0 w-full">
                                                <div class="flex items-center justify-center opacity-20">
                                                    <div class="z-10 flex items-center justify-center w-8 h-8 bg-blue-800 rounded-full ring-8 ring-white sm:ring-8 shrink-0 text-white ">
                                                        1
                                                    </div>
                                                    {{-- <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div> --}}
                                                </div>
                                                <div class="text-center">
                                                    <h3 class=" my-3 text-lg font-semibold text-gray-900 text-center hidden sm:block">Konfirmasi Pesanan</h3>
                                                    {{-- <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on December 2, 2021</time>
                                                    <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with dozens of web components and interactive elements.</p> --}}
                                                </div>
                                            </li>
                                            <li class="relative mb-6 sm:mb-0 w-full opacity-20">
                                                <div class="flex items-center justify-center">
                                                    <div class="z-10 flex items-center justify-center w-8 h-8 bg-blue-800 rounded-full ring-8 ring-white sm:ring-8 shrink-0 text-white  ">
                                                        2
                                                    </div>
                                                    {{-- <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div> --}}
                                                </div>
                                                <div class="text-center">
                                                    <h3 class="my-3 text-lg font-semibold text-gray-900 hidden sm:block">Mengisi History</h3>
                                                    {{-- <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on December 23, 2021</time>
                                                    <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with dozens of web components and interactive elements.</p> --}}
                                                </div>
                                            </li>
                                            <li class="relative mb-6 sm:mb-0 w-full ">
                                                <div class="flex items-center justify-center">
                                                    <div class="z-10 flex items-center justify-center w-8 h-8 bg-blue-800 rounded-full ring-8 ring-white sm:ring-8 shrink-0 text-white  ">
                                                        3
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <h3 class="my-3 text-lg font-semibold text-gray-900 hidden sm:block">Pembayaran</h3>
                                                    {{-- <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on January 5, 2022</time>
                                                    <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with dozens of web components and interactive elements.</p> --}}
                                                </div>
                                            </li>
                                        </ol>
    
                                        @foreach($this->item as $a)
                                <div class="flex w-full border-2 h-full rounded-lg p-8 items-center">
                                    <div class="flex-1">
                                        <div class="mb-4">
                                            <h4 class="text-xl font-semibold text-sky-500">{{$a->events->eventName}}</h4>
                                        </div>
                                        <div>
                                            <p class="">
                                                Posisi: {{$a->prices->positions->desc}}
                                            </p>
                                        </div>
                                        <div>
                                            <p class="">
                                                Paket: {{$a->prices->priceTag}}
                                            </p>
                                        </div>
                                        {{-- <div>
                                            <p class="">
                                                Harga: Rp.128.000,00
                                            </p>
                                        </div> --}}
                                    </div>
                                    <div class="">
                                        <p class="text-xl font-semibold text-sky-500">
                                            {{$a->prices->price}}
                                        </p>
                                    </div>
                                </div>  
                                @endforeach
                                
                                        
                                <div class="flex mt-10 justify-end w-full text-sky-500 font-semibold">
                                    <p class="text-2xl">
                                        Total: 256.000,00
                                    </p>
                                </div>
                                
                                <div class="flex justify-end mt-6">
                                    <div class="">
                                        <button type="submit" 
                                        wire:click="prevPage"
                                        class="flex w-full justify-center rounded-md border border-sky-500 text-sky-500 px-3 py-1.5 text-sm font-semibold leading-6  shadow-sm hover:bg-sky-500 hover:text-white active:bg-sky-700 transition focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-700">Kembali</button>
                                    </div>
                                    <div class="ps-4">
                                        <button type="submit" class="flex  w-full justify-center rounded-md bg-sky-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-sky-600 active:bg-sky-700 transition focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-700">Bayar Sekarang</button>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </div>

    @endif
    

</div>