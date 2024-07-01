@extends('layouts.app')
@section('titulo','Consultar Tienda')
@section('contenido')
<div class="hero min-h-screen" style="background-image: url(https://i0.wp.com/nombresparanegociosexitosos.com/wp-content/uploads/2023/12/Como-Atraer-Clientes-a-Una-Tienda-de-Ropa.jpg?resize=1024%2C576&ssl=1);">
    <div class="hero-overlay bg-opacity-60"></div>
    <div class="hero-content text-center text-neutral-content">
      <div class="max-w-md">
        <h1 class="mb-5 text-5xl font-bold">BIENVENIDO A MR. JEANS TIENDA</h1>
        <p class="mb-5">ROPA FRESCA Y ACTUAL DE LA MEJOR CALIDAD AL MEJOR PRECIO</p>
        <a href="{{ route('productos.index') }}" class= "btn btn-primary">Iniciar Experiancia!</a>
      </div>
    </div>
  </div>
@endsection