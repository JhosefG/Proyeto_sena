@extends('layouts.layout')

@section('titulo', 'Clientes')
@section('content')
<style>
    
    h1{
        color: rgb(0, 0, 0);
    }
</style>
    
        <h1 class = "text-center pt-5 pb-3">Clientes</h1>
    

    @if($mensaje = Session::get('exito'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p>{{ $mensaje }}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif


    <a href="{{ route('cliente.create') }}" class="btn btn-primary mb-2 ">Nuevo Cliente</a>

    @if ($query)
    <div class="alert alert-primary">
        <p>El resultados de la busqueda de <strong>{{ $query }} </strong>es:</p>
    </div>
    @endif
    
    <div class="">
    <table class="table table-hover table-secondary">
        <thead>
            <tr>
                <th>Numero de documento</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
        
            @foreach ($cliente as $clientes)
            <tr>
                <td> {{ $clientes->id }} </td>
                <td> {{ $clientes->nombre}} </td>
                <td> {{ $clientes->apellidos}} </td>
                <br>
                <td>
                    <a href="{{ route('cliente.show', $clientes->id) }}" class="btn btn-info">Detalles</a>
                    <a href="{{ route('cliente.edit', $clientes->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('cliente.destroy', $clientes->id) }}" method="post" class="d-inline-flex">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('¿Confirma la eliminacion del cliente {{ $clientes->nombre }} ?')">
                            Eliminar
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
      
        
        
        </tbody>
    </table>
</div>
@endsection

