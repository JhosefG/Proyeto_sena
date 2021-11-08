@extends('layouts.app')
@section('titulo', 'Menu principal')
@section('content')

<style>
    .title {
        font-family: 'Pacifico';
        font-weight: normal;
        font-size: 40px;
        text-align: center;
        line-height: 1.4;
        color: rgb(0, 0, 0);


    }
    .dropdown.menu{
      display: block;
      text-align: center;
      
    }

</style>
<div class="container">
    <div class="">
        <h1 class="title">Menu Principal</h1>
        <ul>
          <li class="dropdown menu">
            <a class="btn btn-danger" href="{{ route('inventario.index') }}" data-toggle="dropdown">Inventario</a>
          </li>
          <br>
          <li class="dropdown menu">
            <a class="btn btn-danger" href="{{ route('cliente.index') }}" data-toggle="dropdown">Clientes</a>
          </li>
          <br>
          <li class="dropdown menu">
            <a class="btn btn-danger" href="{{ route('facturar.index') }}" data-toggle="dropdown">Facturar</a>
          </li>
        </ul>
      </div>
</div>
@endsection
