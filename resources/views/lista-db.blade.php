@extends('layout')

@section('title')
    lista DB
@endsection

@section('content')
<div>
    <h1>Lista DB</h1>
    @foreach ($productos as $producto)
        <div class="product">
            <strong>Nombre: {{ $producto->name }}</strong>
            <p>Descripción: {{ $producto->description }}</p>
        </div>
    @endforeach
</div>
@endsection