<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta property='og:title' content='Welcome to Cholladay Projects'/>
        <meta property='og:site_name' content='{{config('app.name')}}'/>
        <meta property='og:type' content='website'/>
        <meta property='og:description' content='Welcome to my web portfolio, where I post my projects, demos, and updates.'/>
        <meta property='og:image' content='{{asset('img/profile_picture.png')}}'/>
        <meta property="keywords" content="Christian Holladay, Cholladay Projects, American Dad Speedruns, Holladay Digital, Laravel Developer"/>

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
    </head>
    <body>
        <!-- Header -->
        <div class="font-sans bg-gray-100 min-h-screen dark:bg-darker text-black dark:text-white antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
