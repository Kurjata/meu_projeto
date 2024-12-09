@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Editar</h2>

    <form action="{{ route('articles.update', $article->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}">
        </div>

        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ $article->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="author">Autor</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ $article->author }}">
        </div>

        <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('articles.index') }}" class="btn btn-warning">Cancelar</a>
            <button type="submit" class="btn btn-success">Atualizar</button>
        </div>
    </form>
</div>
@endsection
