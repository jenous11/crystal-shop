<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>


<body class="bg-[#f4f5f0] text-black antialiased">

    <div class="flex min-h-screen flex-col items-center justify-center px-5 py-10">

        {{-- Logo --}}
        <div class="mb-6">

            <a href="/">
                <img
                    src="{{ asset('storage/images/himalayan_crystal_house_logo.png') }}"
                    alt="Himalayan Crystal House"
                    class="h-auto w-[120px]"
                >
            </a>

        </div>


        {{-- Login container --}}
        <div class="w-full max-w-md rounded-lg border border-[#dce4d9] bg-white px-6 py-6 shadow-sm sm:px-8">

            {{ $slot }}

        </div>

    </div>

</body>

</html>
