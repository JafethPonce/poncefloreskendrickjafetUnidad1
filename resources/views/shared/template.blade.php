<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    @auth
    <li>
        <ul> <a href="">Inicio</a> </ul>
        <ul> <a href="">Posts recientes</a></ul>
        <ul> <a href="">mis posts</a> </ul>
        <ul> <a href="">Otros</a> </ul>

    </li>
    @endauth

    @guest
    <p>Por favor, <a href="{{ route('auth.login') }}">inicia sesión</a> o <a href="{{ route('auth.registro') }}">regístrate</a>.</p>
    @endguest

    <hr>


    @yield('content')










</body>

</html>