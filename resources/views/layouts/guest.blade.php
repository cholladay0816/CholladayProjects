<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta property='og:title' content='Welcome to Cholladay Projects'/>
        <meta property='og:site_name' content='{{env('APP_NAME')}}'/>
        <meta property='og:type' content='website'/>
        <meta property='og:description' content='Welcome to my web portfolio, where I post my projects, demos, and updates.'/>
        <meta property='og:image' content='{{asset('img/profile_picture.png')}}'/>

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
    </head>
    <body>
        <!-- Header -->
        <div class="font-sans bg-gray-100 min-h-screen dark:bg-gray-900 text-black dark:text-white antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
