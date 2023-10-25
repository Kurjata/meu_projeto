@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Edit Article</h2>
    <form action="{{ route('articles.update', $article->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ $article->title }}" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" name="description" id="description" value="{{ $article->description }}" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="author">Author:</label>
            <input type="text" name="author" id="author" value="{{ $article->author }}" class="form-control">
        </div>
        
        <button type="submit" class="btn btn-primary">Update Article</button>
    </form>
</div>
@endsection
