@extends("layouts.main")

@section("title", "HDC Events")

@section("content")

<h1>Algum titulo</h1>

<p>{{ $nome }}</p>

@if($nome == "David")
<p>O nome é David</p>
@elseif($nome == "Samuel")
<p>O nome é {{ $nome }} e ele tem {{ $idade }} anos, trabalha como {{$profissao}}</p>
@else
<p>O nome não é David</p>
@endif

@for($i = 0; $i < count($arr); $i++)
    <p>{{ $arr[$i];}} - {{ $i; }}</p>
@endfor

@foreach($nomes as $nome)
    <p>{{ $nome }} - {{ $loop->index }}</p>
@endforeach

@php
    $name = "Exemplo de PHP puro rodando dentro da view do blade";
    echo($name);
@endphp

<!-- Exemplo de comentário HTML -->
{{-- Exemplo de comentário do blade --}}

@endsection