<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.23/dist/full.min.css" rel="stylesheet" type="text/css" />

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


    @livewireStyles
</head>

<body class="bg-slate-100 font-sans">
    <div
        class="navbar flex justify-between items-center px-4 md:px-24 sm:px-12 bg-slate-900/90 sticky top-0 z-50 text-slate-100">
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1 font-medium">
                <li class="font-extrabold"><a href="/" wire:navigate>Beranda</a></li>
                <li><a href="/infografis" wire:navigate>Infografis</a></li>
                <li><a href="/videos" wire:navigate>Video</a></li>
                <li><a href="/chat" wire:navigate>QnA</a></li>
            </ul>
        </div>
    </div>

    <!-- Main Content -->
    <main>
        {{ $slot }}
    </main>

    <footer class="rounded-lg shadow m-4 bg-white dark:bg-gray-800">
        <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/"
                    class="hover:underline">Flowbite™</a>. All Rights Reserved.
            </span>     
        </div>
    </footer>

    @livewireScripts
    {{-- scripts --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="https://cdn.tailwindcss.com"></script>


</body>

</html>
