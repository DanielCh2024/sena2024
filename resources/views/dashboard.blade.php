@extends('layouts.app')
@section('titulo','Panel Administrador')
@section('contenido')
<div class="hero bg-base-200 min-h-screen">
    <div class="hero-content text-center">
      <div class="max-w-md">
        <h1 class="text-5xl font-bold">Hola, {{ Auth()->user()->name }}</h1>
        <p class="py-6">Bienvenido al panel Administrador, aquí puedes Crear, Editar, Actualizar, Eliminar y mucho más…</p>
        <a href="{{ route('productos.index') }}" class= "btn btn-primary">Iniciamos!</a>
      </div>
    </div>
  </div>
@endsection
