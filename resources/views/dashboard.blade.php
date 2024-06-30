@extends('layouts.app')
@section('titulo','Panel Administrador')
@section('cabecera', 'Administrador')
@section('contenido')
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-4">
            <div class="hero min-h-screen bg-base-200 rounded-2xl">
                <div class="hero-content text-center">
                  <div class="max-w-md">
                    <h1 class="text-5xl font-bold">Sr. {{ auth()->user()->name }}</h1>
                    <p class="py-1">Bienvenido al panel administrador, aqui puedes Crear, Actualizar, Eliminar, Editar y mucho más</p>
                    <p class="py-8">Que quieres hacer hoy!</p>
                    <a href="{{ route('productos.index') }}" class="btn btn-primary">Iniciamos!</a>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection
