@extends('shared.template')

@section('content')



<form action="{{route('auth.registroF') }}" method="post">
    @csrf
    <label for="">Nombre completo</label>
    <input type="text" name="nombre" id="">
    <br>
    <label for="">Correo electronico</label>
    <input type="email" name="correo" id="">
    <br>
    <label for="">Contraseña</label>
    <input type="password" name="contrasena" id="">
    <br>
    <input type="submit" value="Registrar" name="registrar">

</form>


@endsection