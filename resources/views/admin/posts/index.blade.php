@extends('layouts.app')

@section('title')
    Blog Admin
@endsection

@section('content')
    <h1>Blog Admin</h1>
    <a role="button" class="btn btn-primary" style="margin-top: 10px; margin-bottom: 10px;" href="{{ route('admin.posts.create') }}">
        Create new
    </a>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Action</th>
        </tr>

        @foreach($posts AS $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>
                    <a href="{{ route('admin.posts.edit', ['id' => $post->id]) }}" class="btn btn-default">Edit</a>
                    <a href="{{ route('admin.posts.destroy', ['id' => $post->id]) }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
    {!!  $posts->render() !!}

@endsection