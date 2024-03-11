<div x-show="bucket"
     x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="opacity-0"
     x-transition:enter-end="opacity-100"
     class="absolute z-30">

    <div wire:loading>
        <x-loading-Modals>{{__('Item sedang dihapus')}}</x-loading-Modals>
    </div>

    <div
        class="fixed inset-0 z-20 w-full min-h-full overflow-y-auto bg-gray-500 bg-opacity-50 transition-opacity flex justify-center items-center p-4">

        <div
            class="top-10 relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-xl">
            <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                <div class="flex sm:flex sm:items-center">
                    <div
                        class="m-auto p-1 flex flex-shrink-0 items-center justify-center rounded-full bg-sky-500 sm:mx-0 sm:h-9 sm:w-9">
                        <svg class="h-5 w-5 sm:h-5 sm:w-5 text-white" data-slot="icon" fill="none" stroke-width="1.5"
                             stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                             aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"></path>
                        </svg>
                    </div>
                    <div class="flex-1 text-center sm:ml-4 sm:mt-0 sm:text-left">
                        <h3 class="font-semibold leading-6 text-gray-900 text-sm sm:text-xl underline underline-offset-2 decoration-sky-500"
                            id="modal-title">Keranjang Kamu</h3>
                    </div>
                    <div class="flex-0 text-right">
                        <button x-on.away:click="bucket = false">
                            <svg class="w-6 h-6 text-stone-800 text-opacity-50 hover:text-opacity-100" data-slot="icon"
                                 fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="w-full xl:h-96 2xl:h-[35rem] overflow-y-visible overflow-hidden">
                <div class="m-5">
                    @foreach($this->bucket as $item)
                        <div class="text-sm relative" x-data="{detailBucket : false}">
                            <div class="flex mt-2 pe-2 rounded-lg border-2 border-stone-500 hover:scale-105 transition"
                                 x-bind:class="{ 'scale-105': detailBucket }">
                                <div class="flex-1 p-2 flex">
                                    <div class="flex-none my-auto">
                                        <input class="rounded-full" type="checkbox" wire:model="selectedItem"
                                               value="{{$item->id}}">
                                    </div>
                                    <div class="flex-none ms-3 my-auto">
                                        {{$loop->iteration}}
                                    </div>
                                    <div class="ms-2 flex-1" id="text">
                                        <div class="grid grid-rows-2">
                                            <div>
                                                {{$item->prices->priceTag}}
                                            </div>
                                            <div>
                                                {{$item->events->eventName}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hidden flex-1 text-right my-auto sm:inline-block">
                                        <span x-data="{ formattedPrice: formatCurrency('{{ $item->prices->price }}') }"
                                              x-text="formattedPrice"></span>
                                    </div>
                                </div>
                                <div class="grow-0 my-auto">
                                    <button x-on:click.stop="detailBucket = !detailBucket">
                                            <span>
                                                <svg class="w-3 h-3" data-slot="icon" fill="none" stroke-width="1.5"
                                                     stroke="currentColor" viewBox="0 0 24 24"
                                                     xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="m19.5 8.25-7.5 7.5-7.5-7.5"></path>
                                                </svg>
                                            </span>
                                    </button>
                                </div>
                            </div>
                            <div x-show="detailBucket" x-transition class="static visible">
                                <div
                                    class="border-b-2  border-l-2 border-r-2 border-opacity-20 border-stone-500 w-full h-32 px-4 py-2 rounded-br-lg rounded-bl-lg drop-shadow-lg">
                                    <div class="w-full h-full">
                                        <div>
                                            <a href="/event/{{$item->events->slug}}" wire:navigate
                                               class="font-semibold underline-offset-1 underline">{{$item->events->eventName}}</a>
                                        </div>
                                        <div class="flex w-full">
                                            <div class="grow">
                                                <table>
                                                    <tbody class="text-xs sm:text-sm inline-block align-top">
                                                    <tr class="items-start">
                                                        <td colspan="2">Paket</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>{{$item->prices->priceDesc}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">Posisi</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>{{$item->prices->positions->desc}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">Waktu</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>{{$item->events->eventDate}}</td>
                                                    </tr>
                                                    <tr class="sm:hidden">
                                                        <td colspan="2">Harga</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td><span
                                                                x-data="{ formattedPrice: formatCurrency('{{$item->prices->price}}') }"
                                                                x-text="formattedPrice"></span></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="flex-none w-10 flex justify-center items-center">
                                                <button
                                                    x-on:click="detailBucket = !detailBucket; $wire.removeItem({{$item->id}})">
                                                    <svg class="h-4 sm:h-6 w-4 sm:w-6" data-slot="icon" fill="none"
                                                         stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                                                         xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
            <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                <div>
                    <button x-on:click="bucket = false" type="button"
                            class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-stone-700 active:bg-stone-800 active:ring active:ring-stone-500 hover:text-white sm:mt-0 sm:w-auto transition">
                        Tutup
                    </button>
                    <button type="submit" wire:click="checkOut"
                            class="mt-3 inline-flex w-full justify-center rounded-md bg-sky-500 px-3 py-2 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-sky-600 active:bg-sky-700 active:ring active:ring-sky-300 hover:text-white sm:mt-0 sm:w-auto transition">
                        Lanjutkan
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
