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
    <div class="bg-cover bg-mood-image bg-center text-blue-light" style="height: 873px;">
 <!-- <img class="w-screen" height="400" src="{{ Vite::asset('resources/images/mood-image.png') }}" alt="mood-image" /> -->
 <x-navbar/>
 <div class="text-left">
          <h1 class="mb-3">Kateryna Kladyk</h1>
          <h4 class="mb-3">Subheading</h4>
          <a class="btn btn-outline-light btn-lg" href="#!" role="button"
          >Call to action</a
          >
        </div>
</div>
</div>
</body>



</html>
