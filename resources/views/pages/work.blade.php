<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Kateryna Kladyk</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
    </head>
    <body class="bg-grey-light">
    <div id="main-content">
    <div class="bg-cover bg-mood-image bg-top text-blue-light" style="height: 873px; z-index: -1;">
 <div>
 <x-navbar/>
 <div class="pt-52 px-4 lg:px-24">
 <x-header/>
 <div class="pt-10 gap-8 lg:columns-3">
    <x-teaser-tile/>
    <x-teaser-tile/>
    <x-teaser-tile/>
    <x-teaser-tile/>
    <x-teaser-tile/>
    <x-teaser-tile/>
    <x-teaser-tile/>
    <x-teaser-tile/>
    <x-teaser-tile/>
</div>

</div>
</div>
</body>
</html>
