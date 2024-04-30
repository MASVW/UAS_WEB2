<div class="relative isolate px-6 lg:px-8 z-20">
    <div class="mx-auto max-w-7xl pt-32">
        <h3 class="font-semibold leading-6 text-gray-900 text-4xl  underline underline-offset-2 decoration-sky-500 mb-10" id="modal-title">Keranjang Kamu</h3>
        <div class="text-left w-full grid grid-cols-6 gap-x-5">
            <div class="w-full flex mx-auto gap-5 col-span-4">
                <div class="rounded-lg w-full h-fit p-5 border border-sky-500 divide-y-2 ">
                    <div class="py-2">
                        <p class="font-semibold text-left text-base text-gray-500">Silahkan pilih item yang akan dibeli</p>
                    </div>
                    <div class="flex flex-col gap-2 divide-y divide-gray-500/20">
                        @foreach($this->bucket as $item)
                            <div class="flex flex-col" wire:key="{{$item->id}}">
                                <div class="flex flex-row w-full py-2">
                                    <input type="checkbox"
                                           wire:click="updateItem"
                                           wire:model="selectedItem"
                                           value="{{$item->id}}"
                                           wire
                                           class="w-4 h-4 text-slate-800 bg-slate-400 border-slate-500 rounded focus:ring-slate-700 focus:ring-2">
                                    <label for="{{$item->id}}" class="w-full flex justify-between ">
                                        <div class="flex flex-row pl-2">
                                            <img src="./img/Simposium.png" alt="" class="h-20">
                                            <div class="flex flex-col ml-2">
                                                <h1 class="text-ml text-gray-600 ">{{$item->events->eventName}}</h1>
                                                <h2 class="text-sm text-gray-600 ">{{$item->events->eventDate}}</h2>
                                            </div>
                                        </div>
                                        <h2 class="text-ml text-black ">
                                            <span x-data="{ formattedPrice: formatCurrency('{{ $item->prices->price }}') }" x-text="formattedPrice"></span>
                                        </h2>
                                    </label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="w-full flex mx-auto col-span-2">
                <div class="rounded-lg w-full h-fit p-5 border border-sky-500">
                    <h3 class="font-semibold leading-6 text-gray-900 text-lg  underline underline-offset-2 decoration-sky-500 mb-10" id="modal-title">Ringkasan Belanja</h3>

                    <div>
                        @if($this->selectedItem == [])
                            <p class="text-center font-semibold capitalize">Tidak ada item yang dipilih</p>
                        @else
                            @foreach($this->item as $item)

                                <div id="listItem" class="flex pt-1 pb-3 px-4">
                                    <div class="flex-1">
                                        <p class="text-sm">{{$loop->iteration}}. <span>{{$item->events->eventName}}</span></p>
                                        <p class="ms-5 text-xs">{{$item->prices->priceTag}}</p>
                                    </div>
                                    <div class="flex flex-row-reverse items-center text-xs">
                                        <p>
                                            <span
                                                x-data="{ formattedPrice: formatCurrency('{{$item->prices->price}}') }"
                                                x-text="formattedPrice">
                                            </span>
                                        </p>
                                    </div>
                                </div>

                                <hr>

                            @endforeach
                        @endif
                        @if($this->selectedItem == [])

                        @else
                        <div class="flex flex-col divide-y">
                            <div class="flex flex-row w-full py-2 justify-between px-2 ">
                                <h3 class="font-semibold leading-6 text-gray-900 text-lg  underline underline-offset-2 decoration-sky-500" >Total</h3>
                                <h3 class="font-semibold leading-6 text-gray-900 text-lg " >
                                    Rp. <span>{{$this->totalFormatted}}</span>
                                </h3>
                            </div>
                            <div class="flex flex-row w-full py-2 justify-end">
                                <button wire:click='confirm' type=submit class ='inline-flex items-center px-4 py-2 bg-sky-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-sky-600 focus:bg-sky-600 active:bg-sky-700 focus:outline-none focus:ring-2 focus:ring-sky-400 focus:ring-offset-2 transition ease-in-out duration-150 shadow-lg'>
                                    Check Out
                                </button>
                            </div>
                        </div>




                        @endif
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
