@extends('templates.app')

@section('content')
<!--Tudo que for renderizado dentro das sections será exibido no template-->

<h1 class="text-center">Developer Books</h1><hr>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Título</th>
                <th scope="col">Categoria</th>
                <th scope="col">Ano da Publicação</th>
                <th scope="col">Valor</th>
            </tr>
        </thead>
        <tbody>
            @foreach($livros as $livro)
            <tr>
                <th>{{ $livro->id }}</th>
                <th>{{ $livro->nome }}</th>
                <th>{{ $livro->categoria }}</th>
                <th>{{ $livro->ano_criacao }}</th>
                <th>{{ $livro->valor }}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection