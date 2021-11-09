@extends('layouts.layout')

@section('titulo', 'crear nuevo')

@section('content')
<style>
        h4{
            color: rgb(0, 0, 0);
        }
        h1{
        color: rgb(0, 0, 0);
        }
</style>
<h1 class="text-center my-5">Crear nuevo cliente</h1>
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
<form action="{{route('cliente.store')}}" method="post">
    @csrf
    @method('post')
    <div >
        <label for="id" class="form-label texto my"> <h4>Numero de identificacion</h4></label>
        <input type="number" class="form-control" name="id" id="id" placeholder="0" value="{{old('id')}}">
        <br>
    </div>
    <div >
        <label for="nombre" class="form-label texto my"> <h4>Nombre del cliente</h4></label>
        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del cliente" value="{{old('nombre')}}">
        <br>
    </div>
    <div class="mb-3">
        <label for="apellidos" class="form-label texto my"> <h4>Apellidos del cliente</h4></label>
        <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="apellidos del cliente" value="{{old('apellidos')}}" >
    </div>
    <button type="submit" class="btn btn-primary my-2">Guardar</button>
</form>
@endsection