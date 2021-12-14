@extends('layouts.layout')

@section('titulo', 'Editar')

@section('content')
    <style>


    </style>


    <h1 class="text-center my-5">Editar Cliente</h1>
    @if ($errors->any())
    
        <div class ="alert alert-danger">
            <div class="header">
                <strong>Ups...</strong>algo salio mal
            </div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('cliente.update', $cliente->id) }}" method="post">
        @method('put')
        @csrf
        <div>
            <label for="id" class="form-label texto my-2">
                <h4>Numero de documento</h4>
            </label>
            <input type="number" name="id" id="id" value="{{ $cliente->id }}" class="form-control" >
        </div>

        <div>
            <label for="nombre" class="form-label texto my-2">
                <h4>Nombre del cliente</h4>
            </label>
            <input type="text" name="nombre" id="nombre" value="{{ $cliente->nombre }}" class="form-control" >
        </div>
        
        <div>
            <button type="submit" class="btn btn-primary my-2"> Guardar </button>
        </div>
    </form>
@endsection