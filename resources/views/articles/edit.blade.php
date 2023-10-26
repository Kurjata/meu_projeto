@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Editar</h2>

    <form action="{{ route('articles.update', $article->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Article Fields -->
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

        <!-- Video Fields -->
        <hr>
        <h3>Playlist de vídeos</h3>

        @foreach($videos as $video)
            <div class="card mt-2">
                <div class="card-body">
                    <h5>{{ $video->title }}</h5>
                    <p>{{ $video->url }}</p>
                    <p>{{ $video->author }}</p>
                </div>
            </div>
        @endforeach

        <hr>
        <h3>Adicionar novo vídeo</h3>
        <div class="form-group">
            <label for="video_title">título</label>
            <input type="text" class="form-control" id="video_title" name="video_title">
        </div>

        <div class="form-group">
            <label for="video_url">Vídeo URL</label>
            <input type="text" class="form-control" id="video_url" name="video_url">
        </div>

        <div class="form-group">
            <label for="video_author">Vídeo Autor</label>
            <input type="text" class="form-control" id="video_author" name="video_author">
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('articles.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
