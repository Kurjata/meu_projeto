@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Playlists</h2>
    <a href="{{ route('playlists.create') }}" class="btn btn-primary mb-3">Add New Playlist</a>
    <ul class="list-group">
        @foreach($playlists as $playlist)
            <li class="list-group-item">
                {{ $playlist->title }}
                <a href="{{ route('playlists.videos.index', $playlist->id) }}" class="btn btn-info btn-sm float-right">View Videos</a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
