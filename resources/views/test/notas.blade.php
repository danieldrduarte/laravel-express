<!-- Extendendo o template do pai -->
@extends('template')

<!-- Adicionando o conteudo apenas na sessão 'title' do template -->
@section('title')
    Notas
@endsection

<!-- Adicionando o conteudo apenas na sessão 'content' do template -->
@section('content')
    <h1>Anotações  (foreach PHP)</h1>
    <ul>
        <?php foreach ($notas AS $nota): ?>
        <?php echo "<li>$nota</li>"; ?>
        <?php endforeach; ?>
    </ul>

    <h1>Anotações  (foreach Blade)</h1>
    <ul>
        @foreach($notas AS $nota)
            <li>{{ $nota }}</li>
        @endforeach
    </ul>
@endsection
