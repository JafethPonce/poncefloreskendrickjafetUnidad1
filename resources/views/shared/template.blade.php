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
        <ul>Inicio</ul>
        <ul>Posts recientes</ul>
        <ul>mis posts</ul>
        <ul>Otros</ul>
       

       
    </li>
    @endauth

    @guest
    <p>Por favor, <a href="{{ route('auth.login') }}">inicia sesión</a> o <a href="{{ route('auth.registro') }}">regístrate</a>.</p>
    @endguest

    <hr>


    @yield('content')

</body>

</html>