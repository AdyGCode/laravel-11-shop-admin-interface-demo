<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-neutral-100 flex flex-between flex-col">

    @include('layouts.dev-mode')

    @include('layouts.navigation-guest')

    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white shadow w-full">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif

    <!-- Page Content -->
    <main class="bg-neutral-100 grow">
        <div class="mx-auto max-w-7xl container mt- px-6 py-8 overflow-hidden ">
            {{ $slot }}
        </div>
    </main>

    @include('layouts.footer')

    @include('layouts.dev-mode')

</div>
</body>
</html>
