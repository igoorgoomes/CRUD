@extends('templates.app')

@section('title','Developer')

@section('content')
<!--Tudo que for renderizado dentro das sections será exibido no template-->
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-10">
            <h1 class="">Developer Books</h1><hr>
        </div>
        <div class="col-sm-2">
            <a href="{{ route('livros.create') }}" class="btn btn-primary">Cadastrar Livro</a>
        </div>
    </div>
        <table class="table mt-3">
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
</div>
    
@endsection