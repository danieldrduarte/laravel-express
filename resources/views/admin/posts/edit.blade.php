@extends('template')

@section('title')
    Blog Admin
@endsection

@section('content')
    <h1>Edit Post</h1>

    @if($errors->any())
        <ul class="alert">
            @foreach($errors->all() AS $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::model($post,['route'=>['admin.posts.update', $post->id],'method' => 'put']) !!}
        @include('admin.posts._form')
        <div class="form-group">
            {!! Form::label('tags','Tags:',['class' => 'control-label']) !!}
            {!! Form::textarea('tags',$post->tagList, ["class" => "form-control"]) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Save Post',['class'=>'btn btn-primary']) !!}
            <a role="button" class="btn btn-warning" href="{{ route('admin.posts.index') }}">Back</a>
        </div>
    {!! Form::close() !!}


@endsection