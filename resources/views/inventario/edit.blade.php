@extends('layouts.layout')

@section('titulo', 'Editar')

@section('content')

    
    <h1 class="text-center my-5">Editar producto</h1>
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
    <form action="{{ route('inventario.update', $inventario->id) }}" method="post">
        @method('put')
        @csrf
        <div>
            <label for="nombre" class="form-label texto my-2">
                <h4>Nombre del producto</h4>
            </label>
            <input type="text" name="nombre" id="nombre" value="{{ $inventario->nombre }}" class="form-control" >
        </div>
        
        <div>
            <label for="cantidad" class="form-label texto my-2"><h4>Cantidad</h4></label>
            <input type="number" name="cantidad" id="cantidad" value="{{ $inventario->cantidad }}" class="form-control">
        </div>
        
        <div>
            <label for="precio" class="form-label texto my-2"><h4>Precio</h4></label>
            <input type="number" name="precio" id="precio" value="{{ $inventario->precio }}" class="form-control">
        </div>

        <div>
            <button type="submit" class="btn btn-primary my-2"> Guardar </button>
        </div>
    </form>
@endsection