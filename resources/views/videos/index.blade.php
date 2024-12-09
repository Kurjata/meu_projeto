@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Videos in Playlist: {{ $playlist->title }}</h2>
    <a href="{{ route('playlists.videos.create', $playlist->id) }}" class="btn btn-primary mb-3">Add New Video</a>
    <ul class="list-group">
        @foreach($videos as $video)
            <li class="list-group-item">
                <strong>{{ $video->title }}</strong> by {{ $video->author }}
                <a href="{{ $video->url }}" target="_blank" class="btn btn-info btn-sm float-right">Watch Video</a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
