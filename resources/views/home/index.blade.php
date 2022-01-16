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
            <a href="{{ route('livros.create') }}" class="btn btn-success">Cadastrar Livro</a>
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
                    <th scope="col"></th>
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
                    <th class="d-flex">
                        <a href="{{ route('livros.edit',['id'=>$livro->id]) }}" class="btn btn-primary me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                            </svg>
                        </a>
                        <form action="{{ route('livros.destroy',['id'=>$livro->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>
                            </button> 
                        </form>
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>
    
@endsection