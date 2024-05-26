@extends('shared.template')

@section('content')

<h1> {{ $post->title }} </h1>

<p>
    {{ $post->body }}
</p>

<img src="{{$post->image}}" alt="">


@endsection