@extends('layouts.layout')

@section('titulo', 'Detalle Del Cliente')

@section('content')
    <h1 class="tex-center pt-5 pb-3">Detalle del Cliente</h1>
<div class="">
    

    <div class="row">
        <div class="col-sm-3">
            <h3>Numero de documento</h3>
            <p>{{ $cliente->id }}</p>
    </div>

    <div class="row">
        <div class="col-sm-3">
            <h3>Nombre Del Cliente</h3>
            <p>{{ $cliente->nombre }}</p>
    </div>

    <div class="row">
        <div class="col-sm-3">
            <h3>Apellidos Del cliente:</h3>
    </div>

    <div>
        <p>{{ $cliente->apellidos }}</p>
        </div>
    </div>
    <a href="{{route('cliente.index')}}" class="btn btn-primary mt-3">Volver</a>
</div>
@endsection