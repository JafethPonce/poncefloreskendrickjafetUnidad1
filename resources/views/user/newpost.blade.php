@extends('shared.template')



@section('content')

<label for="">Nuevo formulario</label>


<form action="{{ route('newPost') }}" method="POST">
    @csrf
    <input type="hidden" name="id_usuario" value="{{$user->id}}">
    <input type="submit" value="Crear">
</form>


@endsection