@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <form action="cadastroSubmit" method="post" novalidate>
        @csrf
        
        <!-- Campo Nome -->
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control @error('nome') is-invalid @enderror" value="{{ old('nome') }}">
            @error('nome')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <!-- Campo Idade -->
        <div class="mb-3">
            <label for="idade" class="form-label">Idade</label>
            <input type="number" name="idade" id="idade" min=18 max=100 class="form-control @error('idade') is-invalid @enderror" value="{{ old('idade') }}">
            @error('idade')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <!-- Botão Salvar -->
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection
