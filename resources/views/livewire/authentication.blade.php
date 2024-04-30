<div>
    @if(session('error'))
        {{flash()->addError(session('error'))}};
    @endif
    <div class="relative isolate px-6 pt-14 lg:px-8 z-20">
        <div class="mx-auto max-w-7xl pt-52 pb-24 sm:pt-64 sm:pb-24 lg:pt-64 lg:pb-40">
            <div class="flex min-h-full flex-col justify-center px-6">
                <div class="mx-auto shadow-lg rounded-lg px-20 py-10 max-w-xl bg-white">
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
                        <br>
                        <div>
                            <button type="submit" wire:click="loginWithAzure" class="flex w-full justify-center rounded-md bg-white px-3 py-1.5 text-sm font-semibold leading-6 text-black shadow-sm hover:bg-gray-100/50 border-2 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-700">Masuk dengan Outlook<span class="ms-[8px] h-5 w-5 self-center">

                                <?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512"  xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="_x37_4-outlook"><g><g><path d="M479.689,121.431H270.912c-8.23,0-14.91,6.705-14.91,14.958c0,8.251,6.68,14.95,14.91,14.95     h165.322l-91.621,71.447l-65.709-41.901L262.92,206.13l74.559,47.548c2.418,1.56,5.221,2.332,7.996,2.332     c3.221,0,6.473-1.045,9.16-3.14l110.143-85.924v193.736H270.912c-8.23,0-14.91,6.699-14.91,14.946     c0,8.257,6.68,14.959,14.91,14.959h208.777c8.234,0,14.914-6.702,14.914-14.959v-239.24     C494.604,128.136,487.924,121.431,479.689,121.431L479.689,121.431z M479.689,121.431" style="fill:#1B80E4;"/><path d="M280.428,35.153c-3.404-2.841-7.967-4.069-12.26-3.168L29.566,76.84     c-7.068,1.322-12.169,7.481-12.169,14.687v328.966c0,7.177,5.101,13.364,12.169,14.688l238.602,44.856     c0.893,0.177,1.818,0.271,2.744,0.271c3.459,0,6.828-1.199,9.516-3.445c3.432-2.836,5.393-7.083,5.393-11.512V46.671     C285.82,42.213,283.859,37.995,280.428,35.153L280.428,35.153z M280.428,35.153" style="fill:#2299F8;"/><path d="M151.609,360.683c-41.1,0-74.563-40.253-74.563-89.72c0-49.462,33.464-89.719,74.563-89.719     c41.1,0,74.565,40.257,74.565,89.719C226.174,320.43,192.709,360.683,151.609,360.683L151.609,360.683z M151.609,211.153     c-24.665,0-44.736,26.824-44.736,59.81c0,32.988,20.071,59.813,44.736,59.813c24.666,0,44.743-26.824,44.743-59.813     C196.352,237.978,176.275,211.153,151.609,211.153L151.609,211.153z M151.609,211.153" style="fill:#FCFCFC;"/></g></g></g><g id="Layer_1"/></svg>

                                </span></button>
                        </div>

                        <p class="mt-2 text-center text-sm text-gray-500">
                            Belum terdaftar?
                            <a href="/daftar" class="font-semibold leading-6 text-sky-700 underline decoration-solid underline-offset-2 hover:text-indigo-500 capitalize">Daftar sekarang</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
