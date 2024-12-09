@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Adicionar novo chamado</h2>
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
            <label for="author">Responsável:</label>
            <input type="text" name="author" id="author" class="form-control" required>
        </div>
        
        <div class="d-flex justify-content-between mt-4">
            <a href="{{ url('/') }}" class="btn btn-primary">Voltar</a>
            <button type="submit" class="btn btn-success">Adicionar</button>
        </div>
    </form>
</div>
@endsection
