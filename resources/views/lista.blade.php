@extends('layout')

@section('title')
    lista Controller
@endsection

@section('content')
<div>
    <h1>Lista Controller</h1>
    <div>
        @if($nombre !== null)
            <p>Hola {{ $nombre }}</p>
            @foreach ($productos as $producto)
                <p>El producto es: {{ $producto }}</p>
            @endforeach
        @else
            <p>Usuario no registrado.<br>Escribe tu nombre en la URL</p>
        @endif
    </div>
</div>
@endsection