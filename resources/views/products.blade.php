@extends("layouts.main")

@section("title", "HDC Events")

@section("content")

    <h1>Tela de produtos</h1>
    @if($id != null)
        <p>O id do produto é: {{$id}}</p>
    @endif

    <p>O produto buscado é: {{$busca}}</p>

@endsection