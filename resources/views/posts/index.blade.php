@extends('template')

@section('content')
    <h1>Blog</h1>

    @foreach($posts AS $post)
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
        <hr>
    @endforeach;
@endsection