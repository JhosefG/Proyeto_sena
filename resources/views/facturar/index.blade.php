@extends('layouts.layout')

@section('titulo', 'Factura')

@section('content')

<div class="container">
  <head>
      <link rel="stylesheet" href="{{ asset('css/facturar.css') }}">
      
  </head>
  <style>
    body{
        background-image: url({{ asset('images/factura.jpg') }})
        }
  </style>
<div class="page-container">
    <main class="main">
      <div id="facturar">
        <div class="header">
          <div>
            <br>
            <h2>FACTURA</h2>
            <p>Fecha: <input type="date" ></p>
          </div>
          <div>
            <div class="section-spacer">
              <h1>LUBRIFILTROS</h1>
              <h6>CARRERA 8 N 138 15 LA CEIBA<br> IBAGUE, TOLIMA <br>TELEFONO: (8)2607507 <br>NIT: 9008078123</h6>
            </div>
          </div>
        </div>
        <table class="responsive-table">
          <thead>
            <tr>
              <th>Producto</th>
              <th>Precio/unidad</th>
              <th>cantidad</th>
              <th>Total</th>
              <th></th>
            </tr>
          </thead>
          <tr>
            <td id="producto"><input type="text"></td>
            <td id="precio"><input type="number" min="0"></td>
            <td id="cantidad" ><input  type="number" min="0"></td>
            <td id="total"><input type="number" min="0"></td>
            <td class="text-right"><button class="btn btn-danger">Eliminar</button></td>
          </tr>
        </table>
        <button  class="btn btn-success">Añadir Producto</button>
        <table>
          <tr>
            <td>Subtotal</td>
            
          </tr>
          <tr>
            <td>
              <div class="cell-with-input">Descuento <input class="text-right" type="number" min="0" max="100">%</div>
            </td>
            
          </tr>
          <tr>
            <td>
              <div class="cell-with-input">Impuesto <input class="text-right" type="number" min="0" max="100">%</div>
            </td>
            
          </tr>
          <tr class="text-bold">
            <td>Total</td>
            
          </tr>
        </table>
        <button class="btn btn-success" type="button" onclick="javascript:window.print()">Imprimir</button>
        <button class="btn btn-danger" href='{{ route('facturar.index') }}' type="button">Limpiar</button>
      </div>
  
    </main>
    <script src="{{ asset('js/facturar.js') }}"></script>
  </div>

@endsection