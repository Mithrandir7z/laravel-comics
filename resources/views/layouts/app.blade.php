<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struttura base</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!--QUESTO E' LO SCHELETRO DELL SITO-->
</head>
<body>

    @include('partials.header')

    <main>
        @yield('main_content')
    </main>

    @include('partials.footer')
    
</body>
</html>