@extends('layouts.app')

@section('title')
    Blog
@endsection

@section('content')
    <h1>Blog</h1>
    <p>Registros recuperados do banco de dados</p>
    <hr>
    @foreach($posts AS $key => $post)
        <h2>{{$key + 1}}. {{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
        <b>Tags:</b><br>
        <ul>
            @foreach($post->tags AS $tag)
                <li>{{$tag->name}}</li>
            @endforeach
        </ul>

        <h3>Comments</h3>
            @foreach($post->comments AS $comment)
                <br><b>Name: </b> {{ $comment->name }}<br>
                <b>Comment: </b> {{ $comment->comment }}<br>
            @endforeach
        <hr>
    @endforeach
@endsection