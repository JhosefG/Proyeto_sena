@extends('layouts.factura')

@section('titulo', 'Factura')

@section('content')

<head>
  <meta charset="UTF-8">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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
                  <input type="checkbox" id="config_tax"/>
                </label>
                <label for="config_tax_rate" class="taxrelated">IVA:
                  <input type="text" id="config_tax_rate" value="19"/>%
                </label>
          </div>

    <div class="col-4 text-right">
      <a href="javascript:window.print()">Imprimir</a>
      <a href="">limpiar</a>
    </div>
  </div>
</div>
</div>
<br>

    <div class="card">
      
      <header style="width: 100%" class="row"></header>
      
          <div class="logoholder text-center" >
            <br>
            <img id="logo" src="{{ asset('img/logo.jpg') }}">
          </div>

          <div class="me">
            <br>
              <h1>LUBRIFILTROS</h1>
              <h6>CARRERA 8 N 138 15 LA CEIBA
                <br>IBAGUE, TOLIMA 
                <br>TELEFONO: (8)2607507 
                <br>NIT: 9008078123
              </h6>
          </div>

      <header style="width: 100%" class="row"></header>
      
      <div class="row section">
        <div class="col-1 text-right">
            <h5 id="imprimir">Fecha: <input class="datePicker" id="datetime"><br></h5>
        </div>
          <div class="col-10">

            <h1>Cliente:</h1>
            <br>
            <select class="selectpicker col-md-5" data-live-search="true">
              <option value="0">Seleccione el cliente</option>
                @foreach ($clientes as $clientes)
                <option value="{{ $clientes->id }}" @if ($clientes->clientesId==$clientes->id)@endif>
                  {{ $clientes->nombre }}
                  </option>
                @endforeach
            </select>  
          </div>
        <br>
      </div>



      <br>
      <div class="invoicelist-body">
      <table class="table">
        <thead>
          <th id="imprimir" width="65%">Producto</th>
          <th id="imprimir" width="10%">Cant.</th>
          <th id="imprimir" width="15%">Precio</th>
          <th id="imprimir" class="taxrelated">IVA</th>
          <th id="imprimir" width="10%">SubTotal</th>
        </thead>
        <tbody>
          <tr>
            @foreach ($facturas as $factura)  
            <tr>
                <td><a class="control removeRow" href="#">x</a>{{$factura->producto}}</td>
                <td class="amount"><input type="text" value="{{ $factura->cantidad}} "></td>
                <td class="rate"><input type="text" value="{{ $factura->precio}}"></td>  
                <td class="tax taxrelated"></td>
                <td class="subtotal"></td>
            </tr>
            @endforeach
          </tr>
          
        </tbody>
      </table>
        <a href="{{ route('facturar.create') }}" class="btn btn-primary mb-2 ">Añadir producto</a>
      </div>

      <div class="invoicelist-footer">
      <table>
        <tr>
          <td id="imprimir"><strong>Total:</strong></td>
          <td id="total_price"></td>
        </tr>
      </table>
      </div>
    </div>
  
    <br>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/bower_components/jquery/dist/jquery.min.js"><\/script>')</script>
        <script src="{{ asset('js/main.js') }}"></script>
</body>

@endsection