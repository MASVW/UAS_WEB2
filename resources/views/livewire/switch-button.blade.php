<div x-data="{ active: false }" class="flex gap-x-4 sm:col-span-2">
    <div class="flex h-6 items-center">
        <div>
            <!-- Enabled: "bg-indigo-600", Not Enabled: "bg-gray-200" -->
            <button
                type="button"
                x-on:click="active = !active"
                x-bind:class="{ 'bg-indigo-600': active, 'bg-gray-200': !active }"
                class="flex w-8 flex-none cursor-pointer rounded-full p-px ring-1 ring-inset ring-gray-900/5 transition-colors duration-200 ease-in-out focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                role="switch"
                :aria-checked="active.toString()"
                aria-labelledby="switch-1-label"
            >
                <span class="sr-only">Agree to policies</span>
                <!-- Enabled: "translate-x-3.5", Not Enabled: "translate-x-0" -->
                <span
                    aria-hidden="true"
                    x-bind:class="{ 'translate-x-3.5': active, 'translate-x-0': !active }"
                    class="h-4 w-4 transform rounded-full bg-white shadow-sm ring-1 ring-gray-900/5 transition duration-200 ease-in-out"
                ></span>
            </button>
        </div>
    </div>
    <label class="text-sm leading-6 text-gray-600" id="switch-1-label">
        Teks
    </label>
</div>