@extends('layouts.layout')

@section('titulo', 'Editar')

@section('content')
    <style>
        body{
                background-image: url({{ asset('images/Fondo_Clientes.png') }});
            }
        h4{
            color: white;
        }
        h1{
        color: rgb(255, 251, 0);
        }
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
                <h4>Nombre del producto</h4>
            </label>
            <input type="text" name="nombre" id="nombre" value="{{ $cliente->nombre }}" class="form-control" >
        </div>
        
        <div>
            <label for="apellidos" class="form-label texto my-2"><h4>Cantidad</h4></label>
            <input type="text" name="apellidos" id="apellidos" value="{{ $cliente->apellidos }}" class="form-control">
        </div>
        <div>
            <button type="submit" class="btn btn-primary my-2"> Guardar </button>
        </div>
    </form>
@endsection