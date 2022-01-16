@extends('templates.app')

@section('title','Cadastro')

@section('content')
<div class="container mt-5">
    <h1>Cadastrar Livro</h1>
    <hr>
    <form action="{{ route('livros.store') }}" method="POST">
        <!--falsificação de solicitação entre sites-->
    @csrf 
        <div class="form-group">
            <div class="form-group">
                <label for="nome">Título:</label>
                <input type="text" class="form-control" name="nome" placeholder="Digite o nome do livro">
            </div>
            <br>
            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <input type="text" class="form-control" name="categoria" placeholder="Digite a categoria do livro">
            </div>
            <br>
            <div class="form-group">
                <label for="ano_criacao">Publicação em:</label>
                <input type="number" class="form-control" name="ano_criacao" placeholder="Digite o ano de Publicação">
            </div>
            <br>
            <div class="form-group">
                <label for="valor">Valor:</label>
                <input type="number" class="form-control" name="valor" placeholder="Digite o preço do livro">
            </div>
            <br>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="submit">
            </div>
        </div>
    </form>
</div>
@endsection