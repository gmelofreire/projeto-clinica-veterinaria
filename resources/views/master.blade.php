<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
    <title>VetMais
        @if (isset($pagina)) - {{ $pagina }}@endif
    </title>
</head>

<body>
    <div id="app">
        @yield('content')
    </div>
    @vite('resources/js/app.js')
</body>

<style>
    * {
        font-family: "Ubuntu", sans-serif;
    }
</style>

</html>
