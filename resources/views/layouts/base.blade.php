<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Kateryna Kladyk</title>
</head>

<body class="bg-grey-light">
    <div id="main-content">
        @yield('content')
    </div>
</body>

</html>
