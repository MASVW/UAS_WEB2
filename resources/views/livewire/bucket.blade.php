<div x-show="bucket" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 scale-100 " x-transition:leave-end="opacity-0 scale-90" class="relative z-20" aria-labelledby="modal-title" role="dialog" aria-modal="true">

    <div class="fixed inset-0 bg-gray-500 bg-opacity-50 transition-opacity"></div>

    <div class="fixed inset-0 z-20 w-screen overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">

            <div class="top-10 relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                    <div class="flex sm:flex sm:items-center">
                        <!-- <div class="bg-blue-600"> -->
                        <div class="mx-auto flex h-9 w-9 flex-shrink-0 items-center justify-center rounded-full bg-sky-500 sm:mx-0 sm:h-9 sm:w-9">
                            <svg class="h-5 w-5 text-white" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"></path>
                            </svg>
                        </div>
                        <div class="text-center sm:ml-4 sm:mt-0 sm:text-left">
                            <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Keranjang Kamu</h3>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
                <div class="w-full h-96 overflow-y-visible overflow-hidden">
                    <div class="m-5">
                        @foreach($this->event as $event)
                        <div class="relative" x-data="{detailBucket : false}">
                            <div class="flex mt-2 pe-2 border rounded-lg border-stone-500">
                                <div class="flex-1 p-2 flex">
                                    <div class="flex-none my-auto">
                                        <form action="">
                                            <input class="rounded-full" type="checkbox" name="id" id="">
                                        </form>
                                    </div>  
                                    <div class="flex-none ms-3 my-auto">
                                        {{$loop->iteration}}
                                    </div>
                                    <div class="ms-2 flex-1" id="text">
                                        <div class="grid grid-rows-2">
                                            <div>
                                                {{$event->eventName}}
                                            </div>
                                            <div>
                                                {{$event->eventName}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-1 text-right my-auto">
                                        Harga
                                    </div>
                                </div>
                                <div class="grow-0 my-auto">
                                    <button x-on:click="detailBucket = !detailBucket">
                                    <span>
                                        <svg class="w-3 h-3" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"></path>
                                        </svg>
                                    </span>
                                    </button>
                                    
                                </div>
                            </div>
                            <div x-show="detailBucket" class="static visible">
                                <div class="w-full bg-sky-400 h-32">
                                        Halo
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @foreach($this->bucket as $item)
                        {{$item}}
                        @endforeach
                    </div>

                </div>
                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <button x-on:click="bucket = false" type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Tutup</button>
                </div>
            </div>
        </div>
    </div>
</div>