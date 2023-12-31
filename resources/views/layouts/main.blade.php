<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TADO | @yield('title')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        .height-80vh{
            height: 80vh;
        }
    </style>
</head>
<body>

@yield('content')

@yield('script')
</body>
</html>
