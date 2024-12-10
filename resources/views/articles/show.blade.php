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
            <p><span class="badge badge-info">Status: {{ $article->status }}</span></p>

           {{-- Exibir o anexo --}}
            <p class = "text-dark">Arquivo Anexado:</p>
                {{-- @if ($article->attachment) --}}
                <a href="{{ asset('storage/' . $article->attachment) }}" class="btn btn-primary" target="_blank">
                    Baixar Arquivo
                </a>
                
                {{-- dd($article->attachment); --}}
                {{-- @else
            <p class="text-dark">Nenhum arquivo anexado.</p>
                @endif --}}

            <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('articles.close', $article->id) }}" method="POST" class="d-inline">
                @csrf
                @method('PUT')
                <button type="submit" class="btn btn-danger">Encerrar</button>
            </form>
        </div>
    </div>

    <a href="{{ route('articles.index') }}" class="btn btn-secondary mt-4">Voltar</a>
</div>
@endsection
