@extends('shared.template')

@section('content')


    <h1>Login</h1>
    <form action="{{ route('auth.loginF') }}" method="post">
        @csrf
        <label for="correo">Correo electrónico:</label>
        <input type="email" id="correo" name="correo" required>
        <br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required>
        <br>
        <button type="submit">Iniciar sesión</button>
    </form>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>
</html>


@endsection