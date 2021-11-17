@extends('layouts.layout')

@section('titulo', 'Factura')

@section('content')

<div class="container">
  <head>
      <link rel="stylesheet" href="{{ asset('css/facturar.css') }}">
  </head>
<div class="page-container">
    <main class="main">
      <div id="facturar">
        <div class="header">
         
          <div>
            <div class="section-spacer">
              <h1>LUBRIFILTROS</h1>
              <h6>CARRERA 8 N 138 15 LA CEIBA<br> IBAGUE, TOLIMA <br>TELEFONO: (8)2607507 <br>NIT: 9008078123</h6>
            </div>
          </div>

          <div>
            <br>
            <h2>FACTURA</h2>
            <p>Fecha: <input type="date" ></p>
            <label for="proyectoId" class="form-label texto my-2">
              <h4>CLIENTE</h4>
            </label>
            <br>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal1">Cliente</button>

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
        <table class="responsive-table">
          <thead>
            <tr>
              <th>Producto</th>
              <th>Precio de unidad</th>
              <th>cantidad</th>
              <th>Total</th>
              <th></th>
            </tr>
          </thead>
          <tr>
            <td id="producto"> 
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal2">Producto</button>
  
              <!-- Modal -->
              <div class="modal fade" id="Modal2" tabindex="-1" aria-labelledby="Modal2Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="Modal1Label">Seleccione el producto</h5>
                      
                      
  
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <label >Buscar Producto:
                      <input id="search" class="form-control me-2" type="search">
  
                    </label>
                      <ul>
                        @include('partials.Inventario')
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
              </div></td>
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
        <button class="btn btn-danger" href='{{ route('home') }}' type="button">Limpiar</button>
      </div>
  
    </main>
    <script src="{{ asset('js/facturar.js') }}"></script>
  </div>

@endsection