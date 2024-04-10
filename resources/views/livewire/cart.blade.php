<!-- Alpine.js script -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@3.13.5/dist/alpine.min.js" defer></script>

<!-- Your existing HTML code -->
<div x-data="{ checkedItems: [], updateCheckedItems: function(event) {
    const itemId = event.target.value;
    if (event.target.checked) {
        this.checkedItems.push(itemId);
    } else {
        const index = this.checkedItems.indexOf(itemId);
        if (index !== -1) {
            this.checkedItems.splice(index, 1);
        }
    }
    console.log(this.checkedItems); // Optional: Add this line for debugging
}}">
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="relative isolate px-6 lg:px-8 z-20">
        <div class="mx-auto max-w-7xl pt-32">
            <h3 class="font-semibold leading-6 text-gray-900 text-4xl  underline underline-offset-2 decoration-sky-500 mb-10" id="modal-title">Keranjang Kamu</h3>
            <div class="text-left flex flex-row md:gap-5"> 
                <div class=" w-full flex mx-auto gap-5">
                    <div class="basis-2/3 rounded-lg w-full h-fit p-5 border border-sky-500 divide-y-2 ">
                        <div class="py-2">
                            <input type="checkbox" name="Pilih Semua" id="select-all" class="w-4 h-4 text-slate-800 bg-slate-400 border-slate-500 rounded focus:ring-slate-700 focus:ring-2 ">
                            <label for="select-all" class="text-ml leading-8 text-gray-600 font-bold pl-2"> Pilih Semua</label>
                        </div>
                        
                        <div class="flex flex-col gap-2">
                            <!-- Loop through your items -->
                            @foreach($this->bucket as $item)
                            <div class="flex flex-col divide-y">
                                <div class="flex flex-row w-full py-2">
                                    <input type="checkbox" value="{{$item->id}}" name="{{$item->id}}" id="{{$item->id}}" class="w-4 h-4 text-slate-800 bg-slate-400 border-slate-500 rounded focus:ring-slate-700 focus:ring-2" x-on:change="updateCheckedItems($event)">
                                    <label for="{{$item->id}}" class="w-full flex justify-between ">
                                        <div class="flex flex-row pl-2">
                                            <img src="./img/Simposium.png" alt="" class="h-20">
                                            <div class="flex flex-col ml-2">
                                                <h1 class="text-ml text-gray-600 ">{{$item->events->eventName}}</h1>
                                                <h2 class="text-sm text-gray-600 ">{{$item->events->eventDate}}</h2>
                                            </div>
                                        </div>
                                        <h2 class="text-ml text-black "> <span x-data="{ formattedPrice: formatCurrency('{{ $item->prices->price }}') }"
                                              x-text="formattedPrice"></span></h2>
                                    </label>
                                </div>
                            @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="max-h-96 w-fit flex mx-auto basis-1/3">
                    <div class="rounded-lg w-full h-fit p-5 border border-sky-500 divide-y-2">
                        <h3 class="font-semibold leading-6 text-gray-900 text-lg  underline underline-offset-2 decoration-sky-500 mb-10" id="modal-title">Ringkasan Belanja</h3>
                        <!-- Display checked items -->
                        <div x-text="'Checked Items: ' + checkedItems.join(', ')"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
