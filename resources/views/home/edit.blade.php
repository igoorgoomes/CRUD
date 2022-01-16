@extends('templates.app')

@section('title','Editar')

@section('content')
<div class="container mt-5">
    <h1>Editar Livro</h1>
    <hr>
    <form action="{{ route('livros.update',['id'=>$livros->id]) }}" method="POST">
        <!--falsificação de solicitação entre sites-->
    @csrf
    @method('PUT')
        <div class="form-group">
            <div class="form-group">
                <label for="nome">Título:</label>
                <input type="text" class="form-control" name="nome" value="{{ $livros->nome }}"placeholder="Digite o nome do livro">
            </div>
            <br>
            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <input type="text" class="form-control" name="categoria" value="{{ $livros->categoria }}" placeholder="Digite a categoria do livro">
            </div>
            <br>
            <div class="form-group">
                <label for="ano_criacao">Publicação em:</label>
                <input type="number" class="form-control" name="ano_criacao" value="{{ $livros->ano_criacao }}" placeholder="Digite o ano de Publicação">
            </div>
            <br>
            <div class="form-group">
                <label for="valor">Valor:</label>
                <input type="number" class="form-control" name="valor" value="{{ $livros->valor }}" placeholder="Digite o preço do livro">
            </div>
            <br>
            <div class="form-group">
                <input type="submit" class="btn btn-success" name="submit" value="Atualizar">
            </div>
        </div>
    </form>
</div>
@endsection