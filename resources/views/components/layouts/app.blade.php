<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simposium Manado | {{$title ?? $title = config('app.name', 'Hi!')}}</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
    <link rel="stylesheet" href="https://unpkg.com/tippy.js@6/dist/tippy.css" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body @auth x-data="{bucket: false}" @else x-data="" @endauth>

<livewire:navigation :title='$title' wire:key="{{$title}}"/>
<livewire:background/>
<main>
    {{$slot}}
</main>
<livewire:background/>


@auth
    <x-buttonBucket/>
    <livewire:bucket :userId='auth()->user()->id'/>
@else
    <x-buttonTop/>
@endauth


<livewire:footer>

    <script>
        function formatCurrency(amount) {
            const formatter = new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR'
            });

            return formatter.format(parseFloat(amount));
        }
    </script>
    @livewireScripts
    @yield('scripts')
</body>
</html>
