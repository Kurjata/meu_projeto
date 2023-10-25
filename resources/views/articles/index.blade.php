@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Articles</h1>
    
    <a href="{{ route('articles.create') }}" class="btn btn-primary mb-4">Add New Article</a>

    <div class="list-group">
        @foreach($articles as $article)
            <a href="{{ route('articles.show', $article->id) }}" class="list-group-item list-group-item-action mb-2">
                <h4>{{ $article->title }}</h4>
                <p class="mb-0">{{ Str::limit($article->description, 150) }}</p>
                <small class="text-muted">Written by: {{ $article->author }}</small>
            </a>
        @endforeach
    </div>
</div>
@endsection
