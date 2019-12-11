<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Messtechnik</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>

</head>
<body>
<div class="flex-center position-ref">
    <div class="content">
        <div class="title m-b-md" onclick="window.location='{{ route('home') }}'">
            Messtechnik
        </div>

        <div class="links m-b-md">
            <a href="{{ route('index.epe') }}">Relatório EPE</a>
            <a href="#">Monitoramento</a>
            <a href="#">Notícias</a>
            <a target="_blank" rel="noopener noreferrer" href="http://www.messtechnik.com.br">Site</a>
            <a target="_blank" rel="noopener noreferrer" href="http://192.168.1.253">NAS</a>
            <a target="_blank" rel="noopener noreferrer" href="https://stackoverflow.com/">SO</a>
            <a target="_blank" rel="noopener noreferrer" href="https://github.com/Daniwenzel/mms">GitHub</a>
        </div>
        @yield('content')
    </div>
</div>
</body>
</html>
