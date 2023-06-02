<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DeliveBoo</title>

    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
    <script type="text/javascript" src="dataValidation.js"></script>
</head>

<body>
    <div id="app">

        <header>
            @include('partials.header')
        </header>        

        <main class="" style='background-color: rgba(255, 184, 51, 0.797);'>
            @yield('content')
        </main>

        <footer>
            @include('partials.footer')
        </footer>
        
    </div>    
</body>

</html>

