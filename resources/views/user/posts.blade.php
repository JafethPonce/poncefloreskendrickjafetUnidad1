@extends('shared.template')

@section('content')

<h1>Todos los post</h1>

@foreach ( $posts as $post )

    <br>

    <a href="{{ route('post', $post->slug) }}">{{$post->title}}</a>
    <br>

@endforeach


@endsection