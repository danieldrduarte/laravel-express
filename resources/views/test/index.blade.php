<!-- Extendendo o template do pai -->
@extends('template')

<!-- Adicionando o conteudo apenas na sessão 'title' do template -->
@section('title')
    Index
@stop

<!-- Adicionando o conteudo apenas na sessão 'content' do template -->
@section('content')
    <!-- Forma PHP de fazer -->
    <h1>Olá <?= $nome ?></h1>

    <!-- Forma PHP do blade de fazer -->
    <h1>Olá {{ $nome }}</h1>
@stop
