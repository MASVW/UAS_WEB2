<div>
    <div class="relative isolate px-6 pt-14 lg:px-8 z-20">
        <div class="mx-auto max-w-7xl pt-64 pb-24 sm:pt-64 sm:pb-24 lg:pt-64 lg:pb-40">
            <div class="flex min-h-full flex-col justify-center px-6">
                <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                    <p class="text-sky-800 font-bold text-2xl capitalize text-center underline underline-offset-8 decoration-solid decoration-sky-700">Hi!</p>
                    <h2 class="mt-5 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900 capitalize">Selamat Datang Kembali</h2>
                </div>

                <div class="mt-2 sm:mx-auto sm:w-full sm:max-w-sm">
                    <form class="space-y-6" method="post" action="/login">
                        @csrf
                        <div>
                            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Alamat surel</label>
                            <div class="mt-2">
                                <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-700 sm:text-sm sm:leading-6">
                            </div>
                            @error('email')
                                <label class="text-xs text-red-600 font-semibold">{{$message}}</label>
                            @enderror 
                        </div>

                        <div>
                            <div class="flex items-center justify-between">
                                <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Kata sandi</label>
                                <div class="text-sm">
                                    <a href="/lupa-password" class="font-semibold text-sky-500 px-2 py-1 rounded-lg transition hover:text-sky-700 hover:underline hover:decoration-sky-700 hover:underline-offset-1 ">Lupa kata sandi?</a>
                                </div>
                            </div>
                            <div class="mt-2">
                                <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-700 sm:text-sm sm:leading-6">
                            </div>
                            @error('password')
                                <label class="text-xs text-red-600 font-semibold">{{$message}}</label>
                            @enderror 
                        </div>

                        <div>
                            <button type="submit" class="flex w-full justify-center rounded-md bg-sky-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-sky-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-700">Masuk</button>
                        </div>
                    </form>

                    <p class="mt-2 text-center text-sm text-gray-500">
                        Belum terdaftar?
                        <a href="/daftar" class="font-semibold leading-6 text-sky-700 underline decoration-solid underline-offset-2 hover:text-indigo-500 capitalize">Daftar sekarang</a>
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>