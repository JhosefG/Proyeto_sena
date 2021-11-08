@extends('layouts.layout')

@section('titulo', 'INVENTARIO')
@section('content')
<style>
    body{
            background-image: url({{ asset('images/inventario.jpg') }});
        }
</style>

    <h1 class = "text-center pt-5 pb-3">INVENTARIO</h1>

    @if($mensaje = Session::get('exito'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p>{{ $mensaje }}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <a href="{{ route('inventario.create') }}" class="btn btn-primary mb-2 ">Nuevo Producto</a>

    @if ($query)
    <div class="alert alert-primary">
        <p>El resultados de la busqueda de <strong>{{ $query }} </strong>es:</p>
    </div>
    @endif
    
    <div class="card">
    <table class="table table-secondary table-hover">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($inventario as $inventario)
                <tr>
                    <td> {{ $inventario->nombre }} </td>
                    <td> {{ $inventario->cantidad}} </td>
                    <br>
                    <td>
                        <a href="{{ route('inventario.show', $inventario->id) }}" class="btn btn-info">Detalles</a>
                        <a href="{{ route('inventario.edit', $inventario->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('inventario.destroy', $inventario->id) }}" method="post" class="d-inline-flex">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('¿Confirma la eliminacion del producto {{ $inventario->nombre }} ?')">
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

