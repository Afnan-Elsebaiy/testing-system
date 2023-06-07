<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        {{-- Font Awesome Icons --}}
        <link href="{{asset('assets')}}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
        {{-- <link href="{{asset('assets')}}/css/fontawesome/fontawesome.min.css" rel="stylesheet">
        <link href="{{asset('assets')}}/css/fontawesome/brands.min.css" rel="stylesheet">
        <link href="{{asset('assets')}}/css/fontawesome/solid.css" rel="stylesheet"> --}}

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <script src="{{ asset('assets') }}/js/flowbite.js"></script>
        <script src="{{ asset('assets') }}/js/jquery-3.6.1.min.js"></script>

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>