<div class="static flex w-full justify-center my-10">
    <div class="relative w-9/12 xl:w-[80rem] top-20 h-full px-6 my-16 py-16 lg:px-8 bg-white rounded-lg shadow-lg z-30 border border-slate-50 border-opacity-50">
        <div class="flex px-4 sm:px-0 items-center">
            <div class="flex-1 text-xl">
                <h3 class="font-semibold leading-7 text-gray-900">Hi {{$this->fullName}}!</h3>
                <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">{{$this->email}}</p>
            </div>
            <div class="flex-grow-0">
                <button class="mx-2 px-2 py-2 rounded-lg text-white bg-sky-500 inline-flex items-center">
                    <span>
                        <svg data-slot="icon" class="w-5 h-5 mx-1" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                          <path clip-rule="evenodd" fill-rule="evenodd" d="M12 1.5a5.25 5.25 0 0 0-5.25 5.25v3a3 3 0 0 0-3 3v6.75a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3v-6.75a3 3 0 0 0-3-3v-3c0-2.9-2.35-5.25-5.25-5.25Zm3.75 8.25v-3a3.75 3.75 0 1 0-7.5 0v3h7.5Z"></path>
                        </svg>
                    </span>
                    <span class="hidden md:block me-1">
                        Ubah Sandi
                    </span>
                </button>
                <button class="mx-2 px-2 py-2 rounded-lg text-white bg-sky-500 inline-flex items-center">
                    <span>
                        <svg class="w-5 h-5 mx-1" data-slot="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="m5.433 13.917 1.262-3.155A4 4 0 0 1 7.58 9.42l6.92-6.918a2.121 2.121 0 0 1 3 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 0 1-.65-.65Z"></path>
                            <path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0 0 10 3H4.75A2.75 2.75 0 0 0 2 5.75v9.5A2.75 2.75 0 0 0 4.75 18h9.5A2.75 2.75 0 0 0 17 15.25V10a.75.75 0 0 0-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5Z"></path>
                        </svg>
                    </span>
                    <span class="hidden md:block me-1">
                        <a href="/profil/{{auth()->user()->firstName}}/update">
                            Perbaharui Profile
                        </a>
                    </span>
                </button>

            </div>
        </div>
        <div class="mt-6 border-t border-gray-100">
            <dl class="divide-y divide-gray-100">
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Nama Lengkap</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0 text-left sm:text-right lg:text-left">{{$this->fullName}}</dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">No. Handphone</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0 text-left sm:text-right lg:text-left">{{$this->phone}}</dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Alamat Surel</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0 text-left sm:text-right lg:text-left">{{$this->email}}</dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Tanggal Lahir</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0 text-left sm:text-right lg:text-left">{{$this->birthDate}}</dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Riwayat Pembelian</dt>
                    <dd class="mt-2 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                        <ul role="list" class="divide-y divide-gray-100 rounded-md border border-gray-200">
                            @if(is_array($this->history))
                            <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
                                <div class="flex w-0 flex-1 items-center">
                                    <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z" clip-rule="evenodd" />
                                    </svg>
                                    <div class="ml-4 flex min-w-0 flex-1 gap-2">
                                        <span class="truncate font-medium">resume_back_end_developer.pdf</span>
                                        <span class="flex-shrink-0 text-gray-400">2.4mb</span>
                                    </div>
                                </div>
                                <div class="ml-4 flex-shrink-0">
                                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Lebih Lanjut</a>
                                </div>
                            </li>
                            @elseif(is_object($this->history))
                                @foreach($this->history as $history)
                                    <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
                                        <div class="flex w-0 flex-1 items-center">
                                            @if($history->payments->status == 'Paid')
                                                <svg class="h-5 w-5 flex-shrink-0 text-green-500" data-slot="icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path clip-rule="evenodd" fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"></path>
                                                </svg>
                                            @elseif($history->payments->status == 'Unpaid')
                                                <svg class="h-5 w-5 flex-shrink-0 text-red-500" data-slot="icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path clip-rule="evenodd" fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-1.72 6.97a.75.75 0 1 0-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 1 0 1.06 1.06L12 13.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L13.06 12l1.72-1.72a.75.75 0 1 0-1.06-1.06L12 10.94l-1.72-1.72Z"></path>
                                                </svg>
                                            @endif
                                            <div class="ml-4 flex min-w-0 flex-1 gap-2 items-center">
                                                <span class="truncate font-medium">{{$history->payments->id}}</span>
                                                <span class="truncate font-medium">{{$history->events->eventName}}</span>
                                                <span class="font-medium hidden lg:block rounded-full bg-slate-300 bg-opacity-50 text-black text-opacity-50 px-5 py-1">{{$history->prices->priceTag}} hasdhasdhasdhasdh</span>
                                            </div>
                                        </div>
                                        <div class="ml-4 flex-shrink-0">
                                            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                                                <svg class="w-5 h-5 text-gray-500" data-slot="icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path clip-rule="evenodd" fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </li>
                                @endforeach
                            @else

                            @endif
                        </ul>
                    </dd>
                </div>
            </dl>
        </div>
    </div>
</div>
