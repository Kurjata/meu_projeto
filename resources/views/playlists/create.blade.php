@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Create New Playlist</h2>
    <form action="{{ route('playlists.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
