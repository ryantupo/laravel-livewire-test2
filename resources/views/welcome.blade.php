<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    {{-- <livewire:styles/> --}}
    @livewireStyles

    {{-- scripts --}}
    {{-- <livewire:scripts/> --}}
    @livewireScripts

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>


    @livewire('main-page-container')

    <script>
        let root = document.querySelector('[drag-root]')

        root.querySelectorAll('[drag-item]').forEach(el => {
            el.addEventListener('dragstart', e => {
                console.log("start");
            })

            el.addEventListener('drop', e => {
                e.target.classList.remove('bg-yellow-100')

                //
            })

            el.addEventListener('dragenter', e => {
                e.target.classList.add('bg-yellow-100')

                e.preventDefault()
            })

            el.addEventListener('dragover', e => {

                e.preventDefault()
            })

            el.addEventListener('dragleave', e => {
                e.target.classList.remove('bg-yellow-100')
            })

            el.addEventListener('dragend', e => {
                console.log("end");
            })
        })
    </script>
</body>

</html>
