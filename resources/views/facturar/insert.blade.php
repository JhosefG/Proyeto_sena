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



<h1 class="text-center my-5">Agregar producto</h1>

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
<form action="{{route('facturar.store')}}" method="post">
    @csrf
    @method('post')

    <h3>PRODUCTO</h3>

    <div >

        <label for="producto" class="form-label texto my"></label>
        <select  value="{{old('producto')}}" data-live-search="true" name="producto" class="col-md-12 selectpicker" id="producto" required>
            <option value="">Seleccione el producto</option>
              @foreach ($inventario as $inventario)
                <option value="{{ $inventario->nombre }}" @if ($inventario->inventarioId==$inventario->id)@endif>
                  {{ $inventario->nombre }}
              @endforeach
        </select>
        <br>
    </div>

    <h3>CANTIDAD</h3>
    
    <div>
        <input type="number" class="form-control" name="cantidad" id="cantidad" min="1" value="{{old('cantidad')}}" required>
    </div>

    <h3>PRECIO</h3>
    
    <div>
        <input type="number" class="col-md-9 md-4 form-control" name="precio" id="precio" value="{{old('precio')}}" required>
    </div>

    <br>
    <button type="submit" class="btn btn-primary my-3">Agregar</button>
</form>












    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/bower_components/jquery/dist/jquery.min.js"><\/script>')</script>
    <script src="{{ asset('js/main.js') }}"></script>
@endsection














