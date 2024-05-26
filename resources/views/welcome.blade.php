@extends('shared.template')


@section('content')


<h1>Bienvenido</h1>



@foreach ( $posts as $post )

    <br>

    <a href="{{ route('post', $post->slug) }}">{{$post->title}}</a>
    <br>

@endforeach

    {{ $posts->links() }}


    <style>/* public/css/app.css */


</style>


@endsection