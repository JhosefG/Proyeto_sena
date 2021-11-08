@extends('layouts.app')

@section('titulo', 'Perfil')

@section('content')

<head>
    <link rel="stylesheet" href="{{ asset('css/perfil.css') }}">
</head>

<body>
    <main>
      <div class="container">
        <div class="left box-primary">
          <img class="image" src="{{ asset('images/usuario.png') }}" alt="Usuario" />
          <br><br>
          <h3 class="username text-center">{{ Auth::user()->name }}</h3>
          <a href="" class="btn btn-primary btn-block"><b>Editar perfil</b></a>
        </div>
        <div class="right tab-content">
          <form class="form-horizontal">
              <br>
            <div class="form-group">
                <br>
                <label for="inputName" class="col-sm-2 control-label">Nombre:</label>
                <label for="inputName" class="col-sm-2 control-label">{{ Auth::user()->name }}</label><br>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="col-sm-2 control-label">Email:</label>
              <label for="inputEmail" class="col-sm-2 control-label">{{ Auth::user()->email }}</label><br>
            </div>

            <div class="form-group">
              <label for="inputEmail" class="col-sm-2 control-label">password:</label>
              <label for="inputEmail" class="col-sm-2 control-label">***********</label><br>
            </div>


          </form>
        </div>
      </div>
    </main>
  </body>



@endsection