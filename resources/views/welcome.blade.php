<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Champions League</title>
        @viteReactRefresh
        @vite(['resources/js/app.jsx', 'resources/css/app.css'])
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="icon" href="{{ asset('src/icons/league-logo.png') }}" type="image/x-icon">

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div id="app"></div>
    </body>
</html>
