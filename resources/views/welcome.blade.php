<!-- Extendendo o template do pai -->
@extends('template')

<!-- Adicionando o conteudo apenas na sessão 'title' do template -->
@section('title')
    Welcome
@stop

<!-- Adicionando o conteudo apenas na sessão 'content' do template -->
@section('content')
    <div class="container">
        <div class="content">
            <div class="title">Laravel 5</div>
            <div class="quote">{{ \Illuminate\Foundation\Inspiring::quote() }}</div>
        </div>
    </div>
@stop

<style>
    body {
        font-weight: 100;
        font-family: 'Lato';
    }

    .container {
        text-align: center;
        display: table-cell;
        vertical-align: middle;
    }

    .content {
        text-align: center;
        display: inline-block;
    }

    .title {
        font-size: 96px;
    }
</style>