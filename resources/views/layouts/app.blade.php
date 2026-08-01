<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


{{-- swipter link --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    {{-- ionicon bata hambergermenu uthara lyako --}}
<script type="module" src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.js"></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- swiper's buttons --}}
    <style>
.swiper-button-next,
.swiper-button-prev {
    color: green;
}
</style>
</head>

<body class="font-sans antialiased text-black bg-[#eeee]">

      @include('layouts.navigation')
    <!-- Page Content -->
    <main >
        {{ $slot }}
    </main>
@include('layouts.footer')

{{-- swiper --}}
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
@stack('scripts')
</body>
</body>
<script>
  function onToggleMenu(e){
    const navLinks = document.querySelector('.nav-links')
    // console.log(e.name)
 e.name=e.name==='menu'?'close':'menu'
 navLinks.classList.toggle('top-[9%]')
  }
  </script>
</html>
