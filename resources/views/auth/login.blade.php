@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="text-center">
        <h1 class="text-primary mb-4">Faça login para começar a sua sessão</h1>

        <form action="{{ route('login.submit') }}" method="POST" class="mt-4">
            @csrf

            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>

            @if ($errors->has('login_failed'))
                <div class="alert alert-danger mt-3">
                    {{ $errors->first('login_failed') }}
                </div>
            @endif

            <button type="submit" class="btn btn-success mt-4">Entrar</button>
        </form>
    </div>
</div>
@endsection
