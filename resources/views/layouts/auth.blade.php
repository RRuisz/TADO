<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TADO | @yield('title')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div class="row">
    <h1 class="text-center mt-5 fw-bold">TADO</h1>
</div>
<div class="row d-flex justify-content-around">
    <div class="card col-3 mt-5">
        <div class="card-header">
            @if(Route::currentRouteName() == 'login')
                <h2 class="text-center">Anmelden</h2>
            @endif
            @if(Route::currentRouteName() == 'register')
                <h2 class="text-center">Konto erstellen</h2>
            @endif
        </div>
        <div class="card-body">
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>
