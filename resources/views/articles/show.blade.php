@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h2 class="text-primary">{{ $article->title }}</h2>
        </div>
        <div class="card-body">
            <p class="card-text text-dark">{{ $article->description }}</p>
            <p class="text-muted">Autor: {{ $article->author }}</p>

            <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Deletar</button>
            </form>
        </div>

    </div>

    <a href="{{ route('articles.index') }}" class="btn btn-secondary mt-4">Voltar</a>
</div>
@endsection
