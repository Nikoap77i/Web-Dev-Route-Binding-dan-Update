<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
    <link rel="stylesheet" href="{{ asset('mydesign/mystyle.css') }}">
</head>
<body>
    @include('navbar')

    <div class="container pt-5">
        @yield('main_content')
    </div>

    <footer>
        Copyright Niko Adrian Purnomo ©2026
    </footer>
</body>
</html>