<div>
    <div class="relative isolate px-6 lg:px-8 z-20">
        <div class="mx-auto max-w-7xl pt-48 sm:pt-48 lg:pt-48 ">
            <div class="flex min-h-full flex-col justify-center px-6">
                <div class="mx-auto shadow-lg rounded-lg px-20 py-10 max-w-xl bg-white">
                    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                        <p class="text-sky-800 font-bold text-2xl capitalize text-center underline underline-offset-8 decoration-solid decoration-sky-700">Hi!</p>
                        <h2 class="mt-5 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900 capitalize">Senang bertemu denganmu!</h2>
                    </div>

                    <div class="mt-2 sm:mx-auto sm:w-full sm:max-w-sm">
                        <form class="space-y-6" method="POST" action="{{route('register')}}">
                            @csrf
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-4">
                                <div>
                                    <label for="firstName" class="block text-sm font-medium leading-6 text-gray-900">Nama Depan</label>
                                    <div class="mt-2">
                                        <input id="firstName" name="firstName" wire:model.blur="firstName" type="text" autocomplete="firstName" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-700 sm:text-sm sm:leading-6">
                                    </div>
                                    @error('firstName')
                                    <label class="text-xs text-red-600 font-semibold">{{$message}}</label>
                                    @enderror
                                </div>
                                <div>
                                    <label for="lastName" class="block text-sm font-medium leading-6 text-gray-900">Nama Belakang</label>
                                    <div class="mt-2">
                                        <input id="lastName" name="lastName" wire:model.blur="lastName" type="text" autocomplete="lastName" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-700 sm:text-sm sm:leading-6">
                                    </div>
                                    @error('lastName')
                                    <label class="text-xs text-red-600 font-semibold">{{$message}}</label>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <label for="birthDate" class="block text-sm font-medium leading-6 text-gray-900">Tanggal Lahir</label>
                                <div class="mt-2">
                                    <input id="birthDate" name="birthDate" wire:model.lazy="birthDate" type="date" autocomplete="birthDate" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-700 sm:text-sm sm:leading-6">
                                </div>
                                @error('birthDate')
                                <label class="text-xs text-red-600 font-semibold">{{$message}}</label>
                                @enderror
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Alamat surel</label>
                                <div class="mt-2">
                                    <input id="email" name="email" wire:model.blur="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-700 sm:text-sm sm:leading-6">
                                </div>
                                @error('email')
                                <label class="text-xs text-red-600 font-semibold">{{$message}}</label>
                                @enderror
                            </div>

                            <div>
                                <label for="phone" class="block text-sm font-semibold leading-6 text-gray-900">Nomor Telepon</label>
                                <div class="relative mt-2">
                                    <div class="absolute inset-y-0 opacity-50 flex items-center left-3 text-sm">
                                        <span>ID (+62)</span>
                                    </div>
                                    <input type="tel" name="phone" wire:model.blur="phone" id="phone" autocomplete="tel" class="block w-full rounded-md border-0 px-3.5 py-2 pl-20 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-700 sm:text-sm sm:leading-6">
                                </div>
                                @error('phone')
                                <label class="text-xs text-red-600 font-semibold">{{$message}}</label>
                                @enderror
                            </div>

                            <div>
                                <div class="flex items-center justify-between">
                                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Kata sandi</label>
                                </div>
                                <div class="mt-2">
                                    <input id="password" name="password" wire:model.blur="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-700 sm:text-sm sm:leading-6">
                                </div>
                                @error('password')
                                <label class="text-xs text-red-600 font-semibold">{{$message}}</label>
                                @enderror
                            </div>

                            <div>
                                <div class="flex items-center justify-between">
                                    <label for="password_confirmation" class="block text-sm font-medium leading-6 text-gray-900">Konfirmasi kata sandi</label>
                                </div>
                                <div class="mt-2">
                                    <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="password_confirmation" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-700 sm:text-sm sm:leading-6">
                                </div>
                                @error('password_confirmation')
                                <label class="text-xs text-red-600 font-semibold">{{$message}}</label>
                                @enderror
                                <span>
                                    <div class="text-xs font-semibold text-gray-900">
                                        <ul>
                                            <li><span class="text-red-600">*</span>Gabungan huruf besar & kecil, minimal 8 karakter</li>
                                            <li><span class="text-red-600">*</span>Mencakup angka</li>
                                        </ul>
                                    </div>
                                </span>
                            </div>


                            <div>
                                <button type="submit" class="flex w-full justify-center rounded-md bg-sky-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-sky-600 active:bg-sky-700 transition focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-700">Daftar</button>
                            </div>
                        </form>

                        <p class="mt-2 text-center text-sm text-gray-500">
                            Sudah terdaftar?
                            <a href="/masuk" wire:navigate class="font-semibold leading-6 text-sky-700 underline decoration-solid underline-offset-2 hover:text-indigo-500 capitalize ">Masuk sekarang</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>