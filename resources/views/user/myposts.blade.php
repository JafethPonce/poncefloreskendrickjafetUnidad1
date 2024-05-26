@extends('shared.template')



@section('content')


<h3>Mis posts</h3>

    @if ($isEmpty <= 0)
        <label for="">No hay nada</label>
    @else
        @foreach ($posts as $post)

            <label for="">{{$post->title}}</label>
            <br>

        @endforeach

    @endif

@endsection