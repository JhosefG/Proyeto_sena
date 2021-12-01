@extends('layouts.layout')

@section('titulo', 'detalle del inventario')

@section('content')
    <h1 class="tex-center pt-5 pb-3">Detalle del inventario</h1>
<div class="card">
    <br>
    <div class="row g-0">
        
        <div class="row">

            <div class="col-sm-3">
                <h3>Nombre</h3>
            </div>
            
            <div>
                <p>{{ $inventario->nombre }}</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-3">
                <h3>Cantidad:</h3>
            </div>
            <div>
                <p>{{ $inventario->cantidad }}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <h3>Precio:</h3>
            </div>
            <div>
                <p>{{ $inventario->precio }}</p>
            </div>
        </div>
        
    </div>
    <br>
    <a href="{{route('inventario.index')}}" class="btn btn-primary mt-6">Volver</a>
</div>
@endsection