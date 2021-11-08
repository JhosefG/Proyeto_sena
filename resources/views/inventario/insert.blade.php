@extends('layouts.layout')

@section('titulo', 'crear nuevo')

@section('content')
<style>
        body{
                background-image: url({{ asset('images/inventario.jpg') }});
            }
</style>
<h1 class="text-center my-5">Crear nuevo</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <div class="header"><strong>Ups...</strong>algo salió mal</div>
        <ul>
            @foreach ($errors->all as $error )
            <li>{{$errors}}</li>                
            @endforeach
        </ul>
    </div>
@endif

<br>

<form action="{{route('inventario.store')}}" method="post">
    @csrf
    @method('post')
    <div >
        <label for="nombre" class="form-label texto my"> <h4>Nombre del Producto</h4></label>
        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del Producto" value="{{old('nombre')}}">
    </div>
    <div class="mb-3">
        <label for="cantidad" class="form-label texto my"> <h4>Cantidad</h4></label>
        <input type="number" class="form-control" name="cantidad" id="cantidad" placeholder="0" value="{{old('cantidad')}}" >
    </div>
    
    <button type="submit" class="btn btn-primary my-2">Guardar</button>
</form>

@endsection