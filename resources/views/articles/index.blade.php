@extends('layouts.app')

@section('content')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<div class="container mt-4">
    <h1 class="text-primary mb-4">Projeto Livraria Online</h1>
    
    <a href="{{ route('articles.create') }}" class="btn btn-outline-success mb-4">Adicionar novo livro</a>

    <div class="list-group" id="articles-list">

    </div>
</div>

<script>
    $(document).ready(function() {
        $.ajax({
            url: '{{ route('articles.fetch') }}',
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                $.each(data, function(key, article) {
                    $('#articles-list').append(`
                        <a href="/articles/${article.id}" class="list-group-item list-group-item-action mb-2">
                            <h4>${article.title}</h4>
                            <p class="mb-0">${article.description.length > 150 ? article.description.substring(0, 150) + '...' : article.description}</p>
                            <small class="text-muted">Autor: ${article.author}</small>
                        </a>
                    `);
                });
            },
            error: function(error) {
                console.log('Erro ao carregar artigos:', error);
            }
        });
    });
</script>
@endsection
