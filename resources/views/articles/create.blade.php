@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Adicionar novo livro</h2>
    <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Título:</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="description">Descrição:</label>
            <input type="text" name="description" id="description" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="author">Autor:</label>
            <input type="text" name="author" id="author" class="form-control" required>
        </div>
        
        <button type="submit" class="btn btn-success">Adicionar</button>
        <br>
        <br>
        <a href="{{ url('/') }}" class="btn btn-primary">Voltar</a>
    </form>
</div>
@endsection
