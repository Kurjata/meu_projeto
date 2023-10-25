@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h2>{{ $article->title }}</h2>
        </div>
        <div class="card-body">
            <p class="card-text">{{ $article->description }}</p>
            <p class="text-muted">Written by: {{ $article->author }}</p>

            <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
        <div class="card-footer text-muted">
            Published: {{ $article->created_at->format('d M Y, h:i A') }}
        </div>
    </div>

    <a href="{{ route('articles.index') }}" class="btn btn-secondary mt-4">Back to Articles</a>
</div>
@endsection
