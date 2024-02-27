<div>
    <div class="relative isolate px-6 pt-14 lg:px-8 z-20">
        <div class="mx-auto max-w-7xl py-48 sm:py-48 lg:py-56">
            <div class="flex min-h-full flex-col justify-center px-6">
                <div class="sm:mx-auto sm:w-full sm:max-w-md">
                    <p class="text-sky-800 font-bold text-2xl capitalize text-center underline underline-offset-8 decoration-solid decoration-sky-700">Lupa Password?</p>
                    <h2 class="mt-6 px-10 text-left text-sm tracking-tight text-gray-900"><span class="font-semibold text-sky-700">Tidak masalah.</span> Masukkan alamat email Anda, dan kami akan kirim tautan reset password via email.</h2>
                </div>

                <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                    <form class="space-y-6" method="post" action="{{route('password.email')}}">
                        @csrf
                        <div>
                            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Alamat surel</label>
                            <div class="mt-2">
                                <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-400 sm:text-sm sm:leading-6">
                            </div>
                            @error('email')
                                <label class="text-xs text-red-600 font-semibold">{{$message}}</label>
                            @enderror 
                        </div>

                        <div>
                            <button type="submit" class="flex w-full justify-center rounded-md bg-sky-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-sky-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-400">Masuk</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>