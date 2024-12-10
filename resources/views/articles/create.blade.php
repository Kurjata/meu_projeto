@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Adicionar novo chamado</h2>
    <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="title">Título:</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Digite o título do chamado" required>
        </div>

        <div class="form-group">
            <label for="description">Descrição:</label>
            <textarea name="description" id="description" class="form-control" rows="3" placeholder="Descreva o chamado" required></textarea>
        </div>

        <div class="form-group">
            <label for="author">Responsável:</label>
            <input type="text" name="author" id="author" class="form-control" placeholder="Informe o responsável" required>
        </div>

        <div class="form-group">
            <label for="attachment">Anexar Arquivo (PDF ou DOC):</label>
            <input type="file" name="attachment" id="attachment" class="form-control" accept=".pdf,.doc,.docx">
            <small class="form-text text-muted">Opcional. Suporta arquivos PDF, DOC e DOCX de até 2MB.</small>
        </div>

        <div class="d-flex justify-content-between mt-4">
            <a href="{{ url('/') }}" class="btn btn-primary">Voltar</a>
            <button type="submit" class="btn btn-success">Adicionar</button>
        </div>
    </form>
</div>
@endsection
