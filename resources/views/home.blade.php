@extends('layouts.main')

@section('content')
    <div>
        <h1>Bem-vindo ao Laravel</h1>
        <p>Este é o conteúdo da página inicial.</p>
        <p>
            {{$nome}}
        </p>
        <p>
            {{$idade}}
        </p>
    </div>
@endsection

