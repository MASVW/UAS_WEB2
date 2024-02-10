<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body x-data="{ scrollPosition: 0, showHiddenDiv: false, showForm: false }" x-init="() => { 
        window.addEventListener('scroll', () => { 
            scrollPosition = window.scrollY; 
            showHiddenDiv = showHiddenDiv || scrollPosition > 50;
            showForm = showForm || scrollPosition > 800;
        });
    }">
    <livewire:navigation/>
    <livewire:homeSection/>
    @livewireScripts
    <script>
    function formatCurrency(amount) {
        const formatter = new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR'
        });

        return formatter.format(parseFloat(amount));
    }
</script>
</body>
</html>