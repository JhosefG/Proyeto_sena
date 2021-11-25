@extends('layouts.layout')

@section('titulo', 'Factura')

@section('content')

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
  <br>
<div class="control-bar">
<div class="container">
  <div class="row">
    <div class="col-2-4">
      <div class="slogan">Facturación</div>

      <label for="config_tax">IVA:
        <input type="checkbox" id="config_tax" />
      </label>
      <label for="config_tax_rate" class="taxrelated">Tasa:
        <input type="text" id="config_tax_rate" value="19"/>%
      </label>
      <label for="config_note">Nota:
        <input type="checkbox" id="config_note" />
      </label>
      
    </div>
    <div class="col-4 text-right">
      <a href="javascript:window.print()">Imprimir</a>
      <a href="">limpiar</a>
    </div>
  </div>
</div>
</div>

<header class="row">
<div class="logoholder text-center" >
  <br>
  <img id="logo" src="{{ asset('img/logo.jpg') }}">
</div>

<div class="me">
   <br>
    <h1>LUBRIFILTROS</h1>
    <h6>CARRERA 8 N 138 15 LA CEIBA<br> IBAGUE, TOLIMA 
      <br>TELEFONO: (8)2607507 
      <br>NIT: 9008078123
    </h6>
</div>

</header>
<div class="row section">

<div class="col-2">
  <h1>Cliente:</h1>
</div>

<div class="col-1 text-right">
  <h5>Fecha: <input class="datePicker"><br></h5>
</div>



<div class="col-2">
  <!-- Button trigger modal -->
  <a type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#Modal1">Cliente</a>

  <!-- Modal -->
  <div class="modal fade" id="Modal1" tabindex="-1" aria-labelledby="Modal1Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="Modal1Label">Seleccione el cliente </h5>
          
          

          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <label >Buscar Cliente:
          <input class="form-control me-2" id="search" type="search">

        </label>
          <ul>
            @include('partials.clientes')
          </ul>

          <script>
              document.getElementById('search').addEventListener('input', function(event){
                console.log(event.target.value)
                fetch('/search?q='+event.target.value)
                  .then(res => res.text())
                  .then(html =>{
                    document.querySelector('ul').innerHTML=html
                  })
              })
          </script>
        </div>
        <div class="modal-footer">
          
          
        </div>
      </div>
    </div>
  </div>
</div>



</div>

<div class="row section" style="margin-top:-1rem">
<div class="col-1">
<table style='width:100%'>
  <thead contenteditable>

</tbody>
</table>
</div>

</div>

<div class="invoicelist-body">
<table>
  <thead>
    <th width="65%">Producto</th>
    <th width="10%">Cant.</th>
    <th width="15%">Precio</th>
    <th class="taxrelated">IVA</th>
    <th width="10%">Total</th>
  </thead>
  <tbody>
    <tr>
      <td width='65%'><a class="control removeRow" href="#">x</a><span><select name="inventarioId" class="form-select" id="inventarioId">
        <option selected>
        @foreach ($inventario as $inventario)
            
            <option value="{{ $inventario->id }}" @if ($inventario->inventarioId==$inventario->id)
                
        @endif>
        {{ $inventario->nombre }}
        </option>
        @endforeach
        </select></span>
      </td>

      <td class="amount"><input type="text" value="1"/></td>
      <td class="rate"><input type="text" value="0" /></td>
      <td class="tax taxrelated"></td>
      <td class="sum"></td>
    </tr>
  </tbody>
</table>
<a class="control newRow" href="#">Nueva fila</a>
</div>

<div class="invoicelist-footer">
<table>
  <tr class="taxrelated">
    <td>IVA:</td>
    <td id="total_tax"></td>
  </tr>
  <tr>
    <td><strong>Total:</strong></td>
    <td id="total_price"></td>
  </tr>
</table>
</div>

<div class="note" contenteditable>
<h2>Nota:</h2>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/bower_components/jquery/dist/jquery.min.js"><\/script>')</script>
<script src="{{ asset('js/main.js') }}"></script>
</body>

@endsection