<div class="absolute left-0 w-screen h-screen flex">
    <div class="fixed z-40 top-0 w-full h-full flex items-center justify-center bg-gray-900 bg-opacity-50">
        <div class="m-auto z-50 rounded max-w-72 h-20 bg-white px-5 py-2 flex items-center justify-center" role="status">
            <x-loading/>
            <div class="ps-2">
                <p>{{ $slot }}</p>
            </div>
        </div>
    </div>
</div>
