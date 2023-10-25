@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Add Video to Playlist: {{ $playlist->title }}</h2>
    <form action="{{ route('playlists.videos.store', $playlist->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="form-group">
            <label for="url">URL</label>
            <input type="text" class="form-control" id="url" name="url">
        </div>

        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" class="form-control" id="author" name="author">
        </div>

        <button type="submit" class="btn btn-primary">Add Video</button>
    </form>
</div>
@endsection
